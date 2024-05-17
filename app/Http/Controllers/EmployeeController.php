<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
 {
    // public function index()
   
    //  { 
    //       $employees = Employee::all();
    //       return view('employees.index', compact('employees'));
    //  }

    public function index(Request $request)
{
    // Retrieve all employees
    $employees = Employee::query();

    // Apply search filter if search query is provided
    if ($request->has('search')) {
        $search = $request->input('search');
        $employees->where(function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                  ->orWhere('position', 'like', '%' . $search . '%')
                  ->orWhere('gender', 'like', '%' . $search . '%')
                  ->orWhere('salary', 'like', '%' . $search . '%')
                  ->orWhere('datep_stamp', 'like', '%' . $search . '%');
        });
    }

    // Apply sorting
    $sortBy = $request->input('sort_by', 'id');
    $sortOrder = $request->input('sort_order', 'asc');
    $employees->orderBy($sortBy, $sortOrder);

    // Retrieve paginated results
    $employees = $employees->paginate(10);

    // Pass data to view
    return view('employees.index', compact('employees'));
}



   public function create()
      {
       return view('employees.create');
      }

     public function store(Request $request)
     {
         $request->validate([
            'name' => 'required',
            'position' => 'required',
            'gender' => 'required',
            'salary' => 'required|numeric',
            'datep_stamp' => 'required|date',
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.show', compact('employee'));
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'gender' => 'required',
            'salary' => 'required|numeric',
            'datep_stamp' => 'required|date',
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
