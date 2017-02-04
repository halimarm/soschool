<?php

namespace App\Models;

// use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;
    // use Authenticatable;

    protected $fillable = [
        'nama', 
        'email', 
        'username', 
        'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    

}
