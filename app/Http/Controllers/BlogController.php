<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;
use App\Tag;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use DB;


class BlogController extends Controller
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
        $posts = Post::where('deleted_at', NULL)->latest()->get();
        return view('admin.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categories = Category::where('deleted_at', NULL)->get();
        $tags = Tag::where('deleted_at', NULL)->get();
        return view('admin.newpost', compact('categories', 'tags'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 

        if ($request->file('featured_image')) {
            $file = $request->file('featured_image');
            $image = Storage::disk('public')->putFile('property', $file);
        } 
        else{
            $image = NULL;
        }

        $slug = Str::slug($request->title, '-');
        $post = Post::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'slug' => $slug,
            'featured_image' => $image
        ]);
        $post->Categories()->attach($request->category);
        return redirect()->back()->with('success', 'Post successful created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::where('deleted_at', NULL)->get();
        $avail_cat = DB::table('category_post')->where('post_id', $id)->pluck('category_id')->toArray();
        $post = Post::with('categories')->where('deleted_at', NULL)->find($id);
        //return $post;
        return view('admin.editpost', compact('post', 'categories', 'avail_cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $Category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 

        $post = Post::where('deleted_at', NULL)->find($id);
        if ($request->file('featured_image')) {
            $file = $request->file('featured_image');
            $image = Storage::disk('public')->putFile('property', $file);
        } 
        else{
            $image = $post->featured_image;
        }

        $slug = Str::slug($request->title, '-');
        $post->update([
            'title' => $request['title'],
            'description' => $request['description'],
            'slug' => $slug,
            'featured_image' => $image
        ]);


        $remove_category = DB::table('category_post')->where('post_id', $id)->pluck('category_id')->toArray();
   
        foreach ($request->category as $value) {
            if (in_array($value, $remove_category)) {
                
            }
            else{
               $post->Categories()->attach($value);
            }        
        }

        foreach ($remove_category as $value) {
            if (in_array($value, $request->category)) {
                # code...
            }
            else{
                $post->Categories()->detach($value);
            }
        }
        return redirect()->back()->with('success', 'Post successful updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->back()->with('success', 'Post deleted!');
    }
}
