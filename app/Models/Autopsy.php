<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autopsy extends Model
{
    use HasFactory;
    protected $table = 'autopsies';
    protected $fillable = [
        'deceased_person_id', 'cause_of_death', 'signature', 'name', 'date', 'title_designation', 'address'
    ];

    public function deceasedPerson()
    {
        return $this->belongsTo(DeceasedPerson::class);
    }
    
}
