@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-md-center">
        <h2>Transactions</h2>
        </div>    
        <div class="row">
                <div class="col-md-auto">
                        <a href="/transaction/create"><i class="fa fa-plus-square  fa-4x" aria-hidden="true"></i></a>                         
                </div>
                <div class="col-md-auto">
                        <i class="fa fa-eye fa-4x" aria-hidden="true"></i>
                </div>            
              </div>
                    
@endsection