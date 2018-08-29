<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Password;

class PasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $active_user_passwords = \App\Password::where('user_id',$user_id)->get();

        return view('passwordIndex')->with('rows',$active_user_passwords);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addNewPassword');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $passwordField = $request['password'];
        $usedAtField = $request['used_at'];
        $userID = Auth::user()->id;

        $password = new Password;
        $password->password = $passwordField;
        $password->used_at = $usedAtField;
        $password->user_id = $userID;

        $password->save();
        return redirect(route('password.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('/404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active_user_password = \App\Password::where('id',$id)->get();

        return view('editPassword')->with('rows',$active_user_password);
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
        $password = $request['password'];
        $usedAt = $request['used_at'];

        $edit_pass = \App\Password::where('id',$id)->first();
        $edit_pass->password = $password;
        $edit_pass->used_at = $usedAt;

        $edit_pass->save();
        return redirect(route('password.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actual_pass = \App\Password::where('id',$id)->first();

        $actual_pass->delete();
        return redirect(route('password.index'));
    }
}
