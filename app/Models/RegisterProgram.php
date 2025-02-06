<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisterProgram extends Model
{
    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'program_id',
        'identity_type',
        'identity_number',
        'address',
        'reason_to_join',
        'information_source',
        'referral',
    ];

    public function program() {
        return $this->belongsTo(Program::class);
    }
}
