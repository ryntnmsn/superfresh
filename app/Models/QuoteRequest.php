<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'business_name',
    'email',
    'phone',
    'service_type',
    'postal_code',
    'cleaning_description',
    'start_date',
    'frequency',
    'photos',
])]
class QuoteRequest extends Model
{
    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'start_date' => 'date',
            'photos' => 'array',
        ];
    }
}
