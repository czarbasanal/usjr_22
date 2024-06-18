@extends('layouts.layout')

@section('content')
<div class="card">
    <div class="card-header">
        Student Details
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $student->studfirstname }} {{ $student->studlastname }}</h5>
        <p class="card-text">Program: {{ $student->program->progfullname }}</p>
        <p class="card-text">College: {{ $student->college->collfullname }}</p>
        <a href="{{ url('/show/students/all') }}" class="btn btn-primary">Back to list</a>
    </div>
</div>
@endsection