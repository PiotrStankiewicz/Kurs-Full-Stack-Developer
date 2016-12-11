<?php

namespace App\Http\Controllers;
use App\Groups;
use App\Products;
use App\Sites;
use App\Categories;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::paginate(10);//pobierze wszystkie rekordy po 10 ,PAGINATE robi nam po 10
        return view('products.index', compact('products'));   //do ktorego widoku
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Groups::all();
        $categories = Categories::all();
        return view('products.create', compact('groups','categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new Products();
        $products->name = $request->input('name');
        $products->price = $request->input('price');
        $products->categories_id = $request->input('categories_id');
        $products->group_keys_id = $request->input('group_keys_id');

        $products->save();

        return redirect('/products');
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
        $product = Products::find($id);
        $categories = Categories::all();
        $groups = Groups::all();
        return view('products.edit', compact('product','categories','groups'));
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
        $products = Products::find($id);
        $products->name = $request->input('name');
        $products->price = $request->input('price');
        $products->categories_id = $request->input('categories_id');
        $products->group_keys_id = $request->input('group_keys_id');
        $products->save();
        return redirect('/products');
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
