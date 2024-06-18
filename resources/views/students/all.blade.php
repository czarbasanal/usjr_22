@extends('layouts.layout')

@section('content')
<h2>All Students</h2>
<div class="list-group">
    @foreach($students as $student)
    <a href="{{ url('/show/student/' . $student->studid) }}" class="list-group-item list-group-item-action">
        {{ $student->studfirstname }} {{ $student->studlastname }} - Year {{ $student->studyear }}
    </a>
    @endforeach
</div>
@endsection