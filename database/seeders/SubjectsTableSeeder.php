<?php
namespace Database\Seeders;

use App\Models\MyClass;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->delete();
        $c = MyClass::pluck('id')->all();

        $data = [
            ['name' => 'C++', 'my_class_id' => $c[0],],
            ['name' => 'Trends in computing', 'my_class_id' => $c[0]],
            ['name' => 'Knowledge management', 'my_class_id' => $c[1]],
            ['name' => 'Introduction of network', 'my_class_id' => $c[1]],
            ['name' => 'Visual programming', 'my_class_id' => $c[1]],
            ['name' => 'Data analytics', 'my_class_id' => $c[1]],
            ['name' => 'Data mining', 'my_class_id' => $c[1]],
            ['name' => 'Software testing', 'my_class_id' => $c[1]],
            ['name' => 'Value education', 'my_class_id' => $c[2]],
            ['name' => 'English', 'my_class_id' => $c[2]],
            ['name' => 'Maths', 'my_class_id' => $c[3]],
            ['name' => 'Opps', 'my_class_id' => $c[3]],
            ['name' => 'C', 'my_class_id' => $c[4]],
            ['name' => 'Data structure', 'my_class_id' => $c[4]],
            ['name' => 'Database management system', 'my_class_id' => $c[5]],
            ['name' => 'Java', 'my_class_id' => $c[5]],
            ['name' => 'Operating system', 'my_class_id' => $c[6]],
            ['name' => 'Computer network', 'my_class_id' => $c[6]],
            ['name' => 'Digital electronic', 'my_class_id' => $c[7]],
            ['name' => 'Introduction to c', 'my_class_id' => $c[7]]
        ];

        DB::table('subjects')->insert($data);
    }
}
