<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    protected $table = 'berkas';

    public $fillable = [
    	'nama',
    	'deskripsi'
    ];


    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

}
