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

class CardsyncController extends Controller

{
    public function __construct()
    {
       
    }

    public function landingpage(){
        $all = Card::count();
        $inactive = Card::where('status','1')->count();
        $active = Card::where('status','0')->count();        $limit = $active - round($active/2);
        $cards1 = Card::where('status','0')->orderby('updated_at','desc')->take(round($active/2))->get();
        $cards2 = Card::where('status','0')->orderby('updated_at','desc')->skip(round($active/2))->take($limit)->get();
        $cards3 = Card::where('status','1')->orderby('updated_at','desc')->get();
        $assettype = Assettype::orderby('icon_sort','asc')->get();
       
        return view('home',['cards1'=>$cards1,'cards2'=>$cards2,'cards3'=>$cards3,'active'=>$active,'inactive'=>$inactive,'assettype'=>$assettype,'loading_time'=>time()]);
    }
    
    public function sync(Request $request){

        $loading_time = date('Y-m-d H:i:s',$request->loading_time);
        $card1 = Card::where('status','0')->orderby('updated_at','desc')->first();
        $card2 = Card::where('status','1')->orderby('updated_at','desc')->first();
        $nodeal = Card::where('status','2')->orderby('updated_at','desc')->first();
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
        } else if(isset($nodeal) &&  strtotime($nodeal->updated_at) > $request->loading_time){
            $nodeal_collection = Card::where('status','2')->where('updated_at','>',$loading_time)->orderby('updated_at','asc')->get();
            return response()->json(array('changed'=>'nodeal','flag'=>true,'cards'=>$nodeal_collection,'loading_time'=>strtotime($nodeal->updated_at)));
        } 
         else {
            return response()->json(array('changed'=>'No modification!','flag'=>false));
        }
    }
    
 function findemail(Request $request){
     
       
        $API_KEY = "lbNsRr1B-6smFMduC";
        $SECRET_KEY ="UJmHVMofWwcZKz1r-E7hgewJ1FH4KZp8d";
        $last_name = $request->last_name;
        $first_name = $request->first_name;
        $company_domain = $request->domain;
        $url ="https://findthat.email/api_json/find_email";
        $data = array(
            'api_key'=>$API_KEY,
            'secret_key' =>$SECRET_KEY,
            'first_name' =>$first_name,
            'last_name' =>$last_name,
            'company_domain' =>$company_domain,
        );
        $payload = json_encode($data);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json'
        ));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec( $ch );

        // If no response was received from PayPal there is no point parsing the response
        if( ! $response )
            die( 'Newwork Error: ' . curl_error( $ch ) . '(' . curl_errno( $ch ) . ')' );

        curl_close( $ch );
        $result =  json_decode($response,true);
        return $result;
    }





}
