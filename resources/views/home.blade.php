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
</div>
@endsection
