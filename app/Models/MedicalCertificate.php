<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalCertificate extends Model
{
    use HasFactory;

    protected $table = 'medical_certificates';
    protected $fillable = [
        'deceased_person_id', 'intermediate_cause', 'antecedence_cause', 'underlying_cause', 'maternal_condition',
        'death_by_external_causes', 'manner_of_death', 'place_of_occurrence', 'autopsy', 'attendant', 'attended_date',
        'corpse_disposal', 'burial_permit', 'burial_date_issued', 'transfer_permit_number', 'transfer_date_issued', 'cemetery_address'
    ];

    public function deceasedPerson()
    {
        return $this->belongsTo(DeceasedPerson::class);
    }
}
