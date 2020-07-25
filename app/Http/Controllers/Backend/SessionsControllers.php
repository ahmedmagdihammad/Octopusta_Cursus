<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Session;
use App\Level;

class SessionsControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessions = Session::all();
        $levels = Level::all();
        return view('backend.sessions', compact('sessions', 'levels'));
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
        if ($request->level == '' && $request->name == '' && $request->sort == '' ) 
        {
            return back();
        }

        $session = new Session();
        $session->level = $request->level;
        $session->name = $request->name;
        $session->sort = $request->sort;
        if ($request->hasFile('video')) {
            $session->video = $this->uploadimage($request->video);
        }
        $session->save();
        return back();
    }

    public function uploadimage($file)
    {
        $imagename = time().'.'.$file->getClientOriginalExtension();
        $imagename = str_random(10).'.mp4';
        if(file_exists($imagename.".mp4")){
            $imagename = str_random(10);
        }
        $destinationPath = public_path('backend/videos');
        $file->move($destinationPath, $imagename);
        $returenurl = 'backend/videos/'.$imagename; 

        return $returenurl;  
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
        if ($request->uplevel == '' && $request->upname == '' && $request->upsort == '' ) 
        {
            return back();
        }

        $session = Session::find($id);
        $session->level = $request->uplevel;
        $session->name = $request->upname;
        $session->sort = $request->upsort;
        if ($request->hasFile('upvideo')) {
            $session->video = $this->uploadimage($request->upvideo);
        }
        $session->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Session::find($id)->delete();
        return back();
    }
}
