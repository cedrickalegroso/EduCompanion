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


<div class="container">
       
    <div class="row">

        <div class="col-md-6">
       

        <div class="card card-quiz  text-info mt-2">
                <br />
                <h3> Your Task </h3>
          
                <p> 3 tasks </p>

        </div>
        </div>

        <div class="col-md-6">

                <div class="card card-quiz  text-info mt-2">
                    <br />
                        <h3>  Quiz Points </h3>

                        <p> 50 Points </p>
        
                </div>
              
            </div>

           
    </div>
</div>
@endsection

