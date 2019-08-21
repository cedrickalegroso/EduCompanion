@extends('layouts.user')

@section('content')

<div class="container-fluid bg-info">
        <div class="row">
            <div class="col-md-6 text-left ml-5 p-5"> 
    
                  
                    
              @foreach ($class as $thisclass)
                  
            
                  <h1 class="text-center text-white"> {{ $thisclass->class_name }}  </h1> 
                  @endforeach

          
            </div>
    
            <div class="col-md-3">
                
            </div>
    
            <div class="col-md-3">
                
            </div>
        </div>
    </div>
@endsection

