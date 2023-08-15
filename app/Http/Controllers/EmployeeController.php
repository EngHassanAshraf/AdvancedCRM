<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    function getAllEmployees(){
        $employees = Employee::all();
        // dd($employees);
        return view('showdata', [
            "employees"=>$employees
        ]);
    }

    function addNewEmp(Request $empdata){
        $empdata->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:250', 'unique:employees'],
            'position' => ['required', ],
            'salary' => ['required', ],
            'phone' => ['required', ],
            'address' => ['required', 'string'],
            'file' => ['required', 'image', 'max:2560'],
            'age' => ['required', ],
            'department' => ['required', ],
            'gender' => ['required', ],
            'relation_status' => ['required', ],
            'military_status' => ['required', ],
            'hire_date' => ['required', ],
            'attendance_at' => ['required', ],
        ]);

        $recv_img = $empdata->file('file');
        $imageName = uniqid() .'.'. $recv_img->getClientOriginalExtension();
        $image = $recv_img->move('images', $imageName);
        $created = Employee::create(
            [
                'name' => $empdata->name ,
                'email' => $empdata->email ,
                'position' => $empdata->position ,
                'salary' => $empdata->salary ,
                'phone' => $empdata->phone ,
                'address' => $empdata->address ,
                'image' => $image ,
                'age' => $empdata->age ,
                'department' => $empdata->department ,
                'gender' => $empdata->gender ,
                'relation_status' => $empdata->relation_status ,
                'military_status' => $empdata->military_status ,
                'hire_date' => $empdata->hire_date ,
                'attendance_at' => $empdata->attendance_at ,
            ]
        );

        if($created)
            return redirect('showdata');
        else dd($empdata);
    }

    function showSingle($id){
        $emp_record = Employee::where("id",$id)->get();
        return view('showsingle',[
            'emp'=>$emp_record
        ]);
    }

    function deleteEmp($id){
        $emp = Employee::where("id",$id);
        $deleted = $emp->delete();

        if($deleted) return redirect('showdata');
    }
}
