<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;
    protected $table = 'actividades';
    protected $primaryKey = 'id_actividad';


    public function images(){
        return $this->morphMany('App\Models\Image','imageable');
        //return $this->morphMany(Image::class, 'imageable');
    }
}
