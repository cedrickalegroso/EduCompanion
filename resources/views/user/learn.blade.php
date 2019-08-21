@extends('layouts.user')

@section('content')

<br />

<h3 class="text-info"> Free Courses  </h3>

<hr>

<div class="container ">
     <div class="row">
         <div class="col-md-4">

                <div class="card" style="width: 12rem;">
                    <br />
                    <i class="learnlogo fab fa-html5"></i>
                        <div class="card-body">
                          <h5 class="card-title">Learn HTML5 </h5>
                         
                          <a href="#" class="btn btn-primary">Visit Course.</a>
                        </div>
                      </div>

         </div>

         <div class="col-md-4">

                <div class="card" style="width: 12rem;">
                    <br />
                    <i class="learnlogo fab fa-css3"></i>
                        <div class="card-body">
                          <h5 class="card-title">learn CSS</h5>
                          
                          <a href="#" class="btn btn-primary">Visit Course.</a>
                        </div>
                      </div>

         </div>

         <div class="col-md-4">

                <div class="card" style="width: 12rem;">
                        <br />
                        <i class="learnlogo fab fa-php"></i>
                        <div class="card-body">
                          <h5 class="card-title">Learn PHP</h5>
                        
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>

         </div>
     </div>

</div>

@endsection




   