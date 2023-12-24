<?php

namespace App\Http\Repositories;

use App\Models\Employee;
use App\Http\Resources\EmployeeResource;

class EmployeeReposirty
{

    public function getAll()
    {
        if(auth()->user()->role === 'manager')
            $employees = Employee::all();

        else
            $employees = Employee::where('position', auth()->user()->role)->get();

        return response()->json(['status' => 'success', 'data' => EmployeeResource::collection($employees)], 200);
    }

    public function show()
    {
        $listing = config('custom.employee.listing');
        
        $pageDetails = [
            'title' => 'Employee listing',
        ];

        return view('employee.list', compact('pageDetails','listing'));
    }

    public function create()
    {
        $form = config('custom.employee.form');
        
        $pageDetails = [
            'title' => 'Employee register',
        ];

        if(auth()->user()->role == 'web_developer')
            $form[2]['options'] = ['web_developer' => 'Web Developer'];

        if(auth()->user()->role == 'web_designer')
            $form[2]['options'] = ['web_designer' => 'Web Designer'];

        return view('employee.register', compact('pageDetails','form'));
    }

    public function store($request)
    {
        Employee::create($request->validated());
    
        return response()->json(['success' => true], 201);
    }

    public function edit($id)
    {
        $employee = Employee::find($id);

        $form = config('custom.employee.form');
        
        $pageDetails = [
            'title' => 'Employee update',
        ];
        
        if(auth()->user()->role == 'web_developer')
            $form[2]['options'] = ['web_developer' => 'Web Developer'];

        if(auth()->user()->role == 'web_designer')
            $form[2]['options'] = ['web_designer' => 'Web Designer'];       

        return view('employee.edit', compact('pageDetails', 'form', 'employee'));
    }

    public function update($request, $id)
    {
        $employee = Employee::find($id);

        $employee->update($request->validated());

        return response()->json(['success' => true], 200);
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return response()->json(['success' => true], 200);
    }
}
