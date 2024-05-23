<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'start_date',
        'payment_status',
        'pay_day',
        'customer_id',
        'name',
        'email',
        'phone',
        'address',
        'city',
        'state'
    ];

    public function classes()
    {
        return $this->hasMany(Classes::class);
    }
}
