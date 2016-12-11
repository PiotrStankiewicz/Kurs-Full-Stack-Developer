<?php

namespace App\Http\Controllers;

use App\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Cars::paginate(10);//pobierze wszystkie rekordy po 10 ,PAGINATE robi nam po 10
        return view('cars.index', compact('cars'));   //do ktorego widoku
    }

    /**
     * Show the form for creating a new resource.    //tworzy nowe zasoby , wysyla dane bedzie postowal
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.   //zapytania, insert
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cars = new Cars();
        $cars->name = $request->input('name');    //wyjmujemy z bazy pole
        $cars->engine = $request->input('engine');
        $cars->save();

        return redirect('/cars');
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
        $car = Cars::find($id);
        return view('cars.edit', compact('car'));
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
        $car = Cars::find($id);
        $car->name = $request->input('name');
        $car->engine = $request->input('engine');
        $car->save();
        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.  //usuwa rekord
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Cars::find($id);
        $car->delete();
        return redirect('/cars');
    }
}
