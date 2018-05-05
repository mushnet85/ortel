<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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


    public function roles()
    {
    return $this->belongsToMany(Role::class);
    }

    public function stores()
    {      
    return $this->belongsToMany(Store::class);
    }

    public function timecards()
    {
      return $this->hasMany(Timecard::class);   
    }

    
    public function CheckRoles($roles, $id)
    {
     
        $user = User::find($id);
       
        foreach ($user->roles as $role)
        {   
            if ($role->name == $roles)
            {
                return true;
            }
        }

        return false;
}

}