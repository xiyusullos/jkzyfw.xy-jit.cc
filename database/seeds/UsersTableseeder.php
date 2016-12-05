<?php
use App\User;

class UsersTableSeeder extends DatabaseSeeder{
    public function run(){
        DB::table('users')->delete();

        $users = [
            ['job' => 'STUDENT', 'username' => '1205106131', 'name' => '徐勇', 'password' => Hash::make('1205106131')],
            ['job' => 'STUDENT', 'username' => '1205106132', 'name' => '单义国', 'password' => Hash::make('1205106132')],
            ['job' => 'TEACHER', 'username' => '01188','name' => '洪蕾', 'password' => Hash::make('01188')],
            ['job' => 'TEACHER', 'username' => '01199','name' => '李慧', 'password' => Hash::make('01199')],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}