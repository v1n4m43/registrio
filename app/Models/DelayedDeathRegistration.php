<?php

namespace App\Models;

use App\Models\DeceasedPerson;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DelayedDeathRegistration extends Model
{
    use HasFactory;

    protected $table = 'delayed_death_registrations';
    protected $fillable = [
        'deceased_person_id', 'affiant_name', 'postal_address', 'date_of_death', 'address_of_death', 'cemetery_address',
        'date_buried', 'attended', 'attendant_name', 'cause_of_death', 'reason_for_delayed_registration',
        'affidavit_date', 'affiant_address', 'affiant_signature'
    ];

    public function deceasedPerson()
    {
        return $this->belongsTo(DeceasedPerson::class);
    }
}
