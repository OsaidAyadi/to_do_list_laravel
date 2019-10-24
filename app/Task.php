<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{

    protected $fillable = [
        'task', 'user_id'
    ];


    public function user () {
        return $this->hasOne('App\User');
    }
}
