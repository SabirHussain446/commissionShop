<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "index";
        session(['tab'=>'employee_table']);
        $employee = Employee::all();
        $data = compact('employee');
        return view('employee_table')->with($data);
        // return view('employee_table', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // session(['tab'=>'home']);
        return view('employee_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullname'=>'required',
            'fathername'=>'required',
            'email'=>'required|email',
            'address'=>'required',
            'phone'=>'required',
            'cnic'=>'required',
            'department'=>'required',
            'salary'=>'required|numeric',
            'gender'=>'required',
            'status'=>'required',
            'education'=>'required',
            'religion'=>'required',
            'experience'=>'required',
            'image'=>'required'
        ]);

        $employee = new Employee;
        $employee->fullname = $request['fullname'];
        $employee->fathername = $request['fathername'];
        $employee->email = $request['email'];
        $employee->address = $request['address'];
        $employee->phone = $request['phone'];
        $employee->cnic = $request['cnic'];
        $employee->department = $request['department'];
        $employee->salary = $request['salary'];
        $employee->gender = $request['gender'];
        $employee->status = $request['status'];
        $employee->education = $request['education'];
        $employee->experience = $request['experience'];
        $employee->religion = $request['religion'];
        $fileName = time().".".$request->file('image')->getClientOriginalExtension();
        $employee->image = $request->file('image')->storeAs('public/Image', $fileName);
        $employee->save();

        if($employee){
            return redirect('employee');
        }
        else{
            return redirect('employee.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        return view('employee_profile')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // echo "edit";
        $employee = Employee::find($id);
        return view('employee_edit')->with('employee', $employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // echo "update";
        // echo $id;
        $request->validate([
            'fullname'=>'required',
            'fathername'=>'required',
            'email'=>'required|email',
            'address'=>'required',
            'phone'=>'required',
            'cnic'=>'required',
            'department'=>'required',
            'salary'=>'required|numeric',
            'gender'=>'required',
            'status'=>'required',
            'education'=>'required',
            'religion'=>'required',
            'experience'=>'required',
            'image'=>'required'
        ]);
// $a = '';
// if($a==true){
//     echo "sabir";
// }else{
//     echo " not";
// }

         $image = $request->file('image');
        if($image==true){
        $employee = Employee::find($id);
        $employee->fullname = $request['fullname'];
        $employee->fathername = $request['fathername'];
        $employee->email = $request['email'];
        $employee->address = $request['address'];
        $employee->phone = $request['phone'];
        $employee->cnic = $request['cnic'];
        $employee->department = $request['department'];
        $employee->salary = $request['salary'];
        $employee->gender = $request['gender'];
        $employee->status = $request['status'];
        $employee->education = $request['education'];
        $employee->experience = $request['experience'];
        $employee->religion = $request['religion'];
        $fileName = time().".".$image->getClientOriginalExtension();
        $employee->image = $image->storeAs('public/Image', $fileName);
        $employee->save();
        // dd($employee);
        if($employee){
            return redirect('employee');
        }
        else{
            return redirect('employee.edit');
        }
      }
      else{
        $employee = Employee::find($id);
        $employee->fullname = $request['fullname'];
        $employee->fathername = $request['fathername'];
        $employee->email = $request['email'];
        $employee->address = $request['address'];
        $employee->phone = $request['phone'];
        $employee->cnic = $request['cnic'];
        $employee->department = $request['department'];
        $employee->salary = $request['salary'];
        $employee->gender = $request['gender'];
        $employee->status = $request['status'];
        $employee->education = $request['education'];
        $employee->experience = $request['experience'];
        $employee->religion = $request['religion'];
        $employee->image = $request['image'];
        $employee->save();
        // dd($employee);
        if($employee){
            return redirect('employee');
        }
        else{
            return redirect('employee.edit');
        }
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo "destroy";
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('employee');
    }
}
