<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id', 'avatar'];

    public function user() {

        return $this->hasOne('App\User');
    }
}