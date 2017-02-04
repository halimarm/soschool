<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Status extends Model
{
    
	protected $table = 'status';

	protected $fillable = [
		'body'
	];

	public function user()
	{
		return $this->belongsTo('App\Models\User', 'user_id');
	}

	public function scopeNotBalas($query)
	{
		return $query->whereNull('parent_id');
	}

	public function scopeBalas($query)
	{
		return $query->whereNotNull('parent_id');
	}

	public function replies()
	{
		return $this->hasMany('App\Models\Status', 'parent_id');
	}

	public function likes()
	{
		return $this->morphMany('App\Models\Like', 'likeable');
	}

	public function waktu()
	{
		// waktu
        // date_default_timezone_set('Asia/Jakarta');
        Carbon::setLocale('id');
        return Carbon::parse($this->created_at);
	}

}
