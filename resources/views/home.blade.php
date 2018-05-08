@extends('layouts.app')

@section('content')
<div class="container">
    
        <div class="row justify-content-md-center">
        <h2>Dashboard</h2>
        </div>    
        <div class="row">
            @can('create', App\Models\User::class)
                <div class="col-md-auto" align="center">
                  <a href="/user/create"><i class="fa fa-user-plus fa-5x" name="create_user" aria-hidden="true"></i></a>
                  <h4>Create User</h4>         
                </div>
                @endcan
                <div class="col-md-auto" align="center">
                  <a href="/user"><i class="fa fa-users fa-5x" name="view_user" aria-hidden="true"></i></a>
                  <h4>View Users</h4>         
                </div>             
                <div class="col-md-auto" align="center">
                  <a href="/transaction"><i class="fa fa-arrows-h fa-5x" name="transactions" aria-hidden="true"></i></a>
                  <h4>Transactions</h4> 
                </div>
                <div class="col-md-auto" align="center">
                  <i class="fa fa-mobile fa-5x" name="handset" aria-hidden="true"></i>
                  <h4>Handsets</h4> 
                </div>
                <div class="col-md-auto" align="center">
                  <i class="fa fa-book fa-5x" name="tariffs" aria-hidden="true"></i>
                  <h4>Tariffs</h4> 
                </div>                                        
              <div class="col-md-auto" id="clockin" align="center">
                  <i data-toggle="modal" data-target="#confirmClockInModal"  class="fa fa-sign-in fa-5x" name="clock_in" aria-hidden="true"></i>
                  <h4>Clock In</h4> 
                </div>                                       
              <div class="col-md-auto" align="center">
                  <i class="fa fa-sign-out fa-5x" aria-hidden="true"></i>
                  <h4>Clock Out</h4> 
                </div>                          
              </div>
            </div>
            
            <dialog-box></dialog-box>
              
@endsection
