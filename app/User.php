<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User;
use App\Ability;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Role')->withTimestamps();
    }

    public function authorizeRoles($roles)
    {
        if ($this->hasAnyRole($roles)) {
            return true;
        }
        abort(401, 'Esta acción no está autorizada.');
    }

    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }

    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }

    public function phone()
    {
        return $this->hasOne('App\Phone');
    }

    public function address()
    {
        return $this->hasOne('App\Address');
    }

    public function isNewUser()
    {
        if ($this->created_at == now()) {
            return true;
        }
        return false;
    }

    public function hasFulfilledData()
    {
        if ($this->name && $this->lastname && $this->motherLastname && $this->empresa && $this->email && $this->foto != 'default.jpg' && !empty($this->phone->phone) && $this->address->estado && $this->address->ciudad && $this->address->calle && $this->address->extNumber) {
            return true;
        }
        return false;
    }
    public function abilities()
    {
        return $this->belongsToMany('App\Ability')->withTimestamps();
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function personals()
    {
        return $this->hasMany('App\Personal');
    }

    public function curriculum()
    {
        return $this->hasOne('App\Curriculum');
    }
}
