<?php 
namespace PlexStats\Http\Controllers;

use PlexStats\History;

class HistoryController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {

	}

	/**
	 * 
	 *
	 * @return Response
	 */
	public function index() {
		$items = History::orderBy('id', 'desc')->get();

		return view('history.index', [
			'items' => $items
		]);
	}

	/**
	 * View the details of a play.
	 * @author dowilcox <dowilcox@umflint.edu>
	 * @date   2014-12-22
	 * @param  int      The ID of the history item.
	 * @return Response
	 */
	public function view($id) {
		$item = History::find($id);
		$views = History::where('ratingKey', '=', $item->ratingKey);

		return view('history.view', [
			'item' => $item,
			'views' => $views
		]);
	}

}
