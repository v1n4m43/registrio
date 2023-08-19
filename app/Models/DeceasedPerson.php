<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeceasedPersonTable extends Model
{
    use HasFactory;

        protected $table = 'deceased_person';
        protected $fillable = [
            'first_name', 'middle_name', 'last_name', 'date_of_death', 'date_of_birth',
            'age_at_death', 'place_of_death', 'civil_status', 'religion', 'citizenship',
            'residence', 'occupation', 'father_name', 'mother_name'
        ];
}
