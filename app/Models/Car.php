<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $fillable = [
        'regNo',
        'engineNo',
        'chassisNo',
        'cartype_id',
        'location_id',
        'owner_id'
    ];

    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('regNo', 'like', '%' . $search . '%')
            ->orWhere('cartype_id', 'like', '%' . $search . '%')
            ->orWhere('location_id', 'like', '%' . $search . '%')
            ->orWhere('owner_id', 'like', '%' . $search . '%')
            ->orWhere('state', 'like', '%' . $search . '%');
    }
}
