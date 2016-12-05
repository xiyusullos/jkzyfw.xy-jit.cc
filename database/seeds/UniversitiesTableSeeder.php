<?php
use App\University;

class UniversitiesTableSeeder extends DatabaseSeeder{
    public function run(){
        DB::table('universities')->delete();

        $universities = [
            ['id' => 1, 'university_name' => '金陵科技学院'],
        ];

        foreach ($universities as $university) {
            University::create($university);
        }
    }
}