<?php

namespace App\Http\Controllers;

use App\UserModel;
use Illuminate\Http\Request;

class UserModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
       public function index()
    {
        //user dashboard
        return view('user.index');
    }

    public function about()
    {
        return view('user.about');
    }
    public function tour()
    {
        return view('user.tour');
    }
    public function hotel()
    {
        return view('user.hotel');
    }
    public function blog()
    {
        return view('user.blog');
    }
    public function contact()
    {
        return view('user.contact');
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
     * @param  \App\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function show(UserModel $userModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function edit(UserModel $userModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserModel $userModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserModel $userModel)
    {
        //
    }
}
