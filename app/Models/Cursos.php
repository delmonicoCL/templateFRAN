<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;


    protected $table = 'cursos';
    // protected $primaryKey = 'id';
    // public $incrementing = false; // Nuestro campo no es autoincrement.
    public $timestamps = false;

  
    public function cicle()
    {
        return $this->belongsTo(cicle::class, 'cicles_id');
    }
    
  
    public function moduls()
     {
         return $this->belongsToMany(Modul::class, 'moduls_has_cursos', 'cursos_id', 'moduls_id')->withPivot('curs_academic_id');
     }
}
