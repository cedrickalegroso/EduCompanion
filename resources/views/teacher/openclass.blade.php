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
              
                <a  data-toggle="modal" href="#exampleModal1" class="btn btn-md btn-success mt-5">Add School Work</a>
                
            </div>
    
            <div class="col-md-3">
                
            </div>
        </div>
    </div>

    <br />

    @foreach ($task as $thistask)

   
    <div class="card p-3 mt-2">
          
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                    <p>  {{ $thistask->task_title }} </p>
                            </div>
                            <div class="col-md-4">
                                    <p>  {{ $thistask->task_body }} </p>
                                </div>
                                <div class="col-md-4">
                                        <a   data-toggle="modal" href="#exampleModal" class="btn btn-md btn-info">Options</a>
                                    </div>
                        </div>
                    </div>
         
         
    </div>
  
        
    @endforeach
@endsection


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">School Work Options</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 <button class="btn btn-md btn-dark form-control  text-white"> Attach a file </button>
                 
                </div>
                <div class="modal-footer">
              
                </div>
              </div>
            </div>
          </div>
    




<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Create School work</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    @foreach ($class as $thisclass)
            <form action="{{ route('createTask', ['id' =>  $thisclass->id ]) }}">
                   @endforeach

                        

                     <input type="text" name="taskTitle" class="form-control" placeholder="title" />
                     <br />
                     <textarea type="text" name="taskdesc" class="form-control"></textarea>
                     <br />
                     <select name="tasktype" class="form-control">
                            <option value="Homework">Homework</option>
                            <option value="activity">activity</option>
                          </select>

                          <br />
                          
                          <button class="btn btn-md btn-success form-control"> Send </button>
                </form>
              
            </div>
           
          </div>
        </div>
      </div>

