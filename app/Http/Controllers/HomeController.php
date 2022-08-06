<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->route('settings');
        return view('home');
    }

    public function showloan()
    {
        $loans = Loan::where('deleted_at', NULL)->get();
        return view('admin.loan', compact('loans'));
    }

    public function editloan($id)
    {
        $loan = Loan::where('deleted_at', NULL)->find($id);
        $loan->status = "Seen";
        $loan->update();

        return view('admin.viewloan', compact('loan'));
        //return redirect()->back()->with('success', 'Loan application marked as seen!');
    }

    public function destroyloan($id)
    {
        Loan::destroy($id);
        return redirect()->back()->with('success', 'Loan application deleted!');
    }
}
