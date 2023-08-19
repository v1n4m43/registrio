<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildrenDeathDetail extends Model
{
    use HasFactory;

    protected $table = 'children_death_details';
    protected $fillable = [
        'deceased_person_id', 'age_of_mother', 'method_of_delivery', 'length_of_pregnancy', 'type_of_birth', 
        'multiple_birth_child_order', 'cause_of_death_main_disease', 'cause_of_death_other_disease', 
        'maternal_disease_main', 'maternal_disease_other', 'other_relevant_circumstance'
    ];

    public function deceasedPerson()
    {
        return $this->belongsTo(DeceasedPerson::class);
    }
}
