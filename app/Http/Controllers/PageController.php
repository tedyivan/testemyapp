<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$lessons = ['my first lesson','my second lesson','my third lesson'];
		$name= 'Ivan';
		//como passar dados para uma pagina
		return view ('home',['name'=>$name,'lessons'=>$lessons]);
	}

	public function about(){

		return view ('about');
	}

}
