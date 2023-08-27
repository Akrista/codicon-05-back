<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert specific values on Organization table
        Organization::insert([
            [
                'name' => 'Alianza para la Acción Climática Venezuela',
                'description' => 'Organización dedicada a abordar los desafíos del cambio climático en Venezuela a través de la sensibilización, la promoción de políticas ambientales y la movilización ciudadana',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'ACOANA',
                'description' => 'Asociación Civil de conservación y protección del ambiente en Venezuela, enfocada en la conservación de la biodiversidad y la educación ambiental',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'Agroclima Venezuela',
                'description' => 'ONG que trabaja en la intersección entre la agricultura sostenible y el cambio climático, promoviendo prácticas agrícolas resilientes y amigables con el medio ambiente',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'Asociación Civil Acción Campesina',
                'description' => 'Organización que apoya a las comunidades rurales y campesinas en Venezuela, promoviendo la seguridad alimentaria, el desarrollo rural y la equidad',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'Caritas de Venezuela',
                'description' => 'Organización humanitaria de la Iglesia Católica que brinda asistencia a comunidades vulnerables en áreas como alimentación, salud y educación',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'Clima21 - Ambiente y Derechos Humanos',
                'description' => 'ONG que trabaja en la intersección entre el cambio climático y los derechos humanos, abogando por políticas ambientales justas y sostenibles',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'Colectivo de Montañismo Ecológico Tatuy',
                'description' => 'Grupo que promueve el montañismo responsable y la conservación de los ecosistemas de montaña en Venezuela',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'Comitato Internazionale Per Lo Sviluppo Dei Popoli (CISP)',
                'description' => 'Organización internacional que trabaja en el desarrollo comunitario y la cooperación internacional en áreas diversas, incluyendo Venezuela',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'Eposak',
                'description' => 'ONG que se enfoca en la conservación y protección de especies en peligro de extinción en Venezuela',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'Fundación Agua Clara',
                'description' => 'Organización que trabaja en la protección y gestión sostenible de los recursos hídricos en Venezuela',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'Fundación Azul Ambientalistas',
                'description' => 'ONG dedicada a la conservación y restauración de ecosistemas acuáticos y marinos en Venezuela',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'Fundación Caribe Sur',
                'description' => 'Organización que trabaja en la conservación de los recursos naturales y la promoción del desarrollo sostenible en la región del Caribe venezolano',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'FUDENA',
                'description' => 'Fundación para la Defensa de la Naturaleza, enfocada en la conservación ambiental, el desarrollo sostenible y la educación',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'Fundación El Zulia Recicla',
                'description' => 'ONG que promueve la cultura del reciclaje y la gestión adecuada de los residuos en el estado Zulia',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'Fundación Reusamas',
                'description' => 'Organización que se dedica al reciclaje y la reutilización de materiales para promover la sustentabilidad',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'Fundación Tierra Viva',
                'description' => 'ONG que trabaja en la promoción de la agroecología, la soberanía alimentaria y la conservación de la biodiversidad',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'Geografía Viva',
                'description' => 'Organización que aboga por la justicia social, la equidad y la participación ciudadana en Venezuela',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'Grupo Social CESAP',
                'description' => 'Organización que aboga por la justicia social, la equidad y la participación ciudadana en Venezuela',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'La Tierra se Calienta',
                'description' => 'ONG que se dedica a la sensibilización y educación sobre el cambio climático y sus impactos',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'Instituto Venezolano de Estudios Sociales y Políticos (INVESP)',
                'description' => 'Organización enfocada en la investigación y análisis de temas sociales y políticos en Venezuela',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'Phynatura, Asociación civil',
                'description' => 'ONG que promueve la educación y conservación ambiental a través de programas educativos y proyectos comunitarios',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'Provita',
                'description' => 'Organización dedicada a la conservación de la biodiversidad venezolana a través de la investigación, la educación y la participación comunitaria',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'Sociedad de Ciencias Naturales La Salle (SCNLS)',
                'description' => 'Organización que promueve el estudio y la conservación de la naturaleza a través de la investigación científica',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'Todos por el Futuro',
                'description' => 'ONG que busca promover la sostenibilidad y el desarrollo integral en Venezuela a través de proyectos y programas comunitarios',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'VerdelaTierra, A.C.',
                'description' => 'Organización que trabaja en la educación ambiental, la reforestación y la promoción de prácticas sostenibles',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'Vitalis, A.C.',
                'description' => 'ONG que se enfoca en la conservación y restauración de ecosistemas naturales en Venezuela',
                'image_path' => '',
                'created_at' => now(),
            ],
            [
                'name' => 'Wataniba, Grupo de Trabajo Socioambiental',
                'description' => 'Organización que trabaja con comunidades indígenas en la conservación de sus territorios y la promoción de sus derechos socioambientales',
                'image_path' => '',
                'created_at' => now(),
            ],

        ]);
    }
}
