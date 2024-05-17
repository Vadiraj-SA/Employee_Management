{{-- resources\views\employees\index.blade.php --}}

@extends('layouts.app')
@section('content')

    <h1>Employees</h1>

    <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Add Employee</a>

    @include('employees.search_sort')

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Position</th>
                <th>Gender</th>
                <th>Salary</th>
                <th>Date of Joining</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->position }}</td>
                <td>{{ $employee->gender }}</td>
                <td>{{ $employee->salary }}</td>
                <td>{{ $employee->datep_stamp }}</td>
                <td>
                    <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection 