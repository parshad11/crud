<?php

namespace App\Http\Controllers;
Use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function loginpage(){
        return view('/Auth/login');
    }

       //
       function signuppage(){
        return view('/Auth/signup');
    }

    //
    function signupsubmit(Request $req)
    {
        $req->validate([
            'uname'=>'required|min:5|max:50',
            'email'=>'required|unique:users',
            'pswd'=>'required|min:8|max:50'
        ]);
     
       $users=new User;
       $users->name=$req->uname;
       $users->email=$req->email;
       $users->password=Hash::make($req->pswd);
       $users->save();
       return redirect('loginpage');
    }

    //
    function loginsubmit(Request $req)
    {
        $data= User::where(['email'=>$req->email])->first();
        if(!$data || !Hash::check($req->pswd, $data->password))
   {
       return "Email or password doesnt match";
   }
   elseif($data->role!='admin')
   {
   $req->session()->put('userdata',$data);
       return redirect('/');
   
   }
   else{
       $req->session()->put('admindata',$data);
       return redirect('admin');
   }
   }

   //

   function logoutsubmit(Request $req){
    $req->session()->forget('userdata');
    return redirect('/');
   }
   //
   function middlewareuser(){
       return view('post');
   }
}
