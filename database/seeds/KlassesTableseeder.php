<?php
use App\Klass;

class KlassesTableSeeder extends DatabaseSeeder{
    public function run(){
        DB::table('classes')->delete();

        $classes = [
            ['department_id' => 1, 'class_name' => '13软件工程（1）'],
            ['department_id' => 1, 'class_name' => '13软件工程（2）'],
            ['department_id' => 1, 'class_name' => '13软件工程（3）'],
            ['department_id' => 1, 'class_name' => '13软件工程（4）'],
            ['department_id' => 1, 'class_name' => '13软件工程（NIIT）'],
            ['department_id' => 1, 'class_name' => 'M13软件工程'],

            ['department_id' => 2, 'class_name' => '13国际经济与贸易（1）'],
            ['department_id' => 2, 'class_name' => '13国际经济与贸易（2）'],
            ['department_id' => 2, 'class_name' => '13国际经济与贸易（3）'],
            ['department_id' => 2, 'class_name' => '13会计学（1）'],
            ['department_id' => 2, 'class_name' => '13会计学（2）'],
            ['department_id' => 2, 'class_name' => '13会计学（3）'],
            ['department_id' => 2, 'class_name' => '13会计学（4）'],
            ['department_id' => 2, 'class_name' => '13会计学（5）'],
            ['department_id' => 2, 'class_name' => '13金融学（1）'],
            ['department_id' => 2, 'class_name' => '13金融学（2）'],
            ['department_id' => 2, 'class_name' => '13市场营销（1）'],
            ['department_id' => 2, 'class_name' => '13市场营销（2）'],
            ['department_id' => 2, 'class_name' => '13市场营销（3）'],
            ['department_id' => 2, 'class_name' => '13财务管理（1）'],
            ['department_id' => 2, 'class_name' => '13财务管理（2）'],
            ['department_id' => 2, 'class_name' => '13财务管理（单）'],
            ['department_id' => 2, 'class_name' => '13物流管理（1）'],
            ['department_id' => 2, 'class_name' => '13物流管理（2）'],
            ['department_id' => 2, 'class_name' => '13会计学（W专转本）'],
            ['department_id' => 2, 'class_name' => 'M13会计学'],
            ['department_id' => 2, 'class_name' => 'M13会计学（W专转本）'],
            ['department_id' => 2, 'class_name' => 'M13金融学'],
            ['department_id' => 2, 'class_name' => 'M13金融学（W专转本）'],
            ['department_id' => 2, 'class_name' => 'M13财务管理（专转本）'],

            ['department_id' => 3, 'class_name' => '13旅游管理（1）'],
            ['department_id' => 3, 'class_name' => '13旅游管理（2）'],
            ['department_id' => 3, 'class_name' => '13旅游管理（单）'],

            ['department_id' => 4, 'class_name' => '13服装设计与工程'],

            ['department_id' => 5, 'class_name' => '13电气工程及其自动化（1）'],
            ['department_id' => 5, 'class_name' => '13电气工程及其自动化（2）'],
            ['department_id' => 5, 'class_name' => '13电气工程及其自动化（单）'],

            ['department_id' => 6, 'class_name' => '暂无'],
            ['department_id' => 7, 'class_name' => '暂无'],
            ['department_id' => 8, 'class_name' => '暂无'],
            ['department_id' => 9, 'class_name' => '暂无'],
            ['department_id' => 10, 'class_name' => '暂无'],
            ['department_id' => 11, 'class_name' => '暂无'],
            ['department_id' => 12, 'class_name' => '暂无'],
            ['department_id' => 13, 'class_name' => '暂无'],
            ['department_id' => 14, 'class_name' => '暂无'],
            ['department_id' => 15, 'class_name' => '暂无'],
            ['department_id' => 16, 'class_name' => '暂无'],
            ['department_id' => 17, 'class_name' => '暂无'],

        ];

        foreach ($classes as $class) {
            Klass::create($class);
        }
    }
}