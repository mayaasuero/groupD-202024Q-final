<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id_number','firstname','lastname','birthdate','address','year_level','course','middlename'];
    protected $primaryKey = 'id_number';
}
