<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Periode extends Model
{
    use HasFactory;
    protected $table='periodes';
    protected $guarded =['id'];



    public function siswaBaru()
    {
        return $this->hasMany(siswaBaru::class);
    }
}
