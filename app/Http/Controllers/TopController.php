<?php 
namespace PlexStats\Http\Controllers;

class TopController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index() {
		return view('welcome');
	}

}
