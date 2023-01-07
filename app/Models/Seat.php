<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    protected $table = 'seats';
    protected $fillable = [
        'type',
        'colour',
        'region',
        'state'
    ];
    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('type', 'like', '%' . $search . '%')
            ->orWhere('colour', 'like', '%' . $search . '%')
            ->orWhere('region', 'like', '%' . $search . '%')
            ->orWhere('state', 'like', '%' . $search . '%');
    }
}
