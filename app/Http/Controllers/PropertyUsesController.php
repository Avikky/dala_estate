<?php

namespace App\Http\Controllers;

use App\PropertyUses;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PropertyUsesController extends Controller
{
     public function index()
    {
        return view('admin.propertyuses');
    }

    public function store(Request $request)
    {
         $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        // return $request;

        $slug = Str::slug($request->name, '-');

        PropertyUses::create([
            'name' => $request->name,
            'description' => $request->name,
            'slug' => $slug,
        ]);

        return back()->with('success', 'Property Usage created successfully');
    }
}
