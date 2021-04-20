<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees', ['employees' => Employee::all()]);
    }

    public function show($id)
    {
        return view('employee', ['employee' => Employee::find($id)]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required|max:32'
        ]);

        $newEmp = new Employee();
        $newEmp->name = $request['fname'];
        $newEmp->project_id = $request['assign_proj'];
        if ($newEmp->name === NULL) {
            return redirect('/employees')->with('status_error', 'Employee addition failed.');
        }
        return ($newEmp->save() == 1)
            ? redirect('/employees')->with('status_success', 'Employee added successfully!')
            : redirect('/employees')->with('status_error', 'Employee addition failed.');
    }

    public function destroy($id)
    {
        Employee::destroy($id);
        return redirect('/employees')->with('status_success', 'Employee deleted!');
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'fname' => 'required|max:32',
        ]);
        $up_emp = Employee::find($id);
        $up_emp->name = $request['fname'];
        $up_emp->project_id = $request['assign_proj'];
        if ($up_emp->name === NULL) {
            return redirect('/employees')->with('status_error', 'Employee addition failed.');
        }
        return ($up_emp->save() == 1) ?
            redirect('/employees')->with('status_success', 'Employee info updated!') :
            redirect('/employees')->with('status_error', 'Employee info update failed.');
    }
}
