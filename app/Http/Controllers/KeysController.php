<?php

namespace App\Http\Controllers;
use App\Keys;

use Illuminate\Http\Request;

class KeysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keys = Keys::paginate(10);
        return view('keys.index' , compact('keys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $keys = Keys::all();
        return view('keys.create', compact('keys'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $keys = new Keys();
        $keys->key = $request->input('key');    //wyjmujemy z bazy pole
        $keys->group_keys_id = $request->input('group_keys_id');
        $keys->save();
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
        $keys = Keys::find($id);
        return view('keys.edit', compact('keys'));
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
        $key = Pages::find($id);
        $key->name = $request->input('name');
        $key->email = $request->input('email');
        $key->password = $request->input('password');
        $key->save();
        return redirect('/keys');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $key = Keys::find($id);
        $key->delete();
        return redirect('/keys');
    }
}
