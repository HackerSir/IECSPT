<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class IECSController extends Controller
{
    public function getIndex()
    {
        // TODO: Get data and compact with view
        // Get Time
        $year = Carbon::now()->year - 1911;
        $month = Carbon::now()->month;
        if ($month < 8) {
            $year -= 1;
        }

        return view('index', compact('year'));
    }

    public function getSlides()
    {
        // TODO
    }
}
