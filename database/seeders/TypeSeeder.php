<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typesName = [
            "Full-Stack",
            "Back-end",
            "Front-end",
        ];

        foreach ($typesName as $name) {
            $newType = new Type();
            $newType->name = $name;
            $newType->save();
        }
    }
}
