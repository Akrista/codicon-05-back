#!/bin/bash
export $(cat .env | xargs)
docker-compose build
docker-compose up -d --force-recreate
while ! docker-compose exec mysql mysqladmin ping -h"localhost" --silent; do
    sleep 1
done
docker-compose exec mysql mysql -u root -p$DB_PASSWORD -e "CREATE DATABASE IF NOT EXISTS fundease"
docker-compose exec app php artisan migrate --seed --force
