<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Contracts\QuestionContract;
use DB;
use App\Models\Question;
class QuestionController extends Controller
{
	public function store(){
		//$data = collect($request->except('_token'));
		extract($_REQUEST);
		$fatch = DB::table('question')
			->insertGetId(['wzc1'=>$wzc1??"",'wzc2'=>$wzc2??"",'wzc3'=>$wzc3??"",'wzc3a'=>$wzc3a??"",'wzc4'=>$wzc4??"",'wzc5'=>$wzc5??"",'wzc5a'=>$wzc5a??"",'fnl'=>$fnl??"",'fnl1'=>$fnl1??"",'fnl2'=>$fnl2??"",'fnl3'=>$fnl3??"",'fnl4'=>$fnl4??"",'fnl5'=>$fnl5??"",'fnl6'=>$fnl6??"",'fnl7'=>$fnl7??"",'fnl8'=>$fnl8??"",'fnl9'=>$fnl9??"",'fnl10'=>$fnl10??"",'fnl11'=>$fnl11??"",'wzc6'=>$wzc6??"",'wzc7'=>$wzc7??"",'fnl12'=>$fnl12??"",'fnl13'=>$fnl13??"",'fnl14'=>$fnl14??"",'fnl15'=>$fnl15??"",'fnl16'=>$fnl16??"",'wzc8'=>$wzc8??"",'fnbd'=>$fnbd??"",'fnbd1'=>$fnbd1??"",'fnl17'=>$fnl17??"",'fnl18'=>$fnl18??"",'wzc10'=>$wzc10??"",'wzc11'=>$wzc11??"",'wzc12'=>$wzc12??"",'wzc13'=>$wzc13??"",'wzc14'=>$wzc14??"",'wzc15'=>$wzc15??"",'wzc16'=>$wzc16??"",'wzc17'=>$wzc17??"",'wzc18'=>$wzc18??"",'wzc19'=>$wzc19??"",'wzc20'=>$wzc20??"",'fnl19'=>$fnl19??"",'wzc21'=>$wzc21??"",'fnl20'=>$fnl20??"",'wzc22'=>$wzc22??"",'fnl21'=>$fnl21??"",'fnl22'=>$fnl22??"",'fnl23'=>$fnl23??"",'fnl24'=>$fnl24??"",'fnl25'=>$fnl25??"",'fnl26'=>$fnl26??""]);
		$id='id';
		if($fatch){
            //return view('question.show',$id);
            $data = DB::table('question')->where('id',$fatch)->first();
			 $x=['data'=>$data];
			 return view("question.print",$x);
        }
        else{
            echo "<script>alert('Sorry Data Not Added');</script>";
            return back();
        }
		
	}

public function show(){
	
	
}
// public function show(Request $r){
// 	$id = $r;
// 	$data = DB::table('question')->where('id',$id)->first();

		
// 	 $x=['data'=>$data];
// 	 return view("question.print",$x);
	
// }
}
