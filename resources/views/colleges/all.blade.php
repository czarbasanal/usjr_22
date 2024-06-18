@extends('layouts.layout')

@section('content')
<h2>All Colleges</h2>
<div class="list-group">
    @foreach($colleges as $college)
    <a href="{{ url('/show/college/' . $college->collid) }}" class="list-group-item list-group-item-action">
        {{ $college->collfullname }}
    </a>
    @endforeach
</div>
@endsection