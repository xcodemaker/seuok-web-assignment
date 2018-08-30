@extends('layouts.app')

@section('content')
<div class="container">
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
