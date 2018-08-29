@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

    <div class="jumbotron text-center">
    <h1 class="display-3">welcome</h1>
    <p class="lead">Jot down ideas for your next  projects</p>
    <a href="{{ url('project/create') }}" class="btn btn-dark btn-lg">Add project Idea</a>
</div>
                </div>
            </div>
        </div>
    </div>
<br>
<br>
@foreach($data as $idea)
    <div class="card card-body mb-2">
    <h4>{{$idea->title}}</h4>
    <p>{{$idea->description}}</p>
    <a class="btn btn-dark btn-block mb-2" href="{{ url('/project/edit/'.$idea->id) }}">Edit</a>
    <a class="btn btn-danger btn-block mb-2" href="{{ url('/project/delete/'.$idea->id) }}">Delete</a>
    <!-- <form  method="get" href="{{ url('/project/delete/'.$idea->id) }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Delete" class="btn btn-danger btn-block"  >
    </form> -->
</div>
@endforeach
</div>
@endsection
