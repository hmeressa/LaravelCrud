<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Users extends Controller
{
    public function Home(){

        return view('Home');
    }
    public function showForm(){

        return view('Register');
    }

    public function store(Request $request){
        $requests = $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'username'=>'required',
            'mobno'=>'required',
            'address'=>'required',
        ]);

        $insert=new User();
        $insert->Firstname = $request->firstname;
        $insert->Lastname =  $request->lastname;
        $insert->Username = $request->username;
        $insert->Mobile = $request->mobno;
        $insert->Address=$request->address;

        $check=$insert->save();
        if($check)
        {
            return view('Register')->with('success',"successfully registered");
        }
            return view('Register')->with('error',"Not registered");
         }


    public function showUpdateForm($id){

        $insert=new User();
        $update_data=$insert::all()->where('id',$id);
        $data=$insert::orderBy('id','desc')->get();
        if($data){
        return view('/Update')->with('update_data',$update_data);
        }
    }


    public function Update(Request $request){
        $requests = $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'username'=>'required',
            'mobno'=>'required',
            'address'=>'required',
        ]);
        $id=$request->id;
        $insert=new User();
        $user=$insert::find($id);

        $user->Firstname = $request->firstname;
        $user->Lastname =  $request->lastname;
        $user->Username = $request->username;
        $user->Mobile = $request->mobno;
        $user->Address = $request->address;

        $check=$user->save();
        if($check)
        {
            return view('Update')->with('success',"successfully updated");
        }
            return view('Update')->with('error',"Not updated");
    }


    public function View(){
        $data = new User();
        $userData = $data::get();
        return view('/View')->with("datas",$userData);
    }


    public function Delete($id){
        $userId=new User();
        $deleteUser=$userId::find($id);
        $isDeleted=$deleteUser->delete();
        $data=$userId::orderBy('id','desc')->get();
        if($isDeleted){
            return view('/View')->with('success',"successfully deleted")->with('datas',$data);
         }
            return redirect()->back()->with('error',"Not deleted")->with('datas',$data);
       }
}



