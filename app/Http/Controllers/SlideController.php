<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SlideController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

        $year = (int)date("Y",time());
        $month = (int)date("M",time()) ;
        if($month < 8)
            $year -= 1;
        $year -= 1911;
        $classList = File::allFiles("partials");
        $classList = array_reverse($classList);
        $yearList = [];
        foreach($classList as $key => $value){
            $yearList[$key] = str_replace('partials'.DIRECTORY_SEPARATOR,'',str_replace('.html','',$value));
        }

		return view('slides') -> with("classList", $classList) -> with("yearList", $yearList);
	}

}
