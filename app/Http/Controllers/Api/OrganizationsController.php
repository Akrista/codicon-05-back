<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationsController extends Controller
{
    public function index(Request $request)
    {
        $organizations = Organization::all();

        return response()->json($organizations);
    }
}
