<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;

    protected $fillable =['nom','ended_at','description'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function etapes(){
        return $this->hasMany(Etape::class);
    }

    public function fichiers(){
        return $this->hasMany(Fichier::class);
    }
}
