<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    // Autorise l'insertion de données (important pour create())
    protected $fillable = [
        'theme',
        'lang',
        'user_id'
    ];

    // Relation avec User (One-to-One inverse)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}