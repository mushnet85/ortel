@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-md-center">
        <h2>Users</h2>
        </div>
        <table class="table">
        <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Contact Number</th>
          <th scope="col">Email</th>
          <th scope="col">Role</th>
          <th scope="col">Home Store</th>
        </tr>
        </thead>
        <tbody>
         @foreach($users as $user)       
        <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->first_name}}</td>
        <td>{{$user->last_name}}</td>
        <td>{{$user->contact_no}}</td>
        <td>{{$user->email}}</td>    
        @foreach($user->roles as $role)
        <td>{{$role->name}}</td>    
        @endforeach
        @foreach($user->stores as $home_store)
        <td>{{$home_store->store}}</td> 
        @endforeach
        </tr>
        </tbody>
        
        @endforeach 
</div>       
@endsection