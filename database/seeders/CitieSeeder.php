<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Citie;
class CitieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        $json = File::get(path:'database/json/citie.json');
        $citie = collect(json_decode($json));
        $citie->each(function ($citie) {
            citie::create([
                'city_name' => $citie->name,
            ]);
        });
    }
}
