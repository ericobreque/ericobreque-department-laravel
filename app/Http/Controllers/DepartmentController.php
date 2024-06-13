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
        // Muestra todos los datos, incluyendo cantidad de subdivisiones
        $departments = Department::select('departments.id','departments.name','departments.employee','departments.ambassador','departments.level', Department::raw('count(b.department_id) subdivisions'), Department::raw('c.name as division'))
                                ->leftJoin('departments as b', 'b.department_id', '=', 'departments.id')
                                ->leftJoin('departments as c', 'c.id', '=', 'departments.department_id')
                                ->groupBy('departments.id')
                                ->orderBy('departments.id')
                                ->get();
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
        // Guarda un registro
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
        // Muestra un registro
        // Requiere del id del departamento a mostrar
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
        // Muestra todos los subdepartamentos correspondientes a un departamento superior
        // Necesita el id del departamento superior
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
        // Actualiza un registro
        // Requiere del id del departamento a actualizar
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
        // Elimina un registro
        // Requiere del id del departamento a elimninar
        $department->delete();

        $data = [
            'message' => 'Department deleted successfully',
            'department' => $department
        ];

        return response()->json($data);
    }
}
