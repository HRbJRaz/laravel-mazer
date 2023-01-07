<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceRules extends Model
{
    use HasFactory;
    protected $table = 'insurance_rules';
    protected $fillable = [
        'product',
        'region',
    ];
}
