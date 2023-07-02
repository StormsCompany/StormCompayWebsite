<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function landlord()
    {

        return $this->belongsTo(Landlord::class, 'landlord_id');
    }
}
