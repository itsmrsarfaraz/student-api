<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'title'])]
class Course extends Model
{
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
