<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use App\Song;


class SongsController extends Controller {

	//
	public function _construct(Song $song)
	{

		$this->song = $song;
	}


	public function index(Song $song){

		$songs = $song->get();
		//dd($songs);
		return view ('songs.index',compact('songs'));
	}

	public function show($slug)
	{
		//pega o primeiro com o slug
		$song = Song::whereSlug($slug)->first();

		return view('songs.show',compact('song'));
	}

	
	public function edit($slug){

		//return 'Edit  the song with a title  ' . $song->title;
		$song = Song::whereSlug($slug)->first();
		
		return view('songs.edit',compact('song'));
	}

	public function update($slug, Request $request){

		//dd(\Request::input());
		$song = Song::whereSlug($slug)->first();

		//$song->title = $request->get('title');

		//$song->fill(['title'=>$request->get('title')])->save();
		//tambem serve
		$song->fill($request->input())->save();	


		//$song->save();

		return redirect('songs');

	}

}
