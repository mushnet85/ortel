@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-md-center">
        <h2>Dashboard</h2>
        </div>    
        <div class="row">
                <div class="col-md-auto">
                    <i class="fa fa-address-book fa-4x" name="user" aria-hidden="true"></i>
                </div>
                <div class="col-md-auto">
                        <a href="/transaction"><i class="fa fa-arrows-h fa-4x" name="transactions" aria-hidden="true"></i></a>
                </div>            
              </div>
            </div>
@endsection
