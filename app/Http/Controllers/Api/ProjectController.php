<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = project::with("technologies")->get();
        return response()->json(
            [
                "success" => true,
                "results" => $projects,
            ]
        );
    }
}
