@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-5">
    <h1 class="text-2xl font-bold mb-4">All Departments</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b text-center">Department Name</th>
                    <th class="py-2 px-4 border-b text-center">College</th>
                </tr>
            </thead>
            <tbody>
                @foreach($departments as $department)
                <tr>
                    <td class="py-2 px-4 border-b text-center">{{ $department->deptfullname }}</td>
                    <td class="py-2 px-4 border-b text-center">{{ $department->college->collfullname }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $departments->links() }}
    </div>
</div>
@endsection