<?php 
namespace PlexStats\Http\Controllers;

use PlexStats\History;

class UsersController extends Controller {

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
		$users = History::groupBy('user')->orderBy('user', 'asc')->get();

		return view('users.index', [
			'users' => $users
		]);
	}

	public function view($username) {
		$history = History::where('user', '=', $username)->orderBy('id', 'desc')->get();

		return view('users.view', [
			'history' => $history
		]);
	}

}
