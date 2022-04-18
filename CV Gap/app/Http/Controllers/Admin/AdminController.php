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

    public function profile()
    {
        return view("wp.profile");
    }
    public function update(Request $request, $id)
    {

        
        
        $date = $request->validate([
            "name" => "required|string|max:255",
            "bio" => "required|string",
            "email" => "required|email|unique:users,email,$id",
            "mobile" => "required|max:11|string|unique:users,mobile,$id",
            "username" => "required|max:255|string|unique:users,username,$id",
            "avatar" => "image|mimes:jpg,png,jpeg|max:2048",
        ]);
        if (isset($request->avatar)) {
            $avatar = $request->file('avatar');
            $avatar->move(public_path('images/upload'), date('Y') . '_' . date('M') . '_' . $avatar->getClientOriginalName());
            $request->avatar = '/images/upload' . '/' . date('Y') . '_' . date('M') . '_' . $avatar->getClientOriginalName();
        }
        else if (empty($request->avatar)) {
            $request->avatar = $request->hidden_src;
        }
        $user = User::find($id);
        $user->update([
            "name" => $request->name,
            "email" =>  $request->email,
            "bio" =>  $request->bio,
            "mobile" =>  $request->mobile,
            "username" => $request->username,
            "avatar" => $request->avatar,
        ]);
        alert()->success('', 'اطلاعات بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }
}
