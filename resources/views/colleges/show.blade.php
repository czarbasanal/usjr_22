@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-5">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold mb-4">College Details</h1>
        <a href="{{ url()->previous() }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
            Back
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg p-4">
        <p class="mb-2"><strong>Name:</strong> {{ $college->collfullname }}</p>
        <h2 class="text-xl font-semibold mt-4 mb-2">Departments</h2>
        <ul class="list-disc pl-5">
            @foreach($college->departments as $department)
            <li>{{ $department->deptfullname }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection