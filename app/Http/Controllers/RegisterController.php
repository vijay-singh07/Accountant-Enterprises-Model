<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\accountant;
use Hash;
use Session;

class RegisterController extends Controller
{
    public function login(){
        return view ('auth.login');
    }

    public function register(){
        return view ('auth.register');
    }

    public function registerUser(Request $request,Accountant $accountant){
        $request->validate([
        'fname'=>'required',
        'lname'=>'required',
        'mail'=>'required|email|unique:accountants',
        'phone'=>'required|max:10',
        'password'=>'required|confirmed|min:8|max:12',
        ]);
        $Accountant= new Accountant();
        $Accountant->fname = $request->fname;
        $Accountant->lname = $request->lname;
        $Accountant->mail = $request->mail;
        $Accountant->phone = $request->phone;
        $Accountant->password = Hash::make($request->password);
        $res= $Accountant-> save();
        if ($res){
            return redirect('login');
        } else {
            return back()->with('fail','Something went wrong.');
        }
    }
    
    public function loginUser(Request $request){
            $request->validate([
                'mail'=>'required|email',
                'password'=>'required|min:8|max:12',
                ]);
                $accountant = Accountant:: where('mail','=',$request->mail)->first();
                if($accountant){
                    if (Hash::check($request->password, $accountant->password)){
                        $request->session()->put('loginId',$accountant->id);
                        return redirect('home');
                    }else{
                        return back()->with('fail','The password does not matches');
                    }
                }else{
                    return back()->with('fail','This mail is not registered');
                }
    }

    function dashboard()
    {
        return view('dashboard.welcome');
    }

    public function list(){
        $accountant_data = Accountant::all();
        return view('dashboard.userListing', ['users' => $accountant_data]);
    }

    function logout()
    {
        if(session()->has('loginId'))
        {
            session()->pull('loginId');
            return redirect('login');
        }
    }
}
