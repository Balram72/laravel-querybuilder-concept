<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\lecturer;
class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/lecturer.json');
        $lecturer = collect(json_decode($json));
        $lecturer->each(function ($lecturer) {
            lecturer::create([
                'name' => $lecturer->name,
                'email' => $lecturer->email,
                'age' => $lecturer->age,
                'city' => $lecturer->city,
            ]);
        });
    }
}
