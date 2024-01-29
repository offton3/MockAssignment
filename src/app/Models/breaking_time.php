<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class breaking_time extends Model
{
    use HasFactory;

    protected $fillable = [
        'working_time_id',
        'breaking_start',
        'breaking_end',
    ];

    public function working_time(){
        return $this->belongsTo(working_time::class);
    }

    public function getWorkingTimeId(){
        return $this->working_time_id;
    }

    public function getBreakingStart(){
        return $this->breaking_start;
    }

    public function getBreakingEnd(){
        return $this->breaking_end;
    }
}
