<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Konseling extends Model
{ 
    protected $table = "konseling"; 
    protected $primaryKey = "id";

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
