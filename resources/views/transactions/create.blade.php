@extends('layouts.app')

@section('content')

        <div style="margin-bottom: 2%;" class="row justify-content-md-left">
        <h2>Add Transaction</h2>
        </div>
        
        {!! Form::open(['class' => 'form-horizontal']) !!}      
        <div class="form-group row">                      
                {{Form::label('transaction_date', 'Date of Transaction',['class' => 'col-sm-2 col-form-label'])}}             
                <div class="col-auto"> 
                {{Form::date('transaction_date','', ['class' => 'form-control'])}}
                </div> 
            </div>
            <div class="form-group row">                                
                    {{Form::label('imei', 'IMEI', ['class' => 'col-sm-2 col-form-label'])}}                 
                    <div class="col-auto"> 
                    {{Form::text('imei','', ['class' => 'form-control'])}}
                </div> 
            </div>
            <div class="form-group row">                                
                    {{Form::label('sim_no', 'Sim Number', ['class' => 'col-sm-2 col-form-label'])}}                 
                    <div class="col-auto"> 
                    {{Form::text('sim_no','', ['class' => 'form-control'])}}
                </div> 
            </div>
            <div class="form-group row">                                
                    {{Form::label('cus_tel_no', 'Customer Number', ['class' => 'col-sm-2 col-form-label'])}}                 
                    <div class="col-auto"> 
                    {{Form::text('cus_tel_no','', ['class' => 'form-control'])}}
                </div> 
            </div>                                         
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}  
        {!! Form::close() !!}
   
              
@endsection