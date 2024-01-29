<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


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

}
