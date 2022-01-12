<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::all();
        return view('staff.list', compact('staffs'));
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(CreateStaffRequest $request)
    {

        $staff = new Staff();
        $staff->id = $request->id;
        $staff->group = $request->group;
        $staff->name = $request->name;
        $staff->birthday = $request->birthday;
        $staff->gender = $request->gender;
        $staff->phone = $request->phone;
        $staff->cmnd = $request->cmnd;
        $staff->email = $request->email;
        $staff->address = $request->address;
        $staff->save();
        return redirect()->route('staffs.index');
    }
    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        return view("staff.update",compact("staff"));
    }

    public function update(UpdateStaffRequest $request,$id)
    {
        $staff = Staff::findOrFail($id);
        $staff->group = $request->group;
        $staff->name = $request->name;
        $staff->birthday = $request->birthday;
        $staff->gender = $request->gender;
        $staff->phone = $request->phone;
        $staff->CMND = $request->CMND;
        $staff->email = $request->email;
        $staff->address = $request->address;
        $staff->save();
        return redirect()->route("staffs.index");
    }

    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);
        $staff->delete();
        return redirect()->route("staffs.index");
    }

    public function search(Request $request)
    {
        $key = $request->search;
        $staffs = Staff::where("name",'like','%'.$key.'%')->get();
        return view('staff.list', compact('staffs'));
    }
}
