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
                                  <input type="text" placeholder="Enter Fullname" name="name" class="form-control" />
                                </div>

                                <div class="col-md-6">
                                    <input type="text" placeholder="Enter Username" name="username" class="form-control" />
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
                                                 <option value="University of Iloilo">University of Iloilo</option>
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
