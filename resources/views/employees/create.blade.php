<!-- resources/views/employees/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Add Employee</h1>

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="position">Position:</label>
            <input type="text" name="position" class="form-control">
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <select name="gender" class="form-control">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="salary">Salary:</label>
            <input type="text" name="salary" class="form-control">
        </div>
        <div class="form-group">
            <label for="datep_stamp">Date of Joining:</label>
            <input type="date" name="datep_stamp" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Add Employee</button>
    </form>
@endsection