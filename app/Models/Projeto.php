<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User', 'users_id');
    }
}
