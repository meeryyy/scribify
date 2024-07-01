<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Histoire extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categories_id');
    }

    public function langue()
    {
        return $this->belongsTo(Langue::class, 'langues_id');
    }
    public function chapitres()
    {
        return $this->hasMany(Chapitre::class, 'histoires_id');
    }


    public function histoires()
    {
        return $this->hasMany(Histoire::class,'histoire_id');
    }

    public function commentaires() {
        return $this->hasMany(Comment::class);
    }



}
