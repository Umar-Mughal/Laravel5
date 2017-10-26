<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class AdminController extends Controller
{
    public function index()
    {
        $treeView = Category::with(['children'])->get();
    	$employeesList=Employee::all();
    	return view('employee/employees_list',compact('employeesList'));
    }

    // public function newEmployee()
    // {
    // 	return view('employee/employee_form');
    // }

    // public function saveEmployee(Request $request)
    // {   
    //     $request->validate([
    //             'employeeName'=>'required|alpha',
    //             'employeeCNIC'=>'required',
    //             'employeePhone'=>'required',
    //             'employeeAddrs'=>'required|alpha',
    //             'employeeQual'=>'required',
    //             'employeeSal'=>'required|integer'

    //         ]);

    //     $employee=new Employee;
    //     $employee->employee_name=$request->employeeName;
    //     $employee->employee_cnic=$request->employeeCNIC;
    //     $employee->employee_phone=$request->employeePhone;
    //     $employee->employee_adrs=$request->employeeAddrs;
    //     $employee->employee_qualification=$request->employeeQual;
    //     $employee->employee_salary=$request->employeeSal;
    //     $employee->save();

    //     return redirect('employees-list');


    // }

    // public function editEmployee($employees_id)
    // {
    // 	$emp=Employee::find($employees_id);
    // 	return view('employee/employee_form',compact('emp'));

    // }
}
