<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
    // return "Employee List";
    //   $data = Employee::all();
    //   $data = Employee::where('age', '>', 90)->get();
    //   $data = Employee::where('first_name', 'LIKE', 'a%')->get();

    //  manipulate $data
    // you canadd business logic code
    //   $data = DB::select('select * from employees');
        //  $data = Employee::findOrFail(1)->get();
        //  $data = Employee::paginate(10);
        // $data = Employee::select('first_name', 'last_name', 'email', 'age')->get();
        // $data = Employee::select('first_name', 'last_name', 'email', )->get();
        $data = Employee::select('first_name', 'last_name', )->get();



      return view('employee.index', ['employees' => $data]);
    }
}
