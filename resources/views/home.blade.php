@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-md-center">
        <h2>Dashboard</h2>
        </div>    
        <div class="row">
                <div class="col-md-auto" align="center">
                <a href="/user"><i class="fa fa-address-book fa-5x" name="user" aria-hidden="true"></i></a>
                <h4>Users</h4>         
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
                <i class="fa fa-book fa-5x" aria-hidden="true"></i>
                <h4>Tariffs</h4> 
                </div>                          
              </div>
            </div>
@endsection
