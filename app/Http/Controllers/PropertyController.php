<?php

namespace App\Http\Controllers;

use App\Property;
use App\PropertyUses;
use App\PropertyCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    public function index()
    {        
        $propertiescat = PropertyCategory::where('deleted_at', NULL)->get();
        $propertiesuses = PropertyUses::where('deleted_at', NULL)->get();
        // return $prosuses;
        return view('admin.property', compact( 'propertiesuses', 'propertiescat'));
    }

    public function allproperties()
    {
        $properties = Property::with('propertycategory', 'propertyuses')->where('deleted_at', NULL)->get();
        return view('admin.allproperty', compact('properties'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'property_categories_id' => 'required|integer',
            'property_uses_id' => 'required|integer',
            'name' => 'required|string',
            'description' => 'required|string',
            'location' => 'required|string',
            'minimum_price' => 'required|string',
            'maximum_price' => 'required|string',
        ]);

        // return $request;

        if($request->file('image'))
        {
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('property', $file);
        }
        
        $slug = Str::slug($request->name. '-');
        
        Property::create([
            'property_categories_id' => $request->property_categories_id,
            'property_uses_id' => $request->property_uses_id,
            'name' => $request->name,
            'slug' => $slug,
            'description' => $request->description,
            'location' => $request->location,
            'minimum_price' => $request->minimum_price,
            'maximum_price' => $request->maximum_price,
            'image' => $image
        ]);

        return back()->with('success', 'Property Added Successfully');
    }

    public function editproperty($id)
    {
         $property = Property::where('deleted_at', NULL)->find($id);
         $propCategory = PropertyCategory::where('deleted_at', NULL)->get();
         $propusage = PropertyUses::where('deleted_at', NULL)->get();
        //  return $propCategory;
        return view('admin.editproperty', compact('property', 'propCategory', 'propusage'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'property_categories_id' => 'required|integer',
            'property_uses_id' => 'required|integer',
            'name' => 'required|string',
            'description' => 'required|string',
            'location' => 'required|string',
            'minimum_price' => 'required|string',
            'maximum_price' => 'required|string',
        ]);

        // return $request;

        $updateproperty = Property::find($id);

        if($request->file('image'))
        {
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('property', $file);
        }else{
            $image = $updateproperty->image;
        }
        
        $slug = Str::slug($request->name. '-');
        
        $updateproperty->update([
            'property_categories_id' => $request->property_categories_id,
            'property_uses_id' => $request->property_uses_id,
            'name' => $request->name,
            'slug' => $slug,
            'description' => $request->description,
            'location' => $request->location,
            'minimum_price' => $request->minimum_price,
            'maximum_price' => $request->maximum_price,
            'image' => $image
        ]);

        return back()->with('success', 'Property Updated Successfully');
    }

    public function destroy($id)
    {
        // $delete_property = Property::find($id);
        Property::destroy($id);        
        return back()->with('success', 'Property deleted successfully!');
    }
}
