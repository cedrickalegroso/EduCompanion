@extends('layouts.user')

@section('content')



<div class="container-fluid bg-info">
    <div class="row">
        <div class="col-md-6 text-left ml-5"> 

              
                
            <img src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100&ssl=1"  class="rounded-circle mt-5" style="height:100px;width100px;"/>
                
        <h3 class="text-white ">  {{ Auth::user()->name }} </h3>
        <p class="text-white"> {{ Auth::user()->username }}, studies at  <br /> {{ Auth::user()->school }} </p>
        </div>

        <div class="col-md-3">
            
        </div>

        <div class="col-md-3">
            
        </div>
    </div>
</div>
@endsection

