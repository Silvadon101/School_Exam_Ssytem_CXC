<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_id',
        'student_id',
        'amount_paid',
        'balance_amount',
        'date_paid'
    ];
}
