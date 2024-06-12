<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $departments = Department::all();
        return response()->json($departments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $department = new Department;
        $department->name = $request->name;
        $department->department_id = $request->department_id;
        $department->employee = $request->employee;
        $department->ambassador = $request->ambassador;
        $department->save();

        $data = [
            'message' => 'Department created successfully',
            'department' => $department
        ];

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
        return response()->json($department);
    }

    /**
     * Display subdepartaments from principal.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function showSubDepartments($department)
    {
        //
        $subDepartments = Department::where('department_id',$department)->get();
        return response()->json($subDepartments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        //
        $department->name = $request->name;
        $department->department_id = $request->department_id;
        $department->employee = $request->employee;
        $department->ambassador = $request->ambassador;
        $department->save();

        $data = [
            'message' => 'Department created successfully',
            'department' => $department
        ];

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        //
        $department->delete();

        $data = [
            'message' => 'Department deleted successfully',
            'department' => $department
        ];

        return response()->json($data);
    }
}
