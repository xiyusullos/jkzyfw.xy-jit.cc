<?php
use App\Role;

class RolesTableSeeder extends DatabaseSeeder{
    public function run(){
        DB::table('roles')->delete();

        $roles = [
            ['user_id' => '1', 'role_zh' => '学生'],
            ['user_id' => '1', 'role_zh' => '社团负责人'],
            ['user_id' => '2', 'role_zh' => '学生'],
            ['user_id' => '3', 'role_zh' => '教师'],
            ['user_id' => '4', 'role_zh' => '教师'],
            ['user_id' => '3', 'role_zh' => '班主任'],
            ['user_id' => '4', 'role_zh' => '班主任'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}