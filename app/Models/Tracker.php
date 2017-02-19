<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    public $attributes = ['hits' => 0];

    protected $fillable = ['date'];

    protected $table = 'counters';

    public static function boot() {
        date_default_timezone_set('Asia/Jakarta');
        // When a new instance of this model is created...
        static::creating(function ($tracker) {
            $tracker->hits = 0;
        } );

        // Any time the instance is saved (create OR update)
        static::saving(function ($tracker) {
            $tracker->visit_date = date('Y-m-d');
            $tracker->visit_time = date('H:i:s');
            $tracker->hits++;
        } );
    }

    // Fill in the IP and today's date
    public function scopeCurrent($query) {
        date_default_timezone_set('Asia/Jakarta');
        return $query->where('date', date('Y-m-d'));
    }

    public static function hit() {
        date_default_timezone_set('Asia/Jakarta');
        static::firstOrCreate([
                  'date' => date('Y-m-d'),
              ])->save();
    }
}
