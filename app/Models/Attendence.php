<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    protected $fillable = [
        'curriculum_id',
        'user_id'
    ];
    use HasFactory;
}
