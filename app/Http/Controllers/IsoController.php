<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Iso;
class IsoController extends Controller
{
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
        $this->validate($request,
        [
            'title1'=>'required',
            'title2'=>'required',
            'desc' => 'required'
            // 'cover_image'=>'image | nullable | max:1999'
        ]);


        //create 
        $iso=new Iso;
        $iso->title1=$request->input('title1');
        $iso->title2=$request->input('title2');
        $iso->desc=$request->input('desc');
        // $food->cover_image=$fileNameToStore;
        // $food->user_id=auth()->user()->id;
        $iso->save();

        return redirect('/iso')->with('success', 'ISO Successfully Added');

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
            'title1'=>'required',
            'title2'=>'required',
            'desc' => 'required'
        ]);

         //update 
         $iso=Iso::find($id);
         $iso->title1=$request->input('title1');
         $iso->title2=$request->input('title2');
         $iso->desc=$request->input('desc');
         
 
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
