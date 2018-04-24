@extends('layouts.app')

@section('content')
    
        <div style="margin-bottom: 2%;" class="row justify-content-md-left">
        <h2>Add A User</h2>
        </div>
        
        {!! Form::open(['action' => 'UserController@store', 'method' => 'POST']) !!}      
            <div class="form-group row">                      
                {{Form::label('first_name', 'First Name',['class' => 'col-sm-2 col-form-label'])}}             
                <div class="col-auto"> 
                {{Form::text('first_name','', ['class' => 'form-control'])}}
                </div> 
            </div>
            <div class="form-group row">                      
                {{Form::label('last_name', 'Surname',['class' => 'col-sm-2 col-form-label'])}}             
                <div class="col-auto"> 
                {{Form::text('last_name','', ['class' => 'form-control'])}}
                </div> 
            </div>
            <div class="form-group row">                      
                {{Form::label('email', 'Email Address',['class' => 'col-sm-2 col-form-label'])}}             
                <div class="col-auto"> 
                {{Form::text('email','', ['class' => 'form-control'])}}
                </div> 
            </div>  
            <div class="form-group row">                                
                {{Form::label('home_store', 'Home Store', ['class' => 'col-sm-2 col-form-label'])}}                 
                <div class="col"> 
                {{Form::select('home_store',$stores, null , ['class' => 'col-sm-3 custom-select', 'placeholder' => 'Select A Store'])}}
                </div> 
            </div>
             <div class="form-group row">                                
            {{Form::label('role', 'Select Role', ['class' => 'col-sm-2 col-form-label'])}}                 
            <div class="col"> 
            {{Form::select('role',$roles, null , ['class' => 'col-sm-3 custom-select', 'placeholder' => 'Select A Role'])}}
                </div> 
             </div>
            <div class="form-group row">                      
            {{Form::label('contact_no', 'Contact Number',['class' => 'col-sm-2 col-form-label'])}}             
            <div class="col-auto"> 
            {{Form::text('contact_no','', ['class' => 'form-control'])}}
                </div> 
            </div>
            <div class="form-group row">                      
            {{Form::label('password', 'Enter Password',['class' => 'col-sm-2 col-form-label'])}}             
            <div class="col-auto"> 
            {{Form::text('password','', ['class' => 'form-control'])}}
                </div> 
            </div>
            <div class="form-group row">                      
            {{Form::label('password_confirmation', 'Confirm Password',['class' => 'col-sm-2 col-form-label'])}}             
            <div class="col-auto"> 
            {{Form::text('password_confirmation','', ['class' => 'form-control'])}}
                </div> 
            </div>                                                                                                                                                  
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}  
        {!! Form::close() !!}
   
              
@endsection