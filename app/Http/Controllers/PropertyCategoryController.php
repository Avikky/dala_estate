<?php

namespace App\Http\Controllers;

use App\PropertyCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PropertyCategoryController extends Controller
{
    public function index()
    {
        return view('admin.propertycategory');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        // return $request;

        $slug = Str::slug($request->name, '-');

        PropertyCategory::create([
            'name' => $request->name,
            'description' => $request->name,
            'slug' => $slug,
        ]);

        return back()->with('success', 'Prperty Category created successfully');
    }
}
