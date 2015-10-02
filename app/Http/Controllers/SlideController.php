<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SlideController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $classList = File::allFiles("partials");
        rsort($classList);

        $yearList = [];
        foreach ($classList as $key => $value) {
            //利用斜線區隔
            $path = explode(DIRECTORY_SEPARATOR, strval($value));
            //取出 $path 最後一項，使用'.'分割取出第一項
            $name = explode('.', end($path));
            $yearList[$key] = $name[0];
        }

        return view('slides')->with("classList", $classList)->with("yearList", $yearList);
    }

}
