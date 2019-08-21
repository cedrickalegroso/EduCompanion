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
                                    <input type="text" placeholder="Enter username" name="username" class="form-control" />
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
