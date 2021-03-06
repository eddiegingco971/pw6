<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    use HasFactory;

    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
