<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Embalmer extends Model
{
    use HasFactory;

    protected $table = 'embalmers';
    protected $fillable = [
        'deceased_person_id', 'signature', 'name', 'address', 'designation', 'license_number', 'issued_on', 'expiry_date'
    ];

    public function deceasedPerson()
    {
        return $this->belongsTo(DeceasedPerson::class);
    }
}
