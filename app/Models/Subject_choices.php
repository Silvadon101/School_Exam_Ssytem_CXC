<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject_choices extends Model
{
    use HasFactory;
    protected $fillable = [
        'subchoice_id',
        'student_id',
        'subject_id',
        'approved'
    ];
}
