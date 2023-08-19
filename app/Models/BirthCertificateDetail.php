<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BirthCertificateDetail extends Model
{
    use HasFactory;
    protected $table = 'birth_certificate_details';

    public function storeData($input)
    {
        return static::create($input);
    }
}
