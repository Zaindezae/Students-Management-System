<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_types')->delete();

        $data = [
            ['name' => 'Bachelor of Computer Applications', 'code' => 'BCA'],
            ['name' => 'Bachelor of Business Administration', 'code' => 'BBA'],
            ['name' => 'Bachelor of Commerce', 'code' => 'BCom'],
        ];

        DB::table('class_types')->insert($data);

    }
}
