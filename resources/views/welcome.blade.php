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

                                    <div class="container mt-5">
                                            <div class="row justify-content-center">
                                                <div class="col-md-10">
                                                    <div class="card">
                                                        <div class="card-header">Register now</div>
                                        
                                                        <div class="card-body">
                                                            <form method="POST" action="{{ route('register') }}">
                                                                @csrf
                                        
                                                                <div class="container">
                                                                    <div class="row">
                                        
                                        
                                                                        <div class="col-md-6">
                                                                          <input type="text" placeholder="Enter fullname" name="name" class="form-control" />
                                                                        </div>
                                        
                                                                        <div class="col-md-6">
                                                                            <input type="text" placeholder="Enter username" name="username" class="form-control" />
                                                                               </div>
                                                                                </div>
                                                                             </div>
                                                                          <br>
                                        
                                        
                                                                          <div class="container">
                                                                    <div class="row">
                                        
                                        
                                                                        <div class="col-md-6">
                                                                          <input type="email" placeholder="Enter email" name="email" class="form-control" />
                                                                        </div>
                                        
                                                                        <div class="col-md-6">
                                                                            <input type="password" placeholder="Enter password" name="password" class="form-control" />
                                                                               </div>
                                                                                </div>
                                                                             </div>
                                                                          <br>
                                                                              <div class="container">
                                                                                <div class="row form">
                                                                                    <div class="col-md-12">
                                                                                         <select class="form-control" name="school">
                                                                                        <option value="Central Phillippine University">Central Phillippine University</option>
                                                                                        <option value="University of San Agustin">University of San Agustin</option>
                                                                                        <option value="West Visayas State University">West Visayas State University</option>
                                                                                         <option value="Ateneo De Iloilo">Ateneo De Iloilo</option>
                                                                                         <option value="St. Joseph School">St. Joseph School</option>
                                                                                         <option value="Iloilo National High School">Iloilo National High School</option>
                                                                                         <option value="Assumption Iloilo">Assumption Iloilo</option>
                                                                                         <option value="Western Institute of Technology">Western Institute of Technology</option>
                                                                                         <option value="Iloilo Scholastic Academy">Ateneo De Iloilo</option>
                                                                                         <option value="Santa Clarita">Santa Clarita</option>
                                                                                         <option value="Hua Siong College of Iloilo">Hua Siong College of Iloilo</option>
                                                                                         <option value="Iloilo Montessori">Iloilo Montessori</option>
                                                                                         <option value="St. Paul University Iloilo">St. Paul University Iloilo</option>
                                                                                         <option value="John B. Lacson Foundation Maritime University">John B. Lacson Foundation Maritime University</option>
                                                                                         <option value="STI College Iloilo">STI College Iloilo</option>
                                                                                         <option value="Iloilo Doctors College">Iloilo Doctors College</option>
                                                                                         <option value="Sacred Heart De Iloilo">Sacred Heart De Iloilo</option>
                                                                                         </select>
                                                                                
                                                                                        <br>
                                        
                                                                                    <button class="btn btn-lg btn-success form-control" > Register </button>
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
    <div id="sec2">
        <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat, reprehenderit quasi! Adipisci quas, et amet odit nostrum est voluptatem. Magnam ad ab molestias voluptates necessitatibus distinctio iure impedit ratione voluptas? </p>
    </div>

  

      
</html>
