<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Davomat extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getKursant()
    {
        return $this->hasOne(User::class, 'id', 'kursant_id');
    }
    public function getGuruh()
    {
        return $this->hasOne(Guruh::class, 'id', 'guruh_id');
    }
    public function getTeach()
    {
        return $this->hasOne(User::class, 'id', 'teach_id');
    }
    public function getKaf()
    {
        return $this->hasOne(Kafedra::class, 'id', 'kaf_id');
    }
    public function getFan()
    {
        return $this->hasOne(Fan::class, 'id', 'fan_id');
    }
}
