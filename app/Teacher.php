<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model {
    protected $table = 'teachers';

    function tasks(){
        return $this->hasMany('Task', 'publisher_id', 'id');
    }

    public function users(){
        return $this->belongsTo('App\User', 'uid', 'uid');
    }

}
