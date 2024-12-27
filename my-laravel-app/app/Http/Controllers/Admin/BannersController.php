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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
