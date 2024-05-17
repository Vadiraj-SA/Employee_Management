<!-- resources/views/employees/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Employee Details</h1>

    <table class="table">
        <tr>
            <th>ID:</th>
            <td>{{ $employee->id }}</td>
        </tr>
        <tr>
            <th>Name:</th>
            <td>{{ $employee->name }}</td>
        </tr>
        <tr>
            <th>Position:</th>
            <td>{{ $employee->position }}</td>
        </tr>
        <tr>
            <th>Gender:</th>
            <td>{{ $employee->gender }}</td>
        </tr>
        <tr>
            <th>Salary:</th>
            <td>{{ $employee->salary }}</td>
        </tr>
        <tr>
            <th>Date of Joining:</th>
            <td>{{ $employee->datep_stamp }}</td>
        </tr>
    </table>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>
@endsection