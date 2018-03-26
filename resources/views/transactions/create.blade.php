@extends('layouts.app')

@section('content')

        {{dd($handsets)}}
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
                    {{Form::label('device', 'Device', ['class' => 'col-sm-2 col-form-label'])}}                 
                    <div class="col"> 
                    {{Form::select('device',['M' => 'Mobile', 'T' => 'Tablet'], null , ['class' => 'col-sm-3 custom-select', 'placeholder' => 'Select Device'])}}
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
            <div class="form-group row">                                
                    {{Form::label('user_id', 'Employee Name', ['class' => 'col-sm-2 col-form-label'])}}                 
                    <div class="col"> 
                    {{Form::select('user_id',['1' => 'John Smith', '2' => 'Katy Hopkins'], null , ['class' => 'col-sm-3 custom-select', 'placeholder' => 'Select An Employee'])}}
                </div> 
            </div>
            <div class="form-group row">                                
                    {{Form::label('sale_type', 'New/Upgrade', ['class' => 'col-sm-2 col-form-label'])}}                 
                    <div class="col"> 
                    {{Form::select('sale_type',['new' => 'New', 'upgrade' => 'Upgrade'], null , ['class' => 'col-sm-3 custom-select', 'placeholder' => 'New or Upgrade'])}}
                </div> 
            </div>
            <div class="form-group row">                                
                    {{Form::label('return_type', 'Return/Exchange', ['class' => 'col-sm-2 col-form-label'])}}                 
                    <div class="col"> 
                    {{Form::select('return_type',['return' => 'Return', 'exchange' => 'Exchange'], null , ['class' => 'col-sm-3 custom-select', 'placeholder' => 'Return or Exchange'])}}
                </div> 
            </div>
                                                                                                        
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}  
        {!! Form::close() !!}
   
              
@endsection