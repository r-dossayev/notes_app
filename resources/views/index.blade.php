
@extends('layouts.base')
@section('content')
    <div class="container mt-5">

        @foreach($notes as $note)
            <div class="card ">
                <div class="card-header">
                   {{$note->title}}
                </div>
                <div class="card-body">

                    <p class="card-text">{{$note->content}}</p>
                    <a href="{{route('notes.show', $note)}}" class="btn btn-primary">Show</a>
                </div>
            </div>
        @endforeach


    </div>
@endsection
