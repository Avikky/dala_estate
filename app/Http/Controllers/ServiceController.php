<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use App\Setting;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
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
        $services = Service::where('deleted_at', NULL)->get();
        return view('admin.service', compact('services')); 
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
            // 'image' => 'required|image|mimes:png,jpeg,jpg',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        

        $slug = Str::slug($request->name, '-');


        if ($request->file('image')) {
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('service', $file);
        } 
// return $request;
        Service::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'image' => $image,
            'slug' => $slug,
        ]);

        return redirect()->back()->with('success', 'Service successful created!');
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
        ]);
        
        $slug = Str::slug($request->name, '-');

        $service = Service::find($id);

        if ($request->file('image')) {
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('service', $file);
        } 
        else{
            $image = $service->image;
        }

        $service->update([
            'name' => $request['name'],
            'description' => $request['description'],
            'image' => $image,
            'slug' => $slug,
        ]);

        return redirect()->back()->with('success', 'Service successful updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::destroy($id);
        return redirect()->back()->with('success', 'Service deleted!');
    }
}
