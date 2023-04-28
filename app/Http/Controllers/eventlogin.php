<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\membermst;
use DB;

class eventlogin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function login()
    {
         $member = membermst::all();
         session(['cpage'=> ('event')]);
        return view("user.userlogin",compact('member'));   
    }
    public function store(Request $request)
    {
        $member = DB::table('membermsts')->where([
            ['email', '=', $request->email],
            ['password', '=',$request->password],
        ])->get();
        //print("sfdsf");
        //print_r($member);
         if(sizeof($member)>=1)
         {
             if($cpage = 'event')
             {
                return redirect('/bookevent');     
             }
            return redirect('/bookevent');
            //  view("user.eventregis");
         }
         else
         {
            return view("user.userlogin");
         }
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
