<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Banners;
use Illuminate\Http\Request;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //return view('dashboard.addbanner'); 
       return view('dashboard.addbanner');
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
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' =>'required',
            'image'=> 'image|mimes:jpg,png,gif,jpeg',
            'buttontext' => 'required',
            'buttonlink' => 'required',
            'mil_people' => 'required',
            'kilometers' => 'required',
            'price' => 'required',
            'buttontext2' => 'required',
            'buttonlink2' => 'required',
        ]);
        $imagePath = null;
        if($request->hasfile('image')){
            $file = $request->file('image');
            if($file->isValid()){
              $imagePath = $file->store('blogimages', 'public');
            }else{}
        }
        $blogs = Banners::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $imagePath,
            'buttontext' => $request->input('buttontext'),
            'buttonlink' => $request->input('buttonlink'),
            'mil_people' => $request->input('mil_people'),
            'kilometers' => $request->input('kilometers'),
            'price' => $request->input('price'),
            'buttontext2' => $request->input('buttontext2'),
            'buttonlink2' => $request->input('buttonlink2'),
            ]);
            return view('dashboard.addbanner');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $getBanners = Banners::all();
        return view('dashboard.showbanners', compact('getBanners'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $bannerdata = Banners::findOrFail($id); // Correct the variable name to $blog
        return view('dashboard.banner-edit', compact('bannerdata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
public function update(Request $request, $id)
{
    // Use dd() to inspect the request data if needed
    // dd($request);

    // Validate the incoming request data
    $validated = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'nullable|image|mimes:jpg,png,gif,jpeg',  // Optional image field
        'buttontext' => 'required',
        'buttonlink' => 'required',
        'mil_people' => 'required',
        'kilometers' => 'required',
        'price' => 'required',
        'buttontext2' => 'required',
        'buttonlink2' => 'required',
        
    ]);

    // Find the banner by its ID
    $banner = Banners::findOrFail($id);

    // Process image uploads if present
    $imagePath = null;

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        if ($file->isValid()) {
            $imagePath = $file->store('blogimages', 'public');
        }
    }


    // Update the banner with the new data
    $banner->update([
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'image' => $imagePath ?: $banner->image,  // Keep old image if new one is not uploaded
        'buttontext' => $request->input('buttontext'),
        'buttonlink' => $request->input('buttonlink'),
        'mil_people' => $request->input('mil_people'),
        'kilometers' => $request->input('kilometers'),
        'price' => $request->input('price'),
        'buttontext2' => $request->input('buttontext2'),
        'buttonlink2' => $request->input('buttonlink2'),
    ]);

    // Redirect or return a success message
    return redirect()->route('admin.show-banners')->with('success', 'Banner updated successfully');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $banner = Banners::findOrFail($id);
    if (file_exists(public_path('storage/' . $banner->image)) && $banner->image) {
        unlink(public_path('storage/' . $banner->image));
    }
    $banner->delete();
   return redirect()->route('admin.show-banners')->with('success', 'Banner deleted successfully.');
}

}
