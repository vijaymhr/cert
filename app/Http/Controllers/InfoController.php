<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos= Info::all();

        return view ('admin/pages.info')->with('infos', $infos);
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
        $infos= Info::all($id);

        return view ('admin/pages.info')->with('infos', $infos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info= Info::find($id);
        return view ('admin/pages/editInfo')->with ('info',$info);
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
            'address'=>'required',
            'contact'=>'required | numeric',
            'email'=>'required'

        ]);

        //update food items
        $info=Info::find($id);
        $info->address=$request->input('address');
        $info->contact=$request->input('contact');
        $info->email=$request->input('email');

     
        $info->save();

        return redirect('/info')->with('success', 'Address Info has been Updated Successfully');
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
