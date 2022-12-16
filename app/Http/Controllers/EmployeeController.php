<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->role == 'admin'){
            $employee = Employee::all();
        }
        if (auth()->user()->role == 'company'){
            $employee = Employee::where('company_id',auth()->user()->employee_id)->get()->all();
        }
        return view('admin.Employee.Post.index', ['employee' => $employee]);
    }

    public function create(Employee $employee)
    {
        $employee = Employee::all();
        if (auth()->user()->role == 'admin'){
            $employee = Companies::all();
        }
        if (auth()->user()->role == 'company'){
            $employee = Companies::where('employee_id',auth()->user()->employee_id)->get()->all();
        }
        return view("admin.Employee.Post.create", ['companies' => $employee], compact("employee") );
    }
    public function store()
    {
        $data = request()->validate([
            "Last_Name"=>"string",
            'First_Name'=>"string",
            'Patronymic'=>"string",
            'Passport_id'=>"string|regex:/^([0-9\[A-Z]\[a-z]\]*)/|min:7|max:12",
            'company_id'=>"integer",
            'Job_title'=>"string",
            'phone_number'=>'required|regex:/^([0-9\+\(\)\ \]*)/|min:9|max:16',
            'Address'=>"string"

        ]);
        Employee::create($data);
        return redirect()->route("user.index");
    }

    public function show(Employee $employee)
    {
        return view("admin.Employee.Post.show", compact("employee") );
    }

    public function edit(Employee $employee)
    {
        return view("admin.Employee.Post.edit", compact("employee") );

    }
    public function update(Employee $employee){
        $data = request()->validate([
            "Last_Name"=>"string",
            'First_name'=>"string",
            'Patronymic'=>"string",
            'Passport_id'=>"string",
            'Job_title'=>"string",
            'phone_number'=>"string",
            'Address'=>"string"
        ]);
        $employee->update($data);
        return redirect()->route("user.show" ,$employee->id);
    }

    public function delete(Employee $employee)
    {
        return view("admin.Employee.Post.delete", compact("employee"));

    }

    public function destroy(Employee $employee )
    {
        $employee->delete();
        return redirect()->route("user.index");
    }
}
