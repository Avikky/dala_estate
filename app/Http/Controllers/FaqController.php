<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FaqController extends Controller
{
    public function index()
    {   
        $faq = Faq::where('deleted_at', NULL)->get();
       
        return view('admin.newfaq', compact('faq'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [

            'question' => 'required|max:250',
            'answer' => 'required',
            'faq_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'faqcat' => 'required'

        ]);

        // return $request;

        $slug = Str::slug($request->question, '-');

        if($request->file('faq_image'))
        {
            $file = $request->file('faq_image');
            $image = Storage::disk('public')->putFile('faq', $file);
        }else{
            $image = NULL;
        }

        Faq::create([
            'faq_cats_id' => $request->faqcat,
            'question' => $request->question,
            'answer' => $request->answer,
            'slug' => $slug,
            'image' => $image,

        ]);

        return back()->with('success', 'Frequently asked question successfully created!');
    }

    public function allfaq()
    {
        $allfaq = Faq::where('deleted_at', NULL)->get();
        // return $allfaq;
        return view('admin.allfaq', compact('allfaq'));
    }
}
