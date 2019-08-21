@extends('layouts.user')

@section('content')

<br />

<h3 class="text-info"> Quiz Games </h3>
<hr>

<br />


<div class="container text-info">

    <div class="row">

        <div class="col-md-4">

           <div class="card card-quiz p-3">
               <h3> Math Quizzes </h3>

            

           <a class="btn btn-md btn-info text-light" href="{{ route('mathquizgame') }} ">Play!</a>
           </div>

        </div>

        <div class="col-md-4">
            <div class="card card-quiz p-3">
               <h3> Coding Quiz </h3>

             

               <a class="btn btn-md btn-info text-light">Play!</a>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card card-quiz p-3">
               <h3> Science Quiz </h3>

              

               <a class="btn btn-md btn-info text-light">Play!</a>
            </div>
                </div>
    </div>
</div>
</div>
@endsection
