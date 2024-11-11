<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $primaryKey = 'teacher_id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
}
