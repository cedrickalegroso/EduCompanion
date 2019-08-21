@extends('layouts.user')

@section('content')



<div class="container-fluid bg-info">
    <div class="row">

        <div class="col-md-6 text-left ml-5 p-5 text-light"> 

                @php
                $date = date('d-m-y'); 
             @endphp



                <h3> Welcome back, {{ Auth::user()->name}}! </h3>
                <h3> 21 August, 2019 <h3>
            </div>
        <div class="col-md-3">
            
        </div>

        <div class="col-md-3  ">
             
            
        </div>

        
    </div>
</div>
@endsection

