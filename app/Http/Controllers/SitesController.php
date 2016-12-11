<?php

namespace App\Http\Controllers;

use App\Sites;
use App\Categories;
use Illuminate\Http\Request;

class SitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sites = Sites::paginate(10);//pobierze wszystkie rekordy po 10 ,PAGINATE robi nam po 10
        return view('sites.index', compact('sites'));   //do ktorego widoku
    }

    /**
     * Show the form for creating a new resource.    //tworzy nowe zasoby , wysyla dane bedzie postowal
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('sites.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.   //zapytania, insert
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $sites = new Sites();
        $sites->title = $request->input('title');    //wyjmujemy z bazy pole
        $sites->content = $request->input('content');
        $sites->category_id = $request->input('category_id');
        $sites->save();

        return redirect('/sites');
    }

    /**
     * Display the specified resource.  //wyswietla rekord z bazy o wybranym id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.    //edytuje rekord z bazy o wybranym id, postuje do update
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $site = Sites::find($id);
        $categories = Categories::all();
        return view('products.edit', compact('site','categories'));
    }

    /**
     * Update the specified resource in storage.        //updatowanie rekordu
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $site = Sites::find($id);
        $site->title = $request->input('title');
        $site->content = $request->input('content');
        $site->category_id = $request->input('category_id');
        $site->save();
        return redirect('/sites');
    }

    /**
     * Remove the specified resource from storage.  //usuwa rekord
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $site = Sites::find($id);
        $site->delete();
        return redirect('/sites');
    }
}
