<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\EmployeeRequest;
use App\Http\Repositories\EmployeeReposirty;

class EmployeeController extends Controller
{
    public $employeeRepo;

    public function __construct()
    {
        $this->employeeRepo = new EmployeeReposirty();               
    }

    public function index()
    {
        return $this->employeeRepo->getAll();
    }

    public function show()
    {        
        return $this->employeeRepo->show();
    }

    public function create()
    {
        return $this->employeeRepo->create();
    }

    public function store(EmployeeRequest $request)
    {
        try {
            return $this->employeeRepo->store($request);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'msg' => $e->getMessage()], 500);
        }
    }
    
    public function edit($id)
    {
        return $this->employeeRepo->edit($id);
    }

    public function update(EmployeeRequest $request, $id)
    {
        return $this->employeeRepo->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->employeeRepo->destroy($id);
    }
}
