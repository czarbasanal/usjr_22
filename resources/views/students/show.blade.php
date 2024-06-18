@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-5">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Student Details</h1>
        <a href="{{ url()->previous() }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
            Back
        </a>
    </div>
    <div class="bg-white shadow-md rounded-lg p-4">
        <p class="mb-2"><strong>Name:</strong> {{ $student->studfirstname }} {{ $student->studlastname }}</p>
        <p class="mb-2"><strong>Year:</strong> {{ $student->studyear }}</p>
        <p class="mb-2"><strong>Program:</strong> {{ $student->program->progfullname }}</p>
        <p class="mb-2"><strong>College:</strong> {{ $student->college->collfullname }}</p>
    </div>
</div>
@endsection