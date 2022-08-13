<?php

namespace App\Http\Controllers;

use App\PropertyCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PropertyCategoryController extends Controller
{
    public function index()
    {
        $propertycat = PropertyCategory::where('deleted_at', NULL)->get();
        // return $propertycat;
        return view('admin.propertycategory', compact('propertycat'));
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


    public function destroy($id)
    {
        PropertyCategory::destroy($id);

        return back()->with('success', 'Property Category deleted successfully!');
    }
}
