<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
	public function info()
	{
		$res = DB::select('select * from weixin_item');
		//var_dump($res);
	}
	
	public function contact(){
		return view('pages/contact');
	}
}