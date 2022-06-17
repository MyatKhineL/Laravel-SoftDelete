<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFruitRequest;
use App\Http\Requests\UpdateFruitRequest;
use App\Models\Fruit;
use http\Env\Request;

class FruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fruits = Fruit::all();
        return  view('fruit.index',compact('fruits'));
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
     * @param  \App\Http\Requests\StoreFruitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFruitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function show(Fruit $fruit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function edit(Fruit $fruit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFruitRequest  $request
     * @param  \App\Models\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFruitRequest $request, Fruit $fruit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function destroy($fruit)
    {



        // is the model soft deleted ?



        // soft delete
        $fruit = Fruit::findOrFail($fruit);

        $fruit->delete();

        return redirect()->back();
    }

    public function archive(){
        $fruits = Fruit::onlyTrashed()->latest('id')->get();
        return view('fruit.archive',compact('fruits'));
    }

    public function restore($id){
        // on delete the model

        $fruit = Fruit::onlyTrashed()->find($id);

        $fruit->restore();

        return redirect()->back();
    }

    public function perdelete($id){
        $fruit = Fruit::onlyTrashed()->find($id);
        $fruit->forceDelete();
        return redirect()->back();
    }
}
