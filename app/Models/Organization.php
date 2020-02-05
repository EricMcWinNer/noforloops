<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

    public function wallets()
    {
        return $this->hasManyThrough('App\Models\Wallet', 'App\Models\User');
    }
}
