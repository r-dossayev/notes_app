
@extends('layouts.base')
@section('content')
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-1 py-4">
            <form class="card-body" method="post" action="{{route('login.authenticate')}}">
                @csrf
                <h6 class="card-title mb-3">Login</h6>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="input-group"> <input name="email" class="form-control" type="email" placeholder="Email"> </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="input-group">
                                <input name="password" class="form-control" type="password" placeholder="Password">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"><a href="{{route('register')}}" class="terms">Register</a> </div> <button class="btn btn-primary btn-block confirm-button">Confirm</button>
            </form>
        </div>
    </div>
@endsection
