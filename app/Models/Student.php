<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Override;

#[Fillable(['name', 'email', 'age', 'phone'])]
class Student extends Model
{
    #[Override]
    public function casts(): array
    {
        return[
            'age' => 'integer',
        ];
    }
    public function courses(){
        return $this->belongsToMany(Course::class);
    }
}
