<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    //
    public function AllEmployee()
    {
        $employee = Employee::latest()->get();
        //folder view/backend/employee/all_employee.blade.php
        return view('backend.employee.all_employee', compact('employee'));
    } // end method AllEmployee()

    public function AddEmployee()
    {
        return view('backend.employee.add_employee');
    }


    public function StoreEmployee(Request $request)
    {

        // note: unique it will validate if the email already exist in the database

        $validateData = $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|unique:employees|max:200',
            'phone' => 'required|unique:employees|max:200',
            'address' => 'required|max:400',
            'salary' => 'required|max:200',
            'vacation' => 'required|max:200',
            'experience' => 'required',
            'image' => 'required',
        ],
            // below custom message for validation
        [
            'name.required' => 'This Employee Name Field is Required',
        ]

    );

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        // Image::make($image)->resize(300,300)->save('upload/employee/'.$name_gen);
        Image::make($image)->resize(300,300)->save('upload/employee/'.$name_gen); /** image Intervention package */
        $save_url = 'upload/employee/'.$name_gen;

        $save_url = 'upload/employee/'.$name_gen;

        // laravel eloquent method in saving data to database
        Employee::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'experience' => $request->experience,
            'image' => $save_url,
            'salary' => $request->salary,
            'city' => $request->city,
            'created_at' => Carbon::now(), /** present date */

        ]);

        $notification = array(
            'message' => 'Employee Inserted Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('all.employee')->with($notification);

    }

    public function EditEmployee($id){

        $employee = Employee::findOrFail($id);

        return view('backend.employee.edit_employee', compact('employee'));

    }


    public function DeleteEmployee($id){
        $employee_img = Employee::findOrFail($id);
        $img = $employee_img->image;
        unlink($img);
        Employee::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Employee Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } // End Method

}
