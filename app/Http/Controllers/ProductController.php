<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $product=Product::latest()->paginate(5);
        return view('product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product'=>'required',
            'price'=>'required',
            'details'=>'required'
        ]);
        $product =Product::create($request->all());
        return redirect()->route('product.index')
        ->with('success','Product added Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit',compact('product'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product'=>'required',
            'price'=>'required',
            'details'=>'required'
        ]);
        $product->update($request->all());
        return redirect()->route('product.index')
        ->with('success','Product updated Success');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */


            // public function destroy(Product $product)
            // {
            //     $product->delete();
            //     return redirect()->route('product.index')
            //     ->with('success','Product deleted Success');
            // }


    public function softDelete($id)
    {
        $product=Product::find($id)->delete();
        return redirect()->route('product.index')
        ->with('success','Product Soft deleted Success');
    }


    public function trash()
    {
        $product=Product::onlyTrashed()->latest()->paginate(8);
        return view('product.trash',compact('product'));
    }


    public function backfromsoftDelete($id)
    {
        $product=Product::onlyTrashed()->where('id',$id)->first()->restore();
        return redirect()->route('product.index')
        ->with('success','Product Restored Success');
    }


    public function forceDelete($id)
    {
        $product=Product::onlyTrashed()->where('id',$id)->first()->forceDelete();
        return redirect()->route('product.trash')
        ->with('success','Product deleted Success');
    }



}
