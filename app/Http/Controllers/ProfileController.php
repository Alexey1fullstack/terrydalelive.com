<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Rules\MatchOldPassword;
use Exception;


class ProfileController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        return view('profile',['user'=>$user]);
    }

    public function store(Request $request){
        $info = $request->all();
        unset($info['_token']);
        $update_profile = User::where('id',Auth::user()->id)->update($info);
        if($update_profile){
            return redirect()->back()->withSuccess('The profile has been updated successfully!');
        } else {
            return redirect()->back()->withSuccess('The profile has been updated successfully!');
        }
    }

    Public function password_update(Request $request){



        if (Hash::check($request->current_password, Auth::user()->password))
        {
            $current = User::where('id',Auth::user()->id)->first();
            $current->password = Hash::make($request->new_password);
            $current->save();
            return redirect()->back()->withSuccess('The password has been updated successfully!');
        } else {
            return redirect()->back()->withError('It does not match current password!');
        }


        // if( $validator1->fails()){

        //     return redirect()->back()->withSuccess('The password has been updated successfully!');
        // } else {
        //     return redirect()->back()->withError('It does not match current password!');
        // }

    }



    public function getUsers(Request $request){
      $users = User::paginate(config('perPage', 10));
      return view('users', ['users' => $users]);
    }


}
