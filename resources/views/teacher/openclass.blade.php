@extends('layouts.teacher')

@section('content')

<div class="container-fluid bg-info">
        <div class="row">
            <div class="col-md-6 text-left ml-5 p-5"> 
    
                  
                    
              @foreach ($class as $thisclass)
                  
            
                  <h1 class="text-center text-white"> {{ $thisclass->class_name }}  </h1> 
                  @endforeach

          
            </div>
    
            <div class="col-md-3">
              
                <a  data-toggle="modal" href="#exampleModal" class="btn btn-md btn-success mt-5">Add Activity</a>
                
            </div>
    
            <div class="col-md-3">
                
            </div>
        </div>
    </div>
@endsection




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Create Activity</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <form action="">

                     <input type="text" class="form-control" placeholder="title" />
                     <br />
                     <textarea type="text" class="form-control"></textarea>
                </form>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

