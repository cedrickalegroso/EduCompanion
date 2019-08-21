@extends('layouts.user')

@section('content')

<br />

<h3 class="text-info"> Math Quizzes </h3>
<hr>

<br />


@php
    

    $rand1 = rand(1,999);
    $rand2 = rand(1,999);

    $randomarithmetic = array('+', '-', '*');
    $randomize = $randomarithmetic[rand(0,2)];

    switch ($randomize) {
    case "+":
        $answer = $rand1 + $rand1;
        $points = 1;
        break;
    case "-":
        $answer = $rand1 - $rand1;
        $points = 2;
        break;
    case "*":
        $answer = $rand1 * $rand1;
        $points = 3;
        break;
}


  


@endphp


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

    
    @foreach ($leaderboard as $userleader)
   
      {{ $userleader->username }} | {{ $userleader->math_quiz_pts}}
      
    @endforeach
@endsection
