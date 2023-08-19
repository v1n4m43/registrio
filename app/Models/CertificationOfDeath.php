<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificationOfDeath extends Model
{
    use HasFactory;

    protected $table = 'certification_of_deaths';
    protected $fillable = [
        'deceased_person_id', 'attendant_name', 'position', 'address', 'date'
    ];

    public function deceasedPerson()
    {
        return $this->belongsTo(DeceasedPerson::class);
    }
}
