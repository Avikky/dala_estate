<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $galleries = Gallery::where('deleted_at', NULL)->get();
        return view('admin.gallery', compact('galleries')); 
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $slug = Str::slug($request->name, '-');


        if ($request->file('image')) {
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('gallery', $file);
        } 

        Gallery::create([
            'name' => $request->name,
            'description' => $request->description,
            'file_path' => $image,
            'slug' => $slug,
        ]);

        return redirect()->back()->with('success', 'Gallery successful created!');
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

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:250',
            'description' => 'required|string',
        ]);
        
        $slug = Str::slug($request->name, '-');

        $gallery = Gallery::find($id);

        if ($request->file('image')) {
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('service', $file);
        } 
        else{
            $image = $gallery->image;
        }

        $gallery->update([
            'name' => $request->name,
            'description' => $request['description'],
            'file_path' => $image,
            'slug' => $slug,
        ]);

        return redirect()->back()->with('success', 'Gallery successful updated!');
    }

    
    public function destroy($id)
    {
        Gallery::destroy($id);
        return redirect()->back()->with('success', 'Service deleted!');
    }
}
