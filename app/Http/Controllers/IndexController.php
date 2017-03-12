<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Request\RegisterBook;
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
		$data_city = DB::connection('mysql2')->table('city')->lists('id','name_vi');
		return view('pages.register',compact('data_city'));
	}

	public function postRegisterBook(RegisterBook $request){
		$data = [
			'name'=>$request->input('name'),
			'phone'=>$request->input('phone'),
			'email'=>$request->input('email'),
			'id_city'=>$request->input('id_city'),
			'id_center'=>$request->input('id_center'),
			'study_ila'=>$request->input('study_ila'),
			'message'=>$request->input('message'),
		]
		DB::connection('mysql')->table('')->insert($data);

		return redirect()->route('thanks');
	}

	public function getThanks(){
		return view('pages.thankyou');
	}

	public function ajaxCenter(Request $request){
		if($request->ajax()){
			$id_city = $request->input('id');
			$data_center = DB::connection('mysql2')->table('centers')->lists('id','name_vi');
			return response()->json(['rs'=>$data_center]);
		}
	}



}
