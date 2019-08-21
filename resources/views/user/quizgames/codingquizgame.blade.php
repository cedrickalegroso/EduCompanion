@extends('layouts.user')

@section('content')

<br />

<h3 class="text-info"> Coding Quizzes </h3>
<hr>

<br />



<div class="container">

        <div class="container text-left">


                <div class="problem">
           
                   <p> <strong> Using C, Create a simple program that ouputs Hello, World </strong> </p>
                     
                <div class="expected">
                       <pre> expected output: </pre>
           
                       <pre> Hello, World! </pre>
                </div>
                  
           
           
           
                </div>

    <div class="coding-quiz">
            <div id="editor"> #include < stdio.h>
 #include < conio.h> 


        void main() {

                //write your work here

                return 0;
        };
</div> 
    </div>

    <br />

    <form action="">

        <button class="btn btn-md btn-success form-control">Submit Solution</button>
    </form>
       


 
  
  

@endsection






    





