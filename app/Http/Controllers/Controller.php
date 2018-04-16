<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	/* Format */
	function travelquote(Request $req)
	{
		$protection = $req->input('protection');
		$fullname = $req->input('fullname');
		$persons = $req->input('persons');
		$number = $req->input('number');
		$email = $req->input('email');
		$destination = $req->input('destination');
		$howlong = $req->input('howlong');
		
		$data = array('protection'=>$protection,"fullname"=>$fullname,"persons"=>$persons,"number"=>$number,"email"=>$email,"destination"=>$destination,"howlong"=>$howlong);
		
		DB::table('travelquote')->insert($data);
		
		return redirect()->guest('sukses');
	}
	
	function carquote(Request $req)
	{
		$fullname = $req->input('fullname');
		$age = $req->input('age');
		$phonenumber = $req->input('phonenumber');
		$email = $req->input('email');
		$manufacturer = $req->input('manufacturer');
		$model = $req->input('model');
		$registrationyear = $req->input('registrationyear');
		
		$data = array('fullname'=>$fullname,"age"=>$age,"phonenumber"=>$phonenumber,"email"=>$email,"manufacturer"=>$manufacturer,"model"=>$model,"registrationyear"=>$registrationyear);
		
		DB::table('carquote')->insert($data);
		
		return redirect()->guest('sukses');
	}
	
	function lifequote(Request $req)
	{
		$protection = $req->input('protection');
		$fullname = $req->input('fullname');
		$age = $req->input('age');
		$phonenumber = $req->input('phonenumber');
		$email = $req->input('email');
		$products = $req->input('products');
		
		$data = array('protection'=>$protection,"fullname"=>$fullname,"age"=>$age,"phonenumber"=>$phonenumber,"email"=>$email,"products"=>$products);
		
		DB::table('lifequote')->insert($data);
		
		return redirect()->guest('sukses');
	}
	
	function housequote(Request $req)
	{
		$sortproperty = $req->input('sortproperty');
		$typeproperty = $req->input('typeproperty');
		$whenbuilt = $req->input('whenbuilt');
		$postcode = $req->input('postcode');
		$fullname = $req->input('fullname');
		$yourage = $req->input('yourage');
		$phonenumber = $req->input('phonenumber');
		$email = $req->input('email');
		
		$data = array('sortproperty'=>$sortproperty,"typeproperty"=>$typeproperty,"whenbuilt"=>$whenbuilt,"postcode"=>$postcode,"fullname"=>$fullname,"yourage"=>$yourage,"phonenumber"=>$phonenumber,"email"=>$email);
		
		DB::table('housequote')->insert($data);
		
		return redirect()->guest('sukses');
	}
	
	function contact(Request $req)
	{
		$fullname = $req->input('fullname');
		$phonenumber = $req->input('phonenumber');
		$email = $req->input('email');
		$emailtitle = $req->input('emailtitle');
		$mesazhi = $req->input('mesazhi');
		
		$data = array('fullname'=>$fullname,"phonenumber"=>$phonenumber,"email"=>$email,"emailtitle"=>$emailtitle,"mesazhi"=>$mesazhi);
		
		DB::table('contact')->insert($data);
		
		return redirect()->guest('sukses');
	}
	
	/* Get Datas */
	function getDataKontaktet()
	{	
		$data['data'] = DB::table('contact')->get();
		
		if(count($data) > 0)
		{
			return view('dashboard.contact',$data);
		}
		else
		{
			return view('dashboard.contact');
		}
	}
	
	function getDataHouseQuote()
	{	
		$data['data'] = DB::table('housequote')->get();
		
		if(count($data) > 0)
		{
			return view('dashboard.housequote',$data);
		}
		else
		{
			return view('dashboard.housequote');
		}
	}
	
	function getDataCarQuote()
	{	
		$data['data'] = DB::table('carquote')->get();
		
		if(count($data) > 0)
		{
			return view('dashboard.carquote',$data);
		}
		else
		{
			return view('dashboard.carquote');
		}
	}
	
	function getDataLifeQuote()
	{	
		$data['data'] = DB::table('lifequote')->get();
		
		if(count($data) > 0)
		{
			return view('dashboard.lifequote',$data);
		}
		else
		{
			return view('dashboard.lifequote');
		}
	}
	
	function getDataTravelQuote()
	{	
		$data['data'] = DB::table('travelquote')->get();
		
		if(count($data) > 0)
		{
			return view('dashboard.travelquote',$data);
		}
		else
		{
			return view('dashboard.travelquote');
		}
	}
	
}
