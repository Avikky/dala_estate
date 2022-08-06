<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Testimonial;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;


class TestimonialController extends Controller
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
        $testimonials = Testimonial::where('deleted_at', NULL)->get();
        return view('admin.testimonial', compact('testimonials'));
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
            'post' => 'required|string|max:250',
            'description' => 'string|max:1000',
        ]);

        if ($request->file('image')) {
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('Testimonial', $file);
        } 
        else
        {
            $image = NULL;
        }

        Testimonial::create([
            'name' => $request['name'],
            'post' => $request['post'],
            'description' => $request['description'],
            'image' => $image,
        ]);

        return redirect()->back()->with('success', 'Testimonial successful created!');
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
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:250',
            'post' => 'required|string|max:250',
            'description' => 'string|max:1000',
        ]);

        $testimonial = Testimonial::find($id);

        if ($request->file('image')) {
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('Testimonial', $file);
        } 
        else
        {
            $image = $testimonial->image;
        }

        $testimonial->update([
            'name' => $request['name'],
            'post' => $request['post'],
            'description' => $request['description'],
            'image' => $image,
        ]);

        return redirect()->back()->with('success', 'Testimonial successful created!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testimonial::destroy($id);
        return redirect()->back()->with('success', 'Testimonial deleted!');
    }
}
