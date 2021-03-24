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
            ['name' => '1st Sem', 'class_type_id' => $ct[0]],
            ['name' => '2nd Sem', 'class_type_id' => $ct[0]],
            ['name' => '3rd Sem', 'class_type_id' => $ct[0]],
            ['name' => '4th Sem', 'class_type_id' => $ct[0]],
            ['name' => '5th Sem', 'class_type_id' => $ct[0]],
            ['name' => '6th Sem', 'class_type_id' => $ct[0]],
            ['name' => '1st Sem', 'class_type_id' => $ct[1]],
            ['name' => '2nd Sem', 'class_type_id' => $ct[1]],
            ['name' => '3rd Sem', 'class_type_id' => $ct[1]],
            ['name' => '4th Sem', 'class_type_id' => $ct[1]],
            ['name' => '5th Sem', 'class_type_id' => $ct[1]],
            ['name' => '6th Sem', 'class_type_id' => $ct[1]],
            ['name' => '1st Sem', 'class_type_id' => $ct[2]],
            ['name' => '2nd Sem', 'class_type_id' => $ct[2]],
            ['name' => '3rd Sem', 'class_type_id' => $ct[2]],
            ['name' => '4th Sem', 'class_type_id' => $ct[2]],
            ['name' => '5th Sem', 'class_type_id' => $ct[2]],
            ['name' => '6th Sem', 'class_type_id' => $ct[2]]
            ];

        DB::table('my_classes')->insert($data);

    }
}
