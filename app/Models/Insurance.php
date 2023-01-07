<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;
    protected $table = 'insurances';
    protected $fillable = [
        'product',
        'coverage',
        'percentage',
    ];

    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('product', 'like', '%' . $search . '%')
            ->orWhere('coverage', 'like', '%' . $search . '%')
            ->orWhere('percentage', 'like', '%' . $search . '%');
    }
}
