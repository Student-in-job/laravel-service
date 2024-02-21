<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailablePeriods extends Model
{
    use HasFactory;

    protected $fillable = [
        'period_months',
        'title_ru',
        'title_uz',
        'status',
        'markup',
        'is_mini_loan',
        'reverse_calc',
        'reverse_markup',
        'reverse_type'
    ];

    protected $attributes =  [
        'status' => 1
    ];
}
