<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarriageLicense extends Model
{
    use HasFactory;
    protected $table = 'marriage_licenses';
    protected $guarded = array();

    public function storeData($input)
    {
        return static::create($input);
    }
}

