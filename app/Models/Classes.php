<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $fillable = [
        'class_name',
        'class_code',
        'class_description',
        'class_teacher',
        'class_time',
        'class_day'
    ];
    //le asignamos la relacion de uno a muchas classes
    public function students()
    {
        return $this->hasMany(Students::class);
    }
}
