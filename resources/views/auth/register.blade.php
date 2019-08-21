@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

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
@endsection
