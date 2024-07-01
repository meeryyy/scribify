<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model
{
    use HasFactory;

    protected $fillable = [
        "histoires_id",
        
    ];
    public function histoire()
    {
        return $this->belongsTo(Histoire::class, 'histoires_id');
    }
}
