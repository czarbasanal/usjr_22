@extends('layouts.layout')

@section('content')
<div class="card">
    <div class="card-header">
        College Details
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $college->collfullname }}</h5>
        <p class="card-text">Departments:</p>
        <ul>
            @foreach($college->departments as $department)
            <li>{{ $department->deptfullname }}</li>
            @endforeach
        </ul>
        <p class="card-text">Programs:</p>
        <ul>
            @foreach($college->programs as $program)
            <li>{{ $program->progfullname }}</li>
            @endforeach
        </ul>
        <a href="{{ url('/show/colleges') }}" class="btn btn-primary">Back to list</a>
    </div>
</div>
@endsection