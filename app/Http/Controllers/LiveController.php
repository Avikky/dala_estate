<?php

namespace App\Http\Controllers;

use Mail;
use App\Live;
use App\Loan;
use App\Post;
use App\Board;
use App\Slider;
use App\Enquiry;
use App\Housing;
use App\Partner;
use App\Product;
use App\Project;
use App\Gallery;
use App\Service;
use App\Management;
use App\Testimonial;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class LiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$firstslider = Slider::where('deleted_at', NULL)->first();
        //$sliders = Slider::where('deleted_at', NULL)->where('id', '!=', $firstslider->id)->get();

        $sliders = Slider::where('deleted_at', NULL)->get();
        $services = Service::where('deleted_at', NULL)->get();
        $posts = Post::where('deleted_at', NULL)->latest()->take(3)->get();
        $housings = Housing::where('deleted_at', NULL)->limit(6)->get();
        $galleries = Gallery::where('deleted_at', NULL)->latest()->take(6)->get();
        // $products = Product::where('deleted_at', NULL)->limit(6)->get();
        
        return view('live.index', compact('sliders', 'services', 'housings', 'posts', 'galleries'));
    }

    public function gallery()
    {
       $galleries = Gallery::where('deleted_at', NULL)->latest()->paginate(10);
        
        return view('live.gallery', compact('galleries'));
    }
    
    public function galleryview($slug)
    {
        $gallery = Gallery::where('deleted_at', NULL)->where('slug', $slug)->first();
        return view('live.galleryview',  compact('gallery'));
    }

    public function about()
    {
        $testimonials = Testimonial::where('deleted_at', NULL)->get();
        $partners = Partner::where('deleted_at', NULL)->get();
        return view('live.about', compact('testimonials', 'partners'));
    }

    public function contact()
    {
        return view('live.contact');
    }

    public function loan()
    {
        return view('live.loan');
    }

    public function blog()
    {
        $posts = Post::with('categories')
            ->where('deleted_at', NULL)
            ->latest()
            ->paginate(8);
        return view('live.blog', compact('posts'));
    }


    public function blogview($slug)
    {
        $post = Post::with('categories')->where('deleted_at', NULL)
                    ->where('slug', $slug)
                    ->first();
        return view('live.blogview', compact('post'));
    }

    // public function product()
    // {
    //     $services = Product::where('deleted_at', NULL)->get();
    //     return view('live.products', compact('services'));
    // }

    public function housing()
    {
        $housings = Housing::where('deleted_at', NULL)->get();
        return view('live.housing', compact('housings'));
    }

    public function housingview($slug)
    {
        $housing = Housing::where('deleted_at', NULL)->where('slug', $slug)->first();
        return view('live.housingview', compact('housing'));
    }

    public function productview($slug)
    {
        $product = Product::where('deleted_at', NULL)->where('slug', $slug)->first();
        return view('live.productview', compact('product'));
    }

    public function board()
    {
        $boards = Board::where('deleted_at', NULL)->get();
        return view('live.board', compact('boards'));
    }

    public function boardview($slug)
    {
        $board = Board::where('deleted_at', NULL)->where('slug', $slug)->first();
        return view('live.boardview', compact('board'));
    }

    public function management()
    {
        $managements = Management::where('deleted_at', NULL)->get();
        return view('live.management', compact('managements'));
    }

    public function managementview($slug)
    {
        $management = Management::where('deleted_at', NULL)->where('slug', $slug)->first();
        return view('live.managementview', compact('management'));
    }

    public function service()
    {
        $services = Service::where('deleted_at', NULL)->latest()->paginate(6);
        return view('live.service', compact('services'));
    }

    public function serviceview($slug)
    {
        $service = Service::where('deleted_at', NULL)->where('slug', $slug)->first();
        return view('live.serviceview', compact('service'));
    }

    public function portfolio(Request $request)
    {
        $portfolios = Project::where('deleted_at', NULL)->latest()->paginate(6);
        return view('live.portfolio', compact('portfolios'));
    }

    public function portfolioview($slug)
    {
        $portfolio = Project::where('deleted_at', NULL)->where('slug', $slug)->first();
        return view('live.portfolioview', compact('portfolio'));
    }
    public function enquiry(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        
        Enquiry::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'property_id' => $request->property_id,
            'status' => 0,
        ]);

        $email = $request->email;
        
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        );
        
        Mail::send('emails.getmail', $data, function($message) use ($email) {
            $message->to($email)->subject('New Quotation Notification');
        });

        return redirect()->back()->with('success', 'Thank you for getting in touch, we will contact you soon!');
    }
    
    public function realtorview($property_id)
    {
        $property = Property::where('deleted_at', NULL)->where('property_id', $property_id)->first();
        $city = $property->getOriginal('city');
        $type = $property->type;
        $properties = Property::where('deleted_at', NULL)->where('property_id', '!=', $property_id)->where('type', $type)->orWhere('city', $city)->latest()->take(6)->get();
        return view('live.propertyview', compact('property', 'properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeloan(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'middlename' => 'required',
            'email' => 'required',
            'amount' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'bvn' => 'required',
            'nature' => 'required',
            'purpose' => 'required',
            'location' => 'required',
            'experience' => 'required',
            'id_card' => 'required|mimes:png,jpeg,jpg',
            'photo' => 'required|mimes:png,jpeg,jpg',
        ]);
        
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $photo = Storage::disk('public')->putFile('photo', $file);
        } 

        if ($request->file('id_card')) {
            $file1 = $request->file('id_card');
            $id_card = Storage::disk('public')->putFile('id_card', $file1);
        } 

        Loan::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'middlename' => $request->middlename,
            'amount' => $request->amount,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'photo' => $photo,
            'id_card' => $id_card,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'bvn' => $request->bvn,
            'interest' => $request->interest,
            'purpose' => $request->purpose,
            'nature' => $request->nature,
            'location' => $request->location,
            'experience' => $request->experience,
            'repayment' => $request->repayment,
            'security' => $request->security,
            'status' => "Pending",
        ]);

        return redirect()->back()->with('success', 'Loan application successful recieved, the bank will soon contact you!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Live  $live
     * @return \Illuminate\Http\Response
     */
    public function show(Live $live)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Live  $live
     * @return \Illuminate\Http\Response
     */
    public function edit(Live $live)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Live  $live
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Live $live)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Live  $live
     * @return \Illuminate\Http\Response
     */
    public function destroy(Live $live)
    {
        //
    }
}
