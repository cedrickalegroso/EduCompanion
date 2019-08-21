@extends('layouts.teacher')

@section('content')

<br />

<h3 class="text-info">Manage your Classes </h3>

<hr>

<div class="container">
 
    <div class="row">

            <div class="col-md-4">
                    <div class="card card-quiz p-3">
                       <h3> Create Class </h3>
        
                       <a data-toggle="modal" href="#exampleModalLong" class="btn btn-md btn-info">Create a class</a>
                    </div>
    </div>


    @foreach ($classes as $class)

    <div class="col-md-4">
            <div class="card card-quiz p-3">
      <h4 class="text-info">  {{ $class->class_name }} </h4> 
      <p class="text-info"> classcode: {{ $class->class_code }} </p>
    </div>
    </div>
        
    @endforeach

    

</div>
</div>
@endsection




      
      <!-- Modal -->
      <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Create a class</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p class="text-center"> Create a class </p>

               <form action="{{ route('teachercreateclass') }}">

                <input type="text" class="form-control" name="class-name" placeholder="Class name">
                <br />
                <button class="btn btn-md btn-success form-control">Create class</button>
              </form>
            </div>
          </div>
        </div>
      </div>