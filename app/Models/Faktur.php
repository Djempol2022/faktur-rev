<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faktur extends Model
{
    use HasFactory;

    protected $table = "faktur";
    protected $guarded = [];

    public function provinsiRelasi(){
        return $this->belongsTo(Provinsi::class, 'kabupaten_id', 'id');
    }

    public function statusRelasi(){
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function kabupatenRelasi(){
        return $this->belongsTo(Kabupaten::class, 'kabupaten_id', 'id');
    }

    public function userRelasi(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
