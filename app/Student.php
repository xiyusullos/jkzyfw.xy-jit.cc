<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {
    protected $table = 'students';


    public function users(){
        return $this->belongsTo('User', 'uid', 'uid');
    }
    public function classes(){
        return $this->belongsTo('Klass', 'class_id', 'id');
    }
    public function departments(){
        return $this->belongsTo('Department', 'department_id', 'id');
    }

}
