@extends('layouts.user')

@section('content')



<div class="container-fluid bg-info">
    <div class="row">
        <div class="col-md-3 text-left ml-5"> 

    

        <div class="col-md-3">
            
        </div>

        <div class="col-md-6 text-right text-light ml-5 p-5">
             <h3> Welcome back, {{ Auth::user()->name}}! </h3>
        </div>
    </div>
</div>
@endsection

