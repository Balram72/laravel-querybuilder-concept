<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Employee;
class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/employee.json');
        $employee = collect(json_decode($json));
        $employee->each(function ($employee) {
            employee::create([
                'name' => $employee->name,
                'email' => $employee->email,
                'age' => $employee->age,
                'city' => $employee->city,
            ]);
        });
    }
}
