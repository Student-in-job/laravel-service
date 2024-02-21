<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_id',
        'company_id',
        'total',
        'balance',
        'period',
        'status',
        'cancel_reason',
        'canceled_at',
        'original_created_at'
    ];

    protected $attributes = [
        'status' => 0
    ];
}
