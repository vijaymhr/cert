<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Feedback;
use App\Info;
use App\Iso;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $abouts= About::all();
        $infos=Info::all();
        $isos=Iso::all();
        return view('pages.index')->with ('abouts',$abouts)->with('infos', $infos)->with('isos', $isos);
    }
}
