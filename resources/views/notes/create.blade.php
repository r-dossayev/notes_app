
@extends('layouts.base')
@section('content')
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-1 py-4">
            <form class="card-body" method="post" action="{{route('notes.store')}}">
                @csrf
                <h6 class="card-title mb-3">New note</h6>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="input-group"> <input name="title" class="form-control" type="text" placeholder="Name"> </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="input-group">
                                <textarea name="content" class="form-control" placeholder="Content"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"></div> <button class="btn btn-primary btn-block confirm-button">Confirm</button>
            </form>
        </div>
    </div>
@endsection
