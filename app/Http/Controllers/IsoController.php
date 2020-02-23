<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Iso;
class IsoController extends Controller
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
        $isos= Iso::orderBy('created_at','desc')-> paginate(10);
      return view('admin/pages.iso')->with('isos', $isos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/pages.addIso');
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
        // $iso= Iso::find($id);

        // return view ('pages/orderView')->with ('food',$food);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $iso= Iso::find($id);
        return view ('admin/pages/editIso')->with ('iso',$iso);
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
            'iso_9001'=>'required',
            'iso_45001'=>'required',
            'iso_14001_1' => 'required',
            'iso_14001_2' => 'required',

            'iso_14001_3' => 'required'

        ]);

         //update 
         $iso=Iso::find($id);

         $iso->iso_9001=$request->input('iso_9001');
         $iso->iso_45001=$request->input('iso_45001');
         $iso->iso_14001_1=$request->input('iso_14001_1');
         $iso->iso_14001_2=$request->input('iso_14001_2');
         $iso->iso_14001_3=$request->input('iso_14001_3');
 
         

         
 
         $iso->save();
 
         return redirect('/iso')->with('success', 'ISO Updated Successfully');
     }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iso=Iso::find($id);


      
        $iso->delete();
  
  
  
        return redirect('/iso')->with('success', 'ISO Removed Successfully');
    }
}
