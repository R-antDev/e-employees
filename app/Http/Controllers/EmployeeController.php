<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'salary' => 'required',
        ]);
        Employee::create( $validated );
        flash()->addSuccess('Your employee account has been created');
        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
        flash()->addSuccess('Your employee showed');
        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
        $validated = $request->validate([
            'employee_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'salary' => 'required',
        ]);
        $employee->update($validated);
        flash()->addSuccess('Your employee account has been updated');
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
        $employee->delete();
        flash()->addInfo('Your employee account has been deleted');
        return redirect()->route('employees.index');
    }
}
