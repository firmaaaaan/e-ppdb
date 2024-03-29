<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswaBaru extends Model
{
    use HasFactory;
    protected $table ='siswa_barus';
    protected $guarded =['id'];
}
