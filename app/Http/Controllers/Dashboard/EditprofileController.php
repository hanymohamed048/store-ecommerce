<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class EditprofileController extends Controller
{
    public function edit(){
        $data=Admin::find(auth('admin')->user()->id);
        return view('dashboard.includes.editprofile',compact('data'));
    }
    public function updateprofile(ProfileRequest $request){
        $admin=Admin::find(auth('admin')->user()->id);
        if($request->filled('password'))
        {
             $request->merge(['password'=>bcrypt($request->password)]);
        }
        unset($request['id']);
        unset($request['password_confirmation']);
        $admin->update($request->all());
        return redirect()->back()->with(['success'=>__('admin/sidebar.success')]);

    }
}
