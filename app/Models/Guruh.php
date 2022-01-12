<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guruh extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getKur()
    {
        return $this->hasOne(Kur::class, 'id', 'kurs_id');
    }
}
