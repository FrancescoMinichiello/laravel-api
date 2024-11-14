<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fullstack = Type::where("name", "Full-stack")->first();
        $backend = Type::where("name", "Back-end")->first();
        $frontend = Type::where("name", "Front-end")->first();


        Project::create([
            "name" => "Progetto Laravel full-stack",
            "link" => "https://github.com/FrancescoMinichiello/laravel-many-to-many",
            "type_id" => $fullstack->id,
        ]);
        Project::create([
            "name" => "Progetto Laravel back-end",
            "link" => "https://github.com/FrancescoMinichiello/laravel-primi-passi",
            "type_id" => $backend->id,
        ]);
        Project::create([
            "name" => "Progetto front-end",
            "link" => "https://github.com/FrancescoMinichiello/Playstation",
            "type_id" => $frontend->id,
        ]);
    }
}
