<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'name',
        'place',
        'label',
        'description',
    ];

    public function registerProgram(){
        return $this->hasMany(RegisterProgram::class);
    }
}
