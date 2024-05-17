
<!-- resources/views/employees/search_sort.blade.php -->
<div class="row mb-3">
    <div class="col-md-6">
        <form action="{{ route('employees.index') }}" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        <form action="{{ route('employees.index') }}" method="GET" id="sortForm" class="form-inline float-right">
            <div class="form-group mr-2">
                <label for="sort_by" class="mr-2">Sort by:</label>
                <select name="sort_by" class="form-control" id="sort_by" onchange="document.getElementById('sortForm').submit();">
                    <option value="id" {{ request('sort_by') == 'id' ? 'selected' : '' }}>ID</option>
                    <option value="name" {{ request('sort_by') == 'name' ? 'selected' : '' }}>Name</option>
                    <option value="position" {{ request('sort_by') == 'position' ? 'selected' : '' }}>Position</option>
                    <option value="gender" {{ request('sort_by') == 'gender' ? 'selected' : '' }}>Gender</option>
                    <option value="salary" {{ request('sort_by') == 'salary' ? 'selected' : '' }}>Salary</option>
                    <option value="datep_stamp" {{ request('sort_by') == 'datep_stamp' ? 'selected' : '' }}>Date of Joining</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sort_order" class="mr-2">Order:</label>
                <select name="sort_order" class="form-control" id="sort_order" onchange="document.getElementById('sortForm').submit();">
                    <option value="asc" {{ request('sort_order') == 'asc' ? 'selected' : '' }}>Ascending</option>
                    <option value="desc" {{ request('sort_order') == 'desc' ? 'selected' : '' }}>Descending</option>
                </select>
            </div>
        </form>
    </div>
</div>
{{-- <div class="row mb-3">
    <div class="col-md-6">
        <form action="{{ route('employees.index') }}" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-6 text-right">
        <div class="dropdown">
            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="sortDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sort by
            </button>
            <div class="dropdown-menu" aria-labelledby="sortDropdown">
                <a class="dropdown-item" href="{{ route('employees.index', ['sort_by' => 'id', 'sort_order' => request('sort_order') === 'asc' && request('sort_by') === 'id' ? 'desc' : 'asc']) }}">ID</a>
                <a class="dropdown-item" href="{{ route('employees.index', ['sort_by' => 'name', 'sort_order' => request('sort_order') === 'asc' && request('sort_by') === 'name' ? 'desc' : 'asc']) }}">Name</a>
                <a class="dropdown-item" href="{{ route('employees.index', ['sort_by' => 'position', 'sort_order' => request('sort_order') === 'asc' && request('sort_by') === 'position' ? 'desc' : 'asc']) }}">Position</a>
                <a class="dropdown-item" href="{{ route('employees.index', ['sort_by' => 'gender', 'sort_order' => request('sort_order') === 'asc' && request('sort_by') === 'gender' ? 'desc' : 'asc']) }}">Gender</a>
                <a class="dropdown-item" href="{{ route('employees.index', ['sort_by' => 'salary', 'sort_order' => request('sort_order') === 'asc' && request('sort_by') === 'salary' ? 'desc' : 'asc']) }}">Salary</a>
                <a class="dropdown-item" href="{{ route('employees.index', ['sort_by' => 'datep_stamp', 'sort_order' => request('sort_order') === 'asc' && request('sort_by') === 'datep_stamp' ? 'desc' : 'asc']) }}">Date of Joining</a>
            </div>
        </div>
    </div>
</div> --}}
