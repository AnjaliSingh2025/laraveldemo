<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class registrationcontroller extends Controller
{
    public function login(){
        return view('loginform');

    }
    public function register(){
        return view('register');
    }
    public function registeruser(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'email' => 'required|email|unique:students,email',
                // 'password'=>'required|confirmed',
                // 'password_confirmation'=>'required'
                'password'=>'required',
                'password_confirmation'=>'required|same:password'

            ]
    );
      $students=new Students;
      $students->name =$request["name"];
      $students->email =$request["email"];
      $students->age =$request["age"];
      $students->detail =$request["detail"];
      $students->password =bcrypt($request["password"]);
      $students->save();
      session()->flash('success', 'Data saved successfully!');

      return redirect()->route('users');;
    }
    public function usersview(){
        $students=Students::all();
        // echo"<pre>";
        // print_r($students->toArray());
        return view('users',compact('students'));
    } 
    public function delete($id){
        $students=Students::find($id);
        if(!is_null($students)){
            $students->delete();
            session()->flash('success', 'Data deleted successfully!');
        }
    }
    public function update($id){
    }
}
