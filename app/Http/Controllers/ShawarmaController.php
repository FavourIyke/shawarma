<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShawarmaStoreRequest;

use App\Models\Shawarma;

use Illuminate\Http\Request;



class ShawarmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('shawarma.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("shawarma.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response 
     */
    public function store(ShawarmaStoreRequest $request)
    {
       // dd($request->all());
       $path = $request->image->store('public/shawarma');
       Shawarma::create([
           'name'=>$request->name,
           'description' => $request->description,
           'small_shawarma_price' => $request->small_shawarma_price,
           'medium_shawarma_price' => $request->medium_shawarma_price,
           'large_shawarma_price' => $request->large_shawarma_price,
           'category' => $request->category,
           'image' => $path
       ]);

       return redirect()->route('shawarma.index')->with('message','shawarma added successfully');
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
