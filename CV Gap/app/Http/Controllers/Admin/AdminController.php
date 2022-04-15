<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view("wp.panel");
    }

    public function show_profile()
    {
        return view("wp.profile");
    }
    public function profile_update(Request $request, $id)
    {


        if (empty($request->avatar)) {
            $request->avatar = $request->hidden_src;
        }
        $date = $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|unique:users,email,$id",
            "mobile" => "required|max:11|string|unique:users,mobile,$id",
            "username" => "required|max:255|string|unique:users,username,$id",
            "avatar" => "image|mimes:jpg,png,jpeg|max:2048",
        ]);
        $avatar = $request->file('avatar');
        $avatar->move(public_path('images/upload/') , $avatar->getClientOriginalName());
        $request->avatar = asset('/images/upload').'/'.$avatar->getClientOriginalName();
        $user = User::find($id);
        $user->update([
            "name" => $request->name,
            "email" =>  $request->email,
            "mobile" =>  $request->mobile,
            "username" => $request->username,
            "avatar" => $request->avatar,
        ]);
        alert()->success('', 'اطلاعات بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }
}
