<?php
namespace Database\Seeders;

use App\Http\Middleware\Custom\Teacher;
use App\Models\MyClass;
use App\User;
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
        $t = User::where('user_type', 'teacher')->pluck('id')->all();

        $data = [
            ['name' => 'C++', 'my_class_id' => $c[0], 'slug' => 'C++', 'teacher_id' => $t[0]],
            ['name' => 'Trends in computing', 'my_class_id' => $c[0], 'slug' => 'TC', 'teacher_id' => $t[0]],
            ['name' => 'Knowledge management', 'my_class_id' => $c[0], 'slug' => 'KM', 'teacher_id' => $t[0]],
            ['name' => 'Introduction of Network', 'my_class_id' => $c[0], 'slug' => 'IN', 'teacher_id' => $t[0]],
            ['name' => 'Visual Programming', 'my_class_id' => $c[0], 'slug' => 'VP', 'teacher_id' => $t[0]],
            ['name' => 'Digital Electronic', 'my_class_id' => $c[0], 'slug' => 'DE', 'teacher_id' => $t[0]],
            ['name' => 'Data Analytics', 'my_class_id' => $c[0], 'slug' => 'DA', 'teacher_id' => $t[0]],
            ['name' => 'Data Mining', 'my_class_id' => $c[1], 'slug' => 'DM', 'teacher_id' => $t[0]],
            ['name' => 'Software Testing', 'my_class_id' => $c[1], 'slug' => 'ST', 'teacher_id' => $t[0]],
            ['name' => 'Value Education', 'my_class_id' => $c[1], 'slug' => 'VE', 'teacher_id' => $t[0]],
            ['name' => 'English', 'my_class_id' => $c[1], 'slug' => 'E', 'teacher_id' => $t[0]],
            ['name' => 'Maths', 'my_class_id' => $c[1], 'slug' => 'M', 'teacher_id' => $t[0]],
            ['name' => 'Introduction to C', 'my_class_id' => $c[1], 'slug' => 'IC', 'teacher_id' => $t[0]]
            ['name' => 'Opps', 'my_class_id' => $c[1], 'slug' => 'OPPS', 'teacher_id' => $t[0]],
            ['name' => 'C', 'my_class_id' => $c[2], 'slug' => 'C', 'teacher_id' => $t[0]],
            ['name' => 'Data Structure', 'my_class_id' => $c[2], 'slug' => 'DS', 'teacher_id' => $t[0]],
            ['name' => 'Database Management System', 'my_class_id' => $c[2], 'slug' => 'DMS', 'teacher_id' => $t[0]],
            ['name' => 'Java', 'my_class_id' => $c[2], 'slug' => 'J', 'teacher_id' => $t[0]],
            ['name' => 'Operating System', 'my_class_id' => $c[2], 'slug' => 'OS', 'teacher_id' => $t[0]],
            ['name' => 'Computer Network', 'my_class_id' => $c[2], 'slug' => 'CN', 'teacher_id' => $t[0]],
        ];

        DB::table('subjects')->insert($data);
    }
}
