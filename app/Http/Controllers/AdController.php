<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\AdController;
use DB;
use App\Models\ad;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;


class AdController extends Controller
{
    public function adlist(Request $request){
        $userid_list=Auth::id();
        if ($userid_list==2){
            $ads = collect(DB::table('ad')->get());
        }
        else{
            $ads = collect(DB::table('ad')->where('user_id',$userid_list)->get());
        }
        return view ('adlist')->with('ads',$ads);
    }

    public function updateget(Request $request){
        $id=$request->id;
        //error_log($id);
        $uads = collect(DB::table('ad')->where('id',$id)->get());
        return view ('editad')->with('uads',$uads);
        
    }

    public function updatepost(Request $request , $id){
        $id=$request->id;
        $u_ad_type=request('ad_type');
        $u_heading=request('heading');
        $u_desc=request('desc');
        $u_price=request('price');

        error_log($id);
        error_log($u_ad_type);
        error_log($u_heading);
        error_log($u_desc);
        error_log($u_price);

        $uad = ad::find($id);
        $uad->ad_type = request('ad_type');
        $uad->heading = request('heading');
        $uad->desc = request('desc');
        $uad->price = request('price');
        $uad->save();
        
        return redirect('/ad/list');
    }


    public function store(Request $request) {
        $ads = new ad();
        $ads->user_id = $request->user()->id;
        $ads->ad_type = request('ad_type');
        $ads->heading = request('heading');
        $ads->desc = request('desc');
        $ads->price = request('price');
        $ads->save();
        return redirect('/ad/list');
    }

    public function delete(Request $request){
        $id=$request->id;
        DB::table('ad')->where('id', $id)->delete();
        return view('adlist');
    }

}

