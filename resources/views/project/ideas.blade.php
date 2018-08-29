@extends('layouts.app')

@section('content')
<div class="container">
@foreach($data as $idea)
    <div class="card card-body mb-2">
    <h4>{{$idea->title}}</h4>
    <p>{{$idea->description}}</p>
    <a class="btn btn-dark btn-block mb-2" href="{{ url('/project/edit/'.$idea->id) }}">Edit</a>
    <form href="{{ url('/project/delete/'.$idea->id) }}" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="Delete" class="btn btn-danger btn-block"  >
    </form>
</div>
@endforeach
<div class="card card-body mb-2">
    <h4>Heroku Crash Course</h4>
    <p>Video on how to deploy app.</p>
    <a class="btn btn-dark btn-block mb-2" href="/ideas/edit/5ab914afbaf7310014731fe6">Edit</a>
    <form action="/ideas/5ab914afbaf7310014731fe6?_method=DELETE" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="Delete" class="btn btn-danger btn-block"  >
    </form>
</div>
</div>
@endsection
