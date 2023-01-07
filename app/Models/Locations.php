<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    use HasFactory;
    protected $table = 'locations';
    protected $fillable = [
        'region',
        'name',
        'status',
    ];
    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('region', 'like', '%' . $search . '%')
            ->orWhere('name', 'like', '%' . $search . '%')
            ->orWhere('status', 'like', '%' . $search . '%');
    }
}
