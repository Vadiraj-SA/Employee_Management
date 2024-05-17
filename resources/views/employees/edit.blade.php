<!-- resources/views/employees/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Employee</h1>

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $employee->name }}">
        </div>
        <div class="form-group">
            <label for="position">Position:</label>
            <input type="text" name="position" class="form-control" value="{{ $employee->position }}">
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <select name="gender" class="form-control">
                <option value="Male" {{ $employee->gender == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ $employee->gender == 'Female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="salary">Salary:</label>
            <input type="text" name="salary" class="form-control" value="{{ $employee->salary }}">
        </div>
        <div class="form-group">
            <label for="datep_stamp">Date of Joining:</label>
            <input type="date" name="datep_stamp" class="form-control" value="{{ $employee->datep_stamp }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Employee</button>
    </form>
@endsection
