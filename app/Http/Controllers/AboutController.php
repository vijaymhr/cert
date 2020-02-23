<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{

/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except'=>[ 'show']]);
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts= About::all();

        return view ('admin/pages.about')->with('abouts', $abouts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $abouts= About::all($id);

        return view ('admin/pages.about')->with('abouts', $abouts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about= About::find($id);
        return view ('admin/pages/editAbout')->with ('about',$about);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
        [
            'author'=>'required',
            'ourclient'=>'required',
           

        ]);


        // if($request->hasfile('aboutImage')){
        //     //get filename with the extension
        //     $filenameWithExt = $request->file('aboutImage')->getClientOriginalName();      
        //     //get just filename
            
        //     $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);

        //     //get just extension
            
        //     $extension=$request->file('aboutImage')->getClientOriginalExtension();
        //     //filename to Store
            
        //     $fileNameToStore=$filename.'_'.time().'.'.$extension;
            
        //     //upload Image

        //     $path=$request->file('aboutImage')->storeAs('public/aboutUs',$fileNameToStore);
        // }


        $about=About::find($id);
        $about->author=$request->input('author');
        $about->ourclient=$request->input('ourclient');
      

        // if($request->hasfile('aboutImage')){

        //     $about->aboutImage = $fileNameToStore;
        // }

        $about->save();

        return redirect('/about')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
