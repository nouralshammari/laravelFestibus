<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Festival extends Model {
    use HasFactory;
    protected $fillable = ['name', 'location', 'date', 'price'];

    protected $casts = [
        'date' => 'date',
    ];

}
