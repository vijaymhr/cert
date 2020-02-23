<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
class FeedbackController extends Controller
{




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('/.#contact-section');

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
        $this->validate($request,
        [
            'fname'=>'required',
            'email'=>'required | email',
            'mobile'=>'required',
            'subject'=>'required',
            'message'=>'required',
            
        ]);

        $feedback=new Feedback;
        $feedback->fname=$request->input('fname');
        $feedback->email=$request->input('email');
        $feedback->mobile=$request->input('mobile');
        $feedback->subject=$request->input('subject');

        $feedback->message=$request->input('message');
// $feedback->user_id='1';
        $feedback->save();


        
      return redirect('/.#contact-section')->with('success', 'Thank you for your feedback.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
