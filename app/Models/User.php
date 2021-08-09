<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Rol;
use Illuminate\Support\Carbon;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'apellido_pat',
        'apellido_mat',
        'fecha_nac',
        'email',
        'password',
        'id_genero',
        'id_rol',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        //  'fecha_nac' => '%y years, %m months and %d days',

    ];

    public function rol(){
    	//return $this->belongsTo('App\Models\Rol');
        return $this->belongsTo(Rol::class, 'id_rol');

    }
    public function genero(){
    	//return $this->belongsTo('App\Models\Rol');
        return $this->belongsTo(Genero::class, 'id_genero');

    }

    public function age()
    {
        return Carbon::parse($this->attributes['fecha_nac'])->age;
    }

    public function image(){
        return $this->morphOne('App\Models\Image','imageable');
    }

    // public function edag(Date $edad){
    //     $edad::parse(User)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days');

    // }
}
