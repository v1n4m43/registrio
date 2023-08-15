<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DelayedBirthRegistration extends Model
{
    use HasFactory;
    protected $table = 'delayed_birth_registrations';
}
