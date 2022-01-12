<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
//    protected $fillable = [
//        'name',
//        'email',
//        'password',
//        'rol_id',
//    ];
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    public function getKaf()
    {
        return $this->hasOne(Kafedra::class, 'id','kafedra_id');
    }
    public function getKur(){
        return $this->hasOne(Kur::class, 'id', 'kurs_id');
    }

    public function getGuruh()
    {
        return $this->hasOne(Guruh::class, 'id', 'guruh_id');
    }
    public function getDaraja()
    {
        return $this->hasOne(Daraja::class, 'id', 'daraja_id');
    }
    public function getUnvon()
    {
        return $this->hasOne(Unvon::class, 'id', 'unvon_id');
    }
    public function getDavomat()
    {
        return $this->hasMany(Davomat::class, 'id', 'kursant_id');
    }




    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
