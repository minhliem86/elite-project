<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterBook;
use DB;
class IndexController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('pages.index');
	}

	public function registerBook(){
		 $data_city = DB::connection('mysql2')->table('city')->select('id','name')->whereIn('id',['20','48','1','39','49','50'])->lists('name','id');
		return view('pages.register',compact('data_city'));
	}

	public function postRegisterBook(Request $request){
		$data = [
			'fullname'=>$request->input('fullname'),
			'phone'=>$request->input('phone'),
			'email'=>$request->input('email'),
			'id_city'=>$request->input('id_city'),
			'id_center'=>$request->input('id_center'),
			'study_ila'=>$request->input('study_ila'),
			'message'=>$request->input('message'),
		];
		DB::connection('mysql')->table('lp_register_book_elite_2017')->insert($data);
		return redirect()->route('thankyou');
	}

	public function getThanks(){
		return view('pages.thankyou');
	}

	public function ajaxCenter(Request $request){
		if($request->ajax()){
			$id_city = $request->input('id');
			$data_center = DB::connection('mysql2')->table('center')->select('id','name_vi')->where('id_city',$id_city)->lists('name_vi','id');
			$view = view('ajax.center',compact('data_center'))->render();
			return response()->json(['rs'=>$view]);
		}
	}

	public function postTest(Request $request){
		return "done";
	}



}
