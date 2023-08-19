<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdministeringOfficer extends Model
{
    use HasFactory;

    protected $table = 'administering_officers';
    protected $fillable = [
        'administering_date', 'address', 'issued_on', 'issued_at', 'officer_name', 'signature', 'position', 'officer_address'
    ];
}
