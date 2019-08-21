<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

   
    </head>
    <body>
      

      
    


    </body>  

    <div id="sec1">
        

        <br />
        <br />
        <br />
        <br />
        <br />
        <br />

            <div class="content">
                   

                   <div class="container text-center">
                       <div class="row">
                         

                           <div  class="col-md-6 main-text-reg">
                                <div class="text-light mt-5">
                                        <h1>  EduCompanion </h1>
  
                                        <div class="links">
                                                <p> To disseminate data efficiently without any inconvenience with pace. </p>
                                              </div>
                                       </div>
                            </div>

                            <div class="col-md-6">
                                    <br />
                                    <br />
                                    <br />

                                    <div class="container mt-5">
                                            <div class="row justify-content-center">
                                                <div class="col-md-10">
                                                    <div class="card">
                                                        <div class="card-header">Login now</div>
                                        
                                                        <div class="card-body">
                                                            <form method="POST" action="{{ route('userlogin') }}">
                                                                @csrf
                                        
                                                                <div class="container">
                                                                    <div class="row">
                                        
                                        
                                                                        <div class="col-md-6">
                                                                          <input type="text" placeholder="Username" name="username" class="form-control" />
                                                                        </div>
                                        
                                                                        <div class="col-md-6">
                                                                            <input type="password" placeholder="Password" name="password" class="form-control" />
                                                                               </div>
                                                                                </div>
                                                                             </div>
                                                                          <br>
                                        
                                        
                                                                        
                                        
                                                                                    <button class="btn btn-lg btn-success form-control" > Login </button>
                                                                                    </div>
                                                                                </div>
                                                                              </div>
                                                                              
                                        
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    
                    
                            </div>
                    
                               
                                </div>
                       </div>
                   </div>


                 <!--   <div class="flex-center position-ref full-height">
                            @if (Route::has('login'))
                                <div class="top-right links">
                                    @auth
                                        <a href="{{ url('/home') }}">Home</a>
                                    @else
                                        <a href="{{ route('login') }}">Login</a>
                
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div> -->
    
                  
    </div>
    </div>


  

      
</html>
