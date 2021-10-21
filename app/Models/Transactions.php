<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_id',
        'student_id',
        'amount_due',
        'amount_paid',
        'balance_amount'
    ];
}
