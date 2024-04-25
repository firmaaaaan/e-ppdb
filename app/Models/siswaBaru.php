<?php

namespace App\Models;

use App\Models\User;
use App\Models\Periode;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class siswaBaru extends Model
{
    use HasFactory;
    protected $table ='siswa_barus';
    protected $guarded =['id'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }

}
