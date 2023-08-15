<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'position',
        'salary',
        'phone',
        'address',
        'image',
        'age',
        'department',
        'gender',
        'relation_status',
        'military_status',
        'hire_date',
        'attendance_at',
    ];

}
