<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'email', 'password', 'position', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    public function role() {
        return $this->belongsTo(Role::class);
    }

    public function isAdmin() {
        return $this->role->name == "admin";
    }

    public function vehicle() {
        return $this->hasOne(Vehicle::class)->withTrashed();
    }

    public function hcrDocuments() {
        return $this->hasMany(HcrDocument::class);
    }

    public function ongoingCall() {
        return $this->hasOne(OngoingCall::class);
    }

}
