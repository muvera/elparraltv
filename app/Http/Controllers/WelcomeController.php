<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{


// exec('cd files; yes | ffmpeg -i source.mp3 -ss 60 -t 70 cropped.mp3 &');
// exec('cd files; yes | ffmpeg -i cropped.mp3 -af "afade=t=in:ss=0:d=4" fadein.mp3 &');
// exec('cd files; yes | ffmpeg -i fadein.mp3 -af "afade=t=out:st=65:d=5" final.mp3 &');

		return view('welcome');
	}

		public function facebook()
	{
		return view('facebook');
	}

		public function twitter()
	{
		return view('twitter');
	}

		public function instagram()
	{
		return view('instagram');
	}

}
