<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Exception;
use App\User;
use App\Card;
use App\Cardlog;
use App\Msg;
use App\Assettype;
use Auth;
use App\Setting;
use DB;
use Storage;
use Illuminate\Support\Facades\Hash;

class CardController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('auth', ['except' => [
            'sync'
        ]]);

    }

    public function firstpage(){
        if(Auth::user()->permission == 1){
            return redirect()->name('cardlist');
        } else {
            return view('errors.nopermission');
        }
    }


    public function index(){
        $assettype = Assettype::orderby('name','asc')->get();
        return view('cards.cindex',['active'=>1,'assettype'=>$assettype]);
    }

    public function create(Request $request){
        $new_card = $request->all();

        $save = Card::create($new_card);
        if($save){

            return redirect()->back()->withSuccess("The new card has been created succesfully.");
        } else {
            return redirect()->back()->withError("Fault! Please check Network!");
        }
    }

    public function list(){
        $cards = Card::orderby('updated_at','desc')->get();
        $assettype = Assettype::orderby('name','asc')->get();
        return view('cards.clist',['cards'=>$cards,'active'=>2,'assettype'=>$assettype]);
    }

    public function history(){
        $cards = Card::onlyTrashed()->orderby('deleted_at','desc')->get();
        return view('cards.history',['cards'=>$cards,'active'=>3]);
    }

    public function create_user(Request $request)
    {   
            if(User::where('email',$request->email)->count() > 0 ){
                return response()->json(array('success'=>false,'message'=>"The email already is registered"));
            
            }  else {
                $user =  User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'location'=>$request->location,
                    'phone_num' =>$request->phone_num,
                ]);    
                return response()->json(array('success'=>true));

            }        
       
    }


    public function destroy(Request $request){
        if(Card::destroy($request->record_id)){
            return response()->json(array('success'=>true));
        } else {
            return response()->json(array('success'=>false));
        }
    }

    public function change_status(Request $request){
        $old_status = Card::where('id',$request->cardid)->first();
        if(Card::where('id',$request->cardid)->update(['status'=>$request->status])){
            return response()->json(array('success'=>true));
        } else {
            return response()->json(array('success'=>false));
        };
    }

    public function update(Request $request){
        $data = $request->all();
        $card_id = $request['card_id'];
        unset($data['_token']);
        unset($data['card_id']);
        if(isset($data['closed'])){
            $data['updated_at']=$data['closed'];
            unset($data['closed']);
        }
        if(Card::where('id',$card_id)->update($data)){
            return response()->json(array('success'=>true));
        } else {
            return response()->json(array('success'=>false));
        }
    }

    public function update_on_list(Request $request){
        $data = $request->all();
        unset($data['_token']);
        if(Card::create($data)){
            return response()->json(array('success'=>true));
        } else {
            return response()->json(array('success'=>false));
        }
    }


    public function forever($cardid){
        $card = Card::where('id',$cardid)->forceDelete();

        return redirect()->back()->withSuccess('Sucess!')->with('alert','The card has been deleted forever.');
    }

    public function restore($cardid){
        Card::withTrashed()->find($cardid)->restore();

        return redirect()->back()->withSuccess('Sucess!')->with('alert','The card has been restored.');
    }

    public function messages(){
        $messages = MSG::orderby('updated_at','asc')->get();
        return view('message.index',['messages' => $messages]);
    }

    public function message_destroy(Request $request){
        $messages = MSG::destroy($request->record_id);
        return response()->json(array('success'=>true));
    }

}
