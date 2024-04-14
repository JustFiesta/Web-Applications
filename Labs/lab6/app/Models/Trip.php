<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'continent', 'period', 'description', 'price', 'img', 'country_id'];

    public $timestamps = ['created_at', 'updated_at'];

    protected $attributes = [
        'period' => 7, // domyślna wartość dla 'period'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
