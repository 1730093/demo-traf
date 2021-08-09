<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


class Situacion extends Model
{
    use HasFactory;
    protected $table = 'situaciones';
    protected $primaryKey = 'id_situaciones';

    public function fecha_in()
    {
        return Carbon::parse($this->attributes['fecha_peticion'])->format('l jS \\of F Y');
    }
    // public function usuario(){
    //     return $this->belongsTo(User::class, 'id');
    // 	//return $this->belongsTo('App\Models\Rol');
    // }
}
