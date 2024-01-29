<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DateTime;


class working_time extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'working_start',
        'working_end',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
    
    public function getBreakTime(){
        return $this->hasMany('App\Models\breaking_time');
    }

    public function getUserId(){
        return $this->user_id;
    }

    public function getWorkingStart(){
        return $this->working_start;
    }

    public function getWorkingEnd(){
        return $this->working_end;
    }

    public function getWorkingTime(){
        $test=$this->working_start;
        $test2=$this->working_end;

        $pastDateTime = new DateTime("@$test");
        $pastDateTime2 = new DateTime("@$test2");

        $test3=$pastDateTime-$pastDateTime2;

        return $test3;
    }

}
