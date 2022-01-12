<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FanBiriktirish extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getFan()
    {
        return $this->hasOne(Fan::class, 'id', 'fan_id');
    }
    public function getTeacher()
    {
        return $this->hasOne(User::class, 'id', 'teacher_id');
    }
    public function getSemestr()
    {
        return $this->hasOne(Semestr::class, 'id', 'semestr');
    }
    public function getGuruh()
    {
        return $this->hasOne(Guruh::class, 'id', 'guruh_id');
    }
    public function getKaf()
    {
        return $this->hasOne(Kafedra::class, 'id', 'kafedra_id');
    }




}
