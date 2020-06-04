<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Exception;
use Hash;

class UserController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function users(){
        $users = User::get();
        return view('user.userlist',['active'=>'4','users'=>$users]);
    }

    public function getUsers(Request $request){
      $users = User::paginate(config('perPage', 10));
      return view('users', ['users' => $users]);
    }

    public function member(Request $request){

        $old_status = User::where('id',$request->uid)->first();
        if($old_status->member == 1){
            if(User::where('id',$request->uid)->update(['member'=>0])){
                return response()->json(array('success'=>true,'status'=>0));
            } else {
                return response()->json(array('success'=>false));
            };

        } else {
            if(User::where('id',$request->uid)->update(['member'=>1])){
                return response()->json(array('success'=>true,'status'=>1));
            } else {
                return response()->json(array('success'=>false));
            };
        }

    }

    public function permission(Request $request){

        $old_status = User::where('id',$request->uid)->first();
        if($old_status->permission == 1){
            if(User::where('id',$request->uid)->update(['permission'=>0])){
                return response()->json(array('success'=>true,'status'=>0));
            } else {
                return response()->json(array('success'=>false));
            };

        } else {
            if(User::where('id',$request->uid)->update(['permission'=>1])){
                return response()->json(array('success'=>true,'status'=>1));
            } else {
                return response()->json(array('success'=>false));
            };
        }

    }

    public function create(Request $request) {
      $name = $request->input('name');
      $password = $request->input('password');
      $password_enc = Hash::make($password);
      $user = new User();
      $user->name = $name;
      $user->password = $password_enc;
      try{
        $user->save();
        return redirect()->back()->withSuccess("New user " . $name . " has been added");
      }
      catch(Exception $e)
      {
        return redirect()->back()->withError("New user " . $name . " hasn't been added");
      }
    }

    public function edit(Request $request) {
      $id = $request->input('id');
      $name = $request->input('name');
      $password = $request->input('password');
      $password_enc = Hash::make($password);
      $user = User::find($id);
      $user->name = $name;
      $user->password = $password_enc;
      try{
        $user->save();
        return redirect()->back()->withSuccess("New user " . $name . " has been changed");
      }
      catch(Exception $e)
      {
        return redirect()->back()->withError("New user " . $name . " hasn't been changed");
      }
    }

    public function user_delete(Request $request){
        if(User::destroy($request->record_id)){
            return response()->json(array('success'=>true));
        } else {
            return response()->json(array('success'=>false));
        }
    }

    public function delete(Request $request) {
      $id = $request->input('id');
      $user = User::find($id);
      $name = $user->name;
      $user->delete();
      return redirect()->back()->withSuccess("New user " . $name . " has been deleted");
    }
}
