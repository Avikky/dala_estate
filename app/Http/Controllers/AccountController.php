<?php

namespace App\Http\Controllers;

use App\Account;
use App\Upload;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function formUploads(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'upload_form' => 'required|mimes:pdf,docs,docx,zip',
        ]); 

        if ($request->file('upload_form')) {
            $file = $request->file('upload_form');
            $realFile = Storage::disk('public')->putFile('forms', $file);
        } 
        else{
            $image = NULL;
        }

        $slug = Str::slug($request->title, '-');

        $post = DB::table('form_uploads')->create([
            'title' => $request['title'],
            'file_path' => $request['realFile'],
            'slug' => $slug,
        ]);

        return redirect()->back()->with('success', 'file uploaded successfully!');
    }

    public function editFormuploads(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'upload_form' => 'required|mimes:pdf,docs,docx,zip',
        ]); 

        $file = Upload::find($id);

        if ($request->file('upload_form')) {
            $file = $request->file('upload_form');
            $realFile = Storage::disk('public')->putFile('forms', $file);
        } 
        else{
            $image = NULL;
        }

        $slug = Str::slug($request->title, '-');
        $post = DB::table('form_uploads')->create([
            'title' => $request['title'],
            'file_path' => $request['realFile'],
            'slug' => $slug,
        ]);

        return redirect()->back()->with('success', 'file uploaded successfully !');
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
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
