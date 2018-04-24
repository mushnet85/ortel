<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\RoleRepo;
use App\Repositories\UserRepo;
use App\Repositories\StoreRepo;

class UserController extends Controller
{

    protected $roleModel;
    protected $userModel;
    protected $storeModel;

    public function __construct(RoleRepo $roles, UserRepo $users, StoreRepo $stores)
    {
        $this->middleware('auth');

        $this->roleModel = $roles;
        $this->userModel = $users;
        $this->storeModel = $stores;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->roleModel->RolesSelectData();

        $stores = $this->storeModel->StoreSelectData();

        return view('users.create', compact('roles', 'stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:50|unique:users',
            'last_name' => 'required|max:50|unique:users',
            'email' => 'required|email|unique:users',
            'home_store' => 'required',
            'role' => 'required',
            'contact_no' => 'required|numeric',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ]);

        $users = $this->userModel;
       
        $users->SaveUser($request);

        return redirect('/user')->with('success', 'Employee Added') ;

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
