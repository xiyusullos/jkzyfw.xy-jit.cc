<?php
use App\Department;

class DepartmentsTableSeeder extends DatabaseSeeder{
    public function run(){
        DB::table('departments')->delete();

        $departments = [
            ['id' => 1, 'university_id' => 1, 'department_name' => '软件工程学院'],
            ['id' => 2, 'university_id' => 1, 'department_name' => '商学院'],
            ['id' => 3, 'university_id' => 1, 'department_name' => '人文学院'],
            ['id' => 4, 'university_id' => 1, 'department_name' => '艺术学院'],
            ['id' => 5, 'university_id' => 1, 'department_name' => '机电工程学院'],
            ['id' => 6, 'university_id' => 1, 'department_name' => '信息技术学院'],
            ['id' => 7, 'university_id' => 1, 'department_name' => '建筑工程学院'],
            ['id' => 8, 'university_id' => 1, 'department_name' => '材料工程学院'],
            ['id' => 9, 'university_id' => 1, 'department_name' => '园艺学院'],
            ['id' => 10, 'university_id' => 1, 'department_name' => '动物科学与技术学院'],
            ['id' => 11, 'university_id' => 1, 'department_name' => '外国语学院'],
            ['id' => 12, 'university_id' => 1, 'department_name' => '计算机工程学院'],
            ['id' => 13, 'university_id' => 1, 'department_name' => '动漫学院'],
            ['id' => 14, 'university_id' => 1, 'department_name' => '电子信息工程学院（筹）'],
            ['id' => 15, 'university_id' => 1, 'department_name' => '网络与通信工程学院（筹）'],
            ['id' => 16, 'university_id' => 1, 'department_name' => '智能科学与控制工程学院（筹）'],
            ['id' => 17, 'university_id' => 1, 'department_name' => '国际教育学院'],
        ];

        foreach ($departments as $department) {
            Department::create($department);
        }
    }
}