<?php

namespace App\Models;

use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    // use Authenticatable;

    protected $fillable = [
        'username', 
        'email', 
        'password',
        'nama_depan',
        'nama_belakang',
        'jenis_kelamin',
        'kelas_jurusan',
        'alamat',
        'no_hp',
        'jabatan',
        'tanggal_lahir',
        'avatar',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    public function getNama()
    {
        if ($this->nama_depan && $this->nama_belakang) {
            return "{$this->nama_depan} {$this->nama_belakang}";
        }
        if ($this->nama_depan) {
            return $this->nama_depan;
        }

        return null;

    }

    public function getNamaOrUsername()
    {
        return $this->getNama() ?: $this->username;
    }

    public function getNamaDepanOrUsername()
    {
        return $this->nama_depan ?: $this->username;
    }

    /**
     * Profil Detail
     */

    public function getUsername()
    {
        return $this->username;
    }

    public function getNamaLengkap()
    {
        if ($this->nama_depan && $this->nama_belakang) {
            return "{$this->nama_depan} {$this->nama_belakang}";
        }
    }

    /**
     * Status
     */

    public function statuses()
    {
        return $this->hasMany('App\Models\Status', 'user_id');
    }

    // coba
    public function replies()
    {
        return $this->hasMany('App\Models\Status', 'parent_id');
    }

    public function likes()
    {
        return $this->hasMany('App\Models\Like', 'user_id');
    }

    public function hasLikedStatus(Status $status)
    {
        // return (bool) $status->likes->where('likeable_id', $status->id)->where('likeable_type', get_class($status))->where('user_id', $this->id)->count();
        return (bool) $status->likes->where('user_id', $this->id)->count();
    }

    

}
