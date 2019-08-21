@extends('layouts.user')

@section('content')

<br />

<h3 class="text-info"> Classroom </h3>

<hr>
<div class="col-md-4">
            <div class="card card-quiz p-3">
               <h3> Add Class </h3>

               <a data-toggle="modal" href="#exampleModalLong" class="btn btn-md btn-info">Add</a>
            </div>


<br />
</div>
@endsection




      
      <!-- Modal -->
      <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Enroll a class</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p class="text-center"> Please enter a code given to you by your teacher </p>

            <form action="{{ route('userenrollclass') }}">

                <input type="text" class="form-control" name="class-code" placeholder="Class code">
                <br />
                <button class="btn btn-md btn-success form-control">Enroll Class</button>
              </form>
            </div>
          </div>
        </div>
      </div>