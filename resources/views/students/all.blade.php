@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-5">
    <h1 class="text-2xl font-bold mb-4">All Students</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b text-center">Student Name</th>
                    <th class="py-2 px-4 border-b text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td class="py-2 px-4 border-b text-center">{{ $student->studfirstname }} {{ $student->studlastname }}</td>
                    <td class="py-2 px-4 border-b text-center">
                        <a href="{{ url('/show/student/'.$student->studid) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Show</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection