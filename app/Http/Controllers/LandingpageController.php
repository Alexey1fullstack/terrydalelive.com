<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Exception;
use App\User;
use App\Card;
use App\Assettype;
use Auth;
use App\Setting;
use DB;
use Storage;

class LandingpageController extends Controller

{
    public function __construct()
    {
       
    }
    
    public function about(){
        return view('about');
    }

    public function landingpage(){
        $all = Card::count();
        $inactive = Card::where('status','1')->count();
        $active = Card::where('status','0')->count();        $limit = $active - round($active/2);
        $active_cards = Card::where('status','0')->orderby('updated_at','desc')->get();
        $cards1 = Card::where('status','0')->orderby('updated_at','desc')->take(round($active/2))->get();
        $cards2 = Card::where('status','0')->orderby('updated_at','desc')->skip(round($active/2))->take($limit)->get();
        $cards3 = Card::where('status','1')->orderby('updated_at','desc')->get();
        $assettype = Assettype::orderby('icon_sort','asc')->get();
       
        return view('home',['cards1'=>$cards1,'cards2'=>$cards2,'cards3'=>$cards3,'active'=>$active,'inactive'=>$inactive,'assettype'=>$assettype,'loading_time'=>time(),'active_cards'=>$active_cards]);
    }
    
    public function sync(Request $request){

        $loading_time = date('Y-m-d H:i:s',$request->loading_time);
        $card1 = Card::where('status','0')->orderby('updated_at','desc')->first();
        $card2 = Card::where('status','1')->orderby('updated_at','desc')->first();
        // echo $card1->updated_at;
        // echo $card2->updated_at;
        
        // $loading_time = date('Y-m-d h:i:s',$request->lading_time); 
       // echo $loading_time;
        
        if(isset($card1) &&  strtotime($card1->updated_at) > $request->loading_time  && isset($card2) &&  strtotime($card2->updated_at) > $request->loading_time ){
            $cards1 = Card::where('status','0')->where('updated_at','>',$loading_time)->orderby('updated_at','asc')->get();
            $cards2 = Card::where('status','1')->where('updated_at','>',$loading_time)->orderby('updated_at','asc')->get();
            $loading_time = (strtotime($card1->updated_at) > strtotime($card2->updated_at))?strtotime($card1->updated_at):strtotime($card2->updated_at);
            return response()->json(array('changed'=>'all','flag'=>true,'cards1'=>$cards1,'cards2'=>$cards2,'loading_time'=>$loading_time));
        }
         else if( isset($card1) &&  strtotime($card1->updated_at) > $request->loading_time ) {
            $cards1 = Card::where('status','0')->where('updated_at','>',$loading_time)->orderby('updated_at','asc')->get();
            return response()->json(array('changed'=>'active','flag'=>true,'cards'=>$cards1,'loading_time'=>strtotime($card1->updated_at)));

        } else if(isset($card2) &&  strtotime($card2->updated_at) > $request->loading_time){
            $cards1 = Card::where('status','1')->where('updated_at','>',$loading_time)->orderby('updated_at','asc')->get();
            return response()->json(array('changed'=>'inactive','flag'=>true,'cards'=>$cards1,'loading_time'=>strtotime($card2->updated_at)));
        }  else {
            return response()->json(array('changed'=>'No modification!','flag'=>false));
        }
    }




}
