<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'address2',
        'city',
        'state',
        'zip',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function setPasswordAttribute($password){
        $this->attributes['password'] = Hash::make($password);
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    /**
     * check if the user has a role
     * param string $role 
     * return boolean
     */
    public function hasAnyRole($role){
        return null !== $this->roles()->where('title', $role)->first();
    }
    /**
     * check the user has any roles
     * param array $role 
     * return boolean
     */
    // Hier ist role ein array und kein string wie in der vorherigen Funktion
    public function hasAnyRoles(array $role){
        return null !== $this->roles()->whereIn('title', $role)->first();
    }
}
