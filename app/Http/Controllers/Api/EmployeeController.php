<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

use function PHPSTORM_META\type;

class EmployeeController extends Controller
{
    public function index() {
        $employee = Employee::all();
        return response()->json(
            [
                    "message" => "Success",
                    "data" => $employee,
            ],
            200
        );
    }

    public function detail($id) {
        $employee = Employee::find($id);
        return response()->json(
            [
                "message" => "Success",
                "data" => $employee,
            ]
            );
    }

    public function add(Request $request) {
        if(!$request->name || !$request->age || !$request->position) {
            return response()->json(["error" => "name age and position are optional is required"], 400);
        }

        $employee = Employee::create([
            "name" => $request->name,
            "age" => $request->age,
            "position" => $request->position,
        ]);

        return response()->json(
            [
                    "message" => "Success",
                    "data" => $employee,
                ],
            200
        );
    }

    public function update(Request $request, $id) {
        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->age = $request->age;
        $employee->position = $request->position;
        $employee->save();
        return response()->json(
            [
                    "message" => "Success",
                    "data" => $employee,
                ],
            200
        );

    }

    public function delete(Request $request, $id) 
    {
        $employee = Employee::find($id);
        $employee->delete();
        return response()->json(
            [
                    "message" => "Success",
                    "data" => "deleted!",
                ],
            200
        );
    }
}
