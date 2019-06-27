<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function foto(){
        return $this->belongsTo('\App\Foto', 'id_foto');
    }
}
