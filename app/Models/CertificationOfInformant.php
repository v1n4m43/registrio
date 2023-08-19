<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificationOfInformant extends Model
{
    use HasFactory;
    
    protected $table = 'certification_of_informants';
    protected $fillable = [
        'deceased_person_id', 'informant_name', 'relationship', 'address', 'date'
    ];

    public function deceasedPerson()
    {
        return $this->belongsTo(DeceasedPerson::class);
    }
    
}
