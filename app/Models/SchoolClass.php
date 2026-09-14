<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;


#[Fillable(['name', 'academic_year', 'type'])]
class SchoolClass extends Model
{
    /** @use HasFactory<\Database\Factories\ShcoolClassFactory> */
    use HasFactory;
}
