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
    
}
