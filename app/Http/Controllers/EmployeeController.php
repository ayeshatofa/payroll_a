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
        $employees = DB::table('employees')->get();
        return view('employee.index')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
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
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'date_of_join' => 'required|date',

        ]);
        //$employees = DB::table('employees')->where('id', $employee->emp_id)->update
        $employees = DB::table('employees')->insert([
            'name' => $request->name,
            'address' => $request->address,
            'date_of_join' => $request->date_of_join
        ]);
        // Employee::create([
        //     'name' => $request->name,
        //     'address' => $request->address,
        //     'date_of_join' => $request->date_of_join
        // ]);
        return redirect()->route('employee.index')->with('msg', 'Employee updated successfully');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employee.show')->with('employee',$employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employee.edit')->with('employee',$employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'date_of_join' => 'required|date',
        ]);
        $employees = DB::table('employees')->where('emp_id', $employee->emp_id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'date_of_join' => $request->date_of_join,
        ]);
        return redirect()->route('employee.index')->with('msg', 'Employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        DB::table('employees')->where('emp_id',$employee->emp_id)->delete();
        return redirect()->route('employee.index')->with('msg', 'Employee removed successfully');
    }
}
