<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Setting;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $products = Product::where('deleted_at', NULL)->get();
        return view('admin.product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:250',
            'description' => 'required|string',
            'benefits' => 'required|string',
            'beneficiary' => 'required|string',
            'requirements' => 'required|string',
            'image' => 'required|mimes:png,jpeg,jpg',
        ]);

        $slug = Str::slug($request->name, '-');


        if ($request->file('image')) {
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('product', $file);
        } 

        Product::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'benefits' => $request['benefits'],
            'beneficiary' => $request['beneficiary'],
            'requirements' => $request['requirements'],
            'image' => $image,
            'slug' => $slug,
        ]);

        return redirect()->back()->with('success', 'Product successful created!');
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
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:250',
            'description' => 'required|string',
            'benefits' => 'required|string',
            'beneficiary' => 'required|string',
            'requirements' => 'required|string',
        ]);
        
        $slug = Str::slug($request->name, '-');

        $product = Product::find($id);

        if ($request->file('image')) {
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('product', $file);
        } 
        else{
            $image = $product->image;
        }

        $product->update([
            'name' => $request['name'],
            'description' => $request['description'],
            'benefits' => $request['benefits'],
            'beneficiary' => $request['beneficiary'],
            'requirements' => $request['requirements'],
            'image' => $image,
            'slug' => $slug,
        ]);

        return redirect()->back()->with('success', 'Product successful updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->back()->with('success', 'Product deleted!');
    }
}
