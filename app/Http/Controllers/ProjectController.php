<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;
use App\Type;
use App\Enquiry;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use DB;

class ProjectController extends Controller
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
        $projects = Project::where('deleted_at', NULL)->latest()->get();
        return view('admin.project.view', compact('projects'));
    }


    public function create()
    {
        return view('admin.project.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:250',
            'link' => 'string|max:150',
            'description' => 'required',
        ]);

        $slug = Str::slug($request->name, '-');

        if ($request->file('image')) {
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('property', $file);
        } 
        else{
            $image = NULL;
        }

        
        Project::create([
            'name' => $request['name'],
            'slug' => $slug,
            'link' => $request['link'],
            'description' => $request['description'],
            'image' => $image,
        ]);

        return redirect()->route('allprojects')->with('success', 'Project added successfuly' );
    }

    public function show($id)
    {
        $property = Project::where('deleted_at', NULL)->find($id);
        return view('admin.project.show', compact('property'));
    }

    public function edit(service $service)
    {
        //
    }

    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'name' => 'required|string|max:250',
            'link' => 'string|max:150',
            'description' => 'required',
            'image' => 'mimes:png,jpeg,jpg',
        ]);

        $project = Project::find($id);
        $slug = Str::slug($request->name, '-');

        if ($request->file('image')) {
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('property', $file);
        } 
        else{
            $image = $project->image;
        }

        $project->update([
            'name' => $request['name'],
            'slug' => $slug,
            'link' => $request['link'],
            'description' => $request['description'],
            'image' => $image,
        ]);

        return redirect()->route('allprojects')->with('success', 'Project updated successfuly' );
    }

    public function destroy($id)
    {
        Project::destroy($id);
        return redirect()->back()->with('success', 'Project deleted!');
    }
}
