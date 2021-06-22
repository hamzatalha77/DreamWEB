<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empmodel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addEmployee()
    {
        return view('empmodel');
    }
    public function saveEmployee(Request $request)
    {
        DB::table('employees')->insert([
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'address'=>$request->address,
            'mobile'=>$request->mobile,
        ]);
        return back()->with('employee_add','Employee added successfully');
    }
    public function employeeList()
    {
        $employees = DB::table('employees')->get();
        return view('employeeslist', compact('employees'));
    }
    public function editEmployee($id)
    {
        $employee = DB::table('employees')->where('id',$id)->first();
        return view('edit-employee', compact('employee'));
    }
    public function updateEmployee(Request $request)
    {
        DB::table('employees')->where('id', $request->id)->update([
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'address'=>$request->address,
            'mobile'=>$request->mobile
        ]);
        return back()->with('employee_update', 'Employee updated successfully');
    }
    public function deleteEmployee($id)
    {
        DB::table('employees')->where('id', $id)->delete();
        return back()->with('employee_delete', 'Employee deleted successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'fname' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'mobile' => 'required',

        ]);
        $emps = new Employee;

        $emps->fname = $request->input('fname');
        $emps->lname = $request->input('lname');
        $emps->address = $request->input('address');
        $emps->mobile = $request->input('mobile');

        $emps->save();

        return redirect('employee')->with('success', 'Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
