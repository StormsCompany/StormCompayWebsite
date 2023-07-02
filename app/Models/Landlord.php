<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tenants()
    {
        return $this->hasMany(Tenant::class, 'landlord_id');
    }
}
