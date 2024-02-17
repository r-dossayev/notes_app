
@extends('layouts.base')
@section('content')
    <div class="container mt-5">
        <div class="card ">
            <div class="card-header">
                {{$note->title}}
            </div>
            <div class="card-body">


                <p class="card-text">{{$note->content}}</p>
                @can('update', $note)
                <a href="{{route('notes.edit', $note)}}" class="btn btn-primary">edit</a>
                @endcan
                @can('delete', $note)
                <form action="{{route('notes.destroy', $note)}}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">delete</button>
                </form>
                @endcan
            </div>
        </div>
    </div>
@endsection
