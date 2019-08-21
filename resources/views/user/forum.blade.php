@extends('layouts.user')

@section('content')

<br />

<h3 class="text-info"> Forum </h3>
<hr>

<a data-toggle="modal" href="#exampleModalLong" class="btn btn-md btn-info  text-light"> Ask a Question. </a> 


<hr>

@foreach ($forum as $thisforum)
    
<br />
<div class="card form-control text-left"> <h3 class="text-left text-info">  {{ $thisforum->forum_title }} <h3> </div>

@endforeach

<br />
</div>
@endsection



   <!-- Modal -->
   <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Create a Forum about something!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">


            <form action="{{ route('addforum') }}">

                    <input type="text" class="form-control" name="forum-title" placeholder="Add a title">
                    <br />
                    <textarea type="text" class="form-control" name="forum-body" placeholder="Enter your question"></textarea>
                <br />
                <button class="btn btn-md btn-success form-control">Create Forum</button>
              </form>
            </div>
          </div>
        </div>
      </div>
