<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $products =Product::all();
        dd($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');

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
            'name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'total'=>'required','decimal',
            'daily_budget'=>'required','decimal'
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
     
  
        $input = $request->all();
        $image_names = [];
        // loop through images and save to /uploads directory
        foreach ($request->file('image') as $image) {
            $name = $image->getClientOriginalName();
            $image->move(public_path().'/uploads/', $name);  
            $image_names[] = $name;
       
    
        Product::create($input);
     
        return redirect()->route('products.index')
                        ->with('success','Advertise created successfully.');
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
        return view('products.show',compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('products.edit',compact('product'));

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
        $request->validate([
            'name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'total'=>'required','decimal',
            'daily_budget'=>'required','decimal'
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
     
  
        $input = $request->all();
        $image_names = [];
        // loop through images and save to /uploads directory
        foreach ($request->file('images') as $image) {
            $name = $image->getClientOriginalName();
            $image->move(public_path().'/uploads/', $name);  
            $image_names[] = $name;
       
    
        Product::update($input);
     
        return redirect()->route('products.index')
                        ->with('success','Advertise updated successfully.');
    }
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product->delete();
  
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    
    }
}
