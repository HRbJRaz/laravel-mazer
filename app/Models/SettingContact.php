<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingContact extends Model
{
    use HasFactory;
    public $media;
    public $detail;
    public $display = 1;
    protected $table = 'setting_contacts';
    protected $fillable = [
        'media',
        'detail',
        'display',
    ];
    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('media', 'like', '%' . $search . '%')
            ->orWhere('display', 'like', '%' . $search . '%');
    }
}
