<?php

namespace App\Http\Controllers;

use App\FaqCat;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FaqCatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function index()
    {
        $faqcats = FaqCat::with('faq')->where('deleted_at', NULL)->get();

        // return $faqcat;
        return view('admin.faqcategory', compact('faqcats'));
    }


    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:250',
            'description' => 'max:250'
        ]);

        $slug = Str::slug($request->name, '-');
        // return $request;
        FaqCat::create([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => $slug
        ]);

        return back()->with('success', 'FAQ Category is created successfully!');
    }
}
