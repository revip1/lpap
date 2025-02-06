<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestProgram extends Model
{
    protected $fillable = [
        'name',
        'place',
        'message',
        'no_contact_person',
        'implementation_time',
    ];
}
