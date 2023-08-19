<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficeOfCivilRegistrar extends Model
{
    use HasFactory;

    protected $table = 'office_of_civil_registrars';
    protected $fillable = [
        'deceased_person_id', 'health_officer_name', 'position', 'date'
    ];

    public function deceasedPerson()
    {
        return $this->belongsTo(DeceasedPerson::class);
    }
}
