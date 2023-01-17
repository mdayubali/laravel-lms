<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'course_id',
        'class_date',
        'class_day',
        'class_time'
    ];
    public function homeworks(){
        return $this->hasMany(Homework::class);
    }
    public function attendences(){
        return $this->hasMany(Attendence::class);
    }
    public function notes(){
        return $this->belongsToMany(Note::class, 'curriculum_note', 'curriculum_id', 'note_id');
    }
    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function presentStudents(){
        return Attendence::where('curriculum_id', $this->id)->count();
    }
}
