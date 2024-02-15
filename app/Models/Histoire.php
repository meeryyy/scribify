<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Histoire extends Model
{
    use HasFactory;

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categories_id');
    }

    public function langue()
    {
        return $this->hasMany(Langue::class, 'langues_id');
    }





}
