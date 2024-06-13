<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name' => 'CEO',
            'level' => 1,
            'employee' => '4000',
            'ambassador' => 'Eevee',
        ]);

        DB::table('departments')->insert([
            'name' => 'COO',
            'department_id' => 1,
            'level' => 2,
            'employee' => '500',
            'ambassador' => 'Charmander',
        ]);

        DB::table('departments')->insert([
            'name' => 'CIO',
            'department_id' => 1,
            'level' => 2,
            'employee' => '500',
            'ambassador' => 'Bulbasaur',
        ]);

        DB::table('departments')->insert([
            'name' => 'CMO',
            'department_id' => 1,
            'level' => 2,
            'employee' => '500',
            'ambassador' => 'Bulbasaur',
        ]);

        DB::table('departments')->insert([
            'name' => 'CFO',
            'department_id' => 1,
            'level' => 2,
            'employee' => '500',
            'ambassador' => 'Pikachu',
        ]);

        DB::table('departments')->insert([
            'name' => 'VP Operations',
            'department_id' => 2,
            'level' => 3,
            'employee' => '250',
            'ambassador' => 'Ditto',
        ]);

        DB::table('departments')->insert([
            'name' => 'Facilities Director',
            'department_id' => 6,
            'level' => 4,
            'employee' => '250',
            'ambassador' => 'Charizard',
        ]);

        DB::table('departments')->insert([
            'name' => 'Production Director',
            'department_id' => 6,
            'level' => 4,
            'employee' => '250',
            'ambassador' => 'Charizard',
        ]);

        DB::table('departments')->insert([
            'name' => 'VP Technical Operations',
            'department_id' => 3,
            'level' => 3,
            'employee' => '250',
            'ambassador' => 'Rattata',
        ]);

        DB::table('departments')->insert([
            'name' => 'VP Project Management',
            'department_id' => 3,
            'level' => 3,
            'employee' => '250',
            'ambassador' => 'Ditto',
        ]);

        DB::table('departments')->insert([
            'name' => 'VP Data Services',
            'department_id' => 3,
            'level' => 3,
            'employee' => '250',
            'ambassador' => 'Eevee',
        ]);

        DB::table('departments')->insert([
            'name' => 'VP Marketing',
            'department_id' => 4,
            'level' => 3,
            'employee' => '250',
            'ambassador' => 'Charizard',
        ]);

        DB::table('departments')->insert([
            'name' => 'VP Sales',
            'department_id' => 4,
            'level' => 3,
            'employee' => '250',
            'ambassador' => 'Squirtle',
        ]);

        DB::table('departments')->insert([
            'name' => 'VP of Business Development',
            'department_id' => 4,
            'level' => 3,
            'employee' => '250',
            'ambassador' => 'Charmander',
        ]);

        DB::table('departments')->insert([
            'name' => 'VP Finance',
            'department_id' => 5,
            'level' => 3,
            'employee' => '250',
            'ambassador' => 'Bulbasaur',
        ]);

        DB::table('departments')->insert([
            'name' => 'VP Account Payable',
            'department_id' => 15,
            'level' => 4,
            'employee' => '250',
            'ambassador' => 'Pikachu',
        ]);
    }
}
