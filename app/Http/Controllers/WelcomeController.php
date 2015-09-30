<?php namespace App\Http\Controllers;

use DOMDocument;
use Illuminate\Support\Facades\File;
use Yangqi\Htmldom\Htmldom;

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
     */
	public function __construct()
	{
		//$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $year = (int)date("Y",time());
        $month = (int)date("m",time()) ;
        if($month < 8)
            $year -= 1;
        $year -= 1911;
        $classList = File::get('partials' . DIRECTORY_SEPARATOR . $year . '.html');
        return view('welcome') -> with("classList", $classList);
	}

}
