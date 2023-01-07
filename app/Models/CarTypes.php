<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarTypes extends Model
{
    use HasFactory;
    protected $table = 'car_types';
    protected $fillable = [
        'name',
        'description',
    ];

    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('make', 'like', '%' . $search . '%')
            ->orWhere('model', 'like', '%' . $search . '%')
            ->orWhere('transmission', 'like', '%' . $search . '%')
            ->orWhere('cc', 'like', '%' . $search . '%');
    }
}
