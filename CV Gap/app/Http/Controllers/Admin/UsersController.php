<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RecycleBinUser;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function new()
    {
        return view('wp.newUser');
    }
    public function create(Request $request)
    {
        $date = $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|unique:users",
            "mobile" => "required|max:11|string|unique:users",
            "username" => "required|max:255|string|unique:users",
            "userType" => "required",
        ]);
        $userPassword = $request->mobile.$request->username;
        User::create([
            'name' => $request->name , 
            'email' => $request->email , 
            'mobile' => $request->mobile , 
            'username' => $request->username , 
            'is_admin' => $request->userType ,
            'bio' => 'این یک بیوگرافی آزمایشی است.',
            'avatar' => '/images/avatar.png' ,
            'password' => Hash::make($userPassword),
        ]);
        alert()->success('', "کاربر جدید به اسم".'"'. $request->name .'"'."ایجاد شد")->persistent('باشه');
        return redirect()->back();
    }
    public function management()
    {
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $data= User::where('name', 'LIKE', "%$search%")->orWhere('username', 'LIKE', "%$search%")
            ->orWhere('email', 'LIKE', "%$search%")->orWhere('mobile', 'LIKE', "%$search%")->orWhere('bio', 'LIKE', "%$search%")->orderBy('id','DESC')->get();
           
        }
        else {
            $data= User::orderBy('id','DESC')->get();
        }
        
        return view('wp.managementUser',['data'=>$data]);
    }
    public function details($id)
    {
        $userDetails = User::find($id);
        return view('wp.detailsUser',['details'=>$userDetails]);
    }
    public function delete($id)
    {
        $user_delete = User::find($id);

        RecycleBinUser::create([
            'name' => $user_delete->name ,
            'email' => $user_delete->email ,
            'mobile' => $user_delete->mobile ,
            'username' => $user_delete->username ,
            'password' => $user_delete->password ,
            'is_admin' => $user_delete->is_admin ,
            'avatar' => $user_delete->avatar ,
            'bio' => $user_delete->bio ,
            'created_at' => $user_delete->created_at ,
            'updated_at' => $user_delete->updated_at ,
        ]);
        $user_delete->delete();
        alert()->success('', "کاربر با موفقیت حذف شد")->persistent('باشه');
        return redirect(route('user.management'));
        
    }

    public function edit($id)
    {
        $user_data = User::find($id);
        return view('wp.editUser',['user_data'=>$user_data]);
    }

    public function update(Request $request , $id)
    {
        $date = $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|unique:users,email,$id",
            "mobile" => "required|max:11|string|unique:users,mobile,$id",
            "username" => "required|max:255|string|unique:users,username,$id",
            "userType" => "required",
            "bio" => "required|string",
        ]);
        User::find($id)->update([
            'name' => $request->name , 
            'email' => $request->email , 
            'mobile' => $request->mobile , 
            'username' => $request->username , 
            'is_admin' => $request->userType , 
            'bio' => $request->bio , 
        ]);
        alert()->success('','اطلاعات کاربر بروزرسانی شد')->persistent('باشه');
        return redirect(route('user.management'));
    }
}
