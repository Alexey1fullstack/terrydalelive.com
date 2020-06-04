<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Exception;
use App\User;
use Auth;
use App\Setting;
use DB;
use Storage;

class SettingController extends Controller

{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function setting(){
       
        return view('setting',['active'=>5]);
    }

    public function storesetting(Request $request){

        $data = $request->all();
        $setting = Setting::first();

        $setting->site_name = $request->site_name;
        $setting->site_domain = $request->site_domain;
        $setting->site_email = $request->site_email;
        $setting->site_address1 = $request->site_address1;
        $setting->site_address2 = $request->site_address2;
        $setting->site_address3 = $request->site_address3;
        $setting->save();

        return redirect('/setting')->withSuccess("The site has been updated!");



    }

    public function update_logo (Request $request){
     
        $data = $request->all();

        $request->validate([
            'photo' => 'required',
            'photo.*' => 'mimes:jpg,png,jpeg,gif,svg:max:2048',
        ]);

        $setting = Setting::first();

        $logo_url = $setting->logo_url;

        if(Storage::exists('public/photos/'.$logo_url)){
            unlink(storage_path('app//public/photos/'.$logo_url));
        }
        $path = Storage::putFile('public/photos',$request->photo);
        $filter = explode('/',$path);
        $setting->logo_url = $filter[2];
        $setting->save();
        return redirect('/setting')->withSuccess("The site has been updated!");
    }

    public function loginUser(){
        $guard = null;
        if (Auth::check()) {
            return redirect()->route('new_card');

            
        } else {

             return redirect()->route('login');
            
        }

        

        
    }


}
