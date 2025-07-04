<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'contact_number',
        'contact_number_2',
        'gender',
        'dob',
        'nic',
        'cities_id',
        'status_id',
        'email',
        'password',
        'address_line_1',
        'address_line_2',
        'due_amount',
        'user_id',
        'city_name',
        'customer_id',
        'branch_id',
        'reason',
        'latitude',
        'longitude',
    ];
}
