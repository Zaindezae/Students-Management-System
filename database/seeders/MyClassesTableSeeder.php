<?php
namespace Database\Seeders;

use App\Models\ClassType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MyClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_classes')->delete();
        $ct = ClassType::pluck('id')->all();

        $data = [
            ['name' => 'BCA 1st Sem', 'class_type_id' => $ct[0]],
            ['name' => 'BCA 2nd Sem', 'class_type_id' => $ct[0]],
            ['name' => 'BCA 3rd Sem', 'class_type_id' => $ct[0]],
            ['name' => 'BCA 4th Sem', 'class_type_id' => $ct[0]],
            ['name' => 'BCA 5th Sem', 'class_type_id' => $ct[0]],
            ['name' => 'BCA 6th Sem', 'class_type_id' => $ct[0]],
            ['name' => 'BBA 1st Sem', 'class_type_id' => $ct[1]],
            ['name' => 'BBA 2nd Sem', 'class_type_id' => $ct[1]],
            ['name' => 'BBA 3rd Sem', 'class_type_id' => $ct[1]],
            ['name' => 'BBA 4th Sem', 'class_type_id' => $ct[1]],
            ['name' => 'BBA 5th Sem', 'class_type_id' => $ct[1]],
            ['name' => 'BBA 6th Sem', 'class_type_id' => $ct[1]],
            ['name' => 'BCom 1st Sem', 'class_type_id' => $ct[2]],
            ['name' => 'BCom 2nd Sem', 'class_type_id' => $ct[2]],
            ['name' => 'BCom 3rd Sem', 'class_type_id' => $ct[2]],
            ['name' => 'BCom 4th Sem', 'class_type_id' => $ct[2]],
            ['name' => 'BCom 5th Sem', 'class_type_id' => $ct[2]],
            ['name' => 'BCom 6th Sem', 'class_type_id' => $ct[2]]
            ];

        DB::table('my_classes')->insert($data);

    }
}
