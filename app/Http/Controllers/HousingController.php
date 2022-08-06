<?php

namespace App\Http\Controllers;

use App\Housing;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Setting;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class HousingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $housings = Housing::where('deleted_at', Null)->get();
        return view('admin.housing', compact('housings'));

    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            // 'image' => 'required|mimes:png,jpeg,jpg',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
// return $request;
        $slug = Str::slug($request->name, '-');

        if($request->file('image')){
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('housing', $file);
        }

        // return $request;

        Housing::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'slug' => $slug,
        ]);

        return redirect()->back()->with('success', 'Housing successfully created');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255'
        ]);

        $slug = Str::slug($request->name, '-');

        $housing = Housing::find($id);

        if($request->file('image')){
            $file = $request->file('image');
            $image = Storage::disk('public')->putFile('housing', $file);
        }else{
            $image = $housing->image;
        }

        $housing->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'slug' => $slug,
        ]);

        return redirect()->back()->with('success', 'Housing Successfully Updated!');
    }

    public function destroy($id)
    {
        Housing::destroy($id);
        return redirect()->back()->with('success', 'Housing Successfully Deleted!');
    }
}
