<?php

namespace App\Http\Controllers;
use App\About;
use App\Info;
use App\Iso;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {            $abouts= About::all();
        $infos=Info::all();
        $isos=Iso::all();
        return view('pages.index')->with ('abouts',$abouts)->with('infos', $infos)->with('isos', $isos); 
    }

    // public function contact()
    // {
    //     return view('pages.index')->with ('infos',$infos); 
    // }
}
