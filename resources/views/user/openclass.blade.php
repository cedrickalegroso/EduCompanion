@extends('layouts.user')

@section('content')

@foreach ($class as $thisclass)

{{ $thisclass->class_name }}
    
@endforeach

<br />



<div class="container">


    <h1> {{ $rand1 }} {{$randomize}} {{  $rand2 }} </h1>
   <p> {{ $answer }} </p>
<div class="p-5">

<form action="{{ route('verifymath', ['answer' => $answer, 'points' => $points ])}}">
                <input type="text" class="form-control" name="useranswer" />
        
                <br />
                <button class="btn btn-md btn-success form-control">
                     Submit
                </button>
            </form>

</div>
    

  
</div>
@endsection


@section('content-sideline')
    <h3> Math Leaderboards </h3>

    
    
@endsection
