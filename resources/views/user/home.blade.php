@extends('layouts.user')

@section('content')



<div class="container-fluid bg-info">
    <div class="row">

        <div class="col-md-6 text-left ml-5 p-5 text-light"> 

                @php
                $date = date('d-m-y'); 
             @endphp



                <h3> Welcome back, {{ Auth::user()->name}}! </h3>
                <h3> 21 August, 2019 <h3>
            </div>
        <div class="col-md-3">
            
        </div>

        <div class="col-md-3  ">
             
            
        </div>

        
    </div>
</div>


<div class="container">
       
    <div class="row">

        <div class="col-md-6">
       

        <div class="card card-quiz  text-info mt-2">
                <br />
                <h3> Your Task </h3>
          
                <p> 3 tasks </p>

        </div>
        </div>

        <div class="col-md-6">

                <div class="card card-quiz  text-info mt-2">
                    <br />
                        <h3>  Quiz Points </h3>

                        <p> 50 Points </p>
        
                </div>
              
            </div>

           
    </div>
</div>

<div class="contanainer">
    <div class="row">
        <div class="col-md-12">

               
                     
                        <canvas id="myChart" width="150" height="50"></canvas>
            
                   
               
        </div>
    </div>
</div>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Prelim', 'Midterm', 'Finals',],
        datasets: [{
            label: 'Your School Stats',
            data: [89, 77, ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
@endsection

