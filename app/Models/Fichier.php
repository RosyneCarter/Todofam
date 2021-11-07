<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fichier extends Model
{
    use HasFactory;


    protected $fillable =['nom','taches_id'];


    public function tache(){
        return $this->belongsTo(Tache::class);
    }
}
