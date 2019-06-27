<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    public function category(){
        return $this->belongsTo('\App\Category', 'id_category');
    }
    public function fotografer(){
        return $this->belongsTo('\App\Fotografer', 'id_fotografer');
    }
}
