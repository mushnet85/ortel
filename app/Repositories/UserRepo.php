<?php

namespace App\Repositories;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserRepo
{

    protected $userModel;

    public function __construct(User $user)
    {

        $this->userModel = $user;

    }

    public function GetAllUsers()
    {

        $users = User::with(['roles:id,name','stores:id,store'],['stores' => function($query)
        {
         $query->where('home_store','=',1);   
        }
        ])->where('sys_deleted','=',0)->get();

        return $users;
    }

    public function SaveUser($data)
    {
        //dump($data);
        $user = $this->userModel;

        $user->first_name = $data->first_name;
        $user->last_name = $data->last_name;
        $user->contact_no = $data->contact_no;
        $user->email = $data->email;
        $user->password = Hash::make($data->password);
        $user->save();
        $user->roles()->attach($data->role);
        $user->stores()->attach($data->home_store, ['home_store' => 1]);
        
       
    }

}