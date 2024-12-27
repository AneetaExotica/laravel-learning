<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\blogs;
use Illuminate\Http\Request;
class BlogsController extends Controller
{
    public function index()
    {
        return view('dashboard.showbloglist');
    }
    public function create()
    {
        return view('dashboard.blogs'); // return the view for creating a blog
    }
    
    public function store(Request $request)
    {
        $request->validate([
         'name' => 'required',
         'description' => 'required',
         'image' => 'image|mimes:jpeg,png,jpg,gif',
         'category' => 'required',
         'mil_people'=> 'required',
         'kilometers' => 'required',
         'price' => 'required',
        ]);
       
        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $imagePath = $file->store('blogimages', 'public');
            } else {} 
        }
        $blogs = blogs::create([
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'image' => $imagePath,
        'category' => $request->input('category'),
        'mil_people' => $request->input('mil_people'),
        'kilometers' => $request->input('kilometers'),
        'price' => $request->input('price'),
        ]);
        return view('dashboard.blogs');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $usersWithPosts = blogs::all();
        return view('dashboard.showbloglist' , compact('usersWithPosts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blogs::findOrFail($id); // Correct the variable name to $blog
        return view('dashboard.edit', compact('blog'));
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
        $blogUpdate = Blogs::findOrFail($id);
         $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
             
        ]);
        $blogUpdate->title = $validatedData['name'];
        $blogUpdate->content = $validatedData['description'];
        if ($request->hasFile('image')) {
            if ($blogUpdate->image) {
                Storage::delete($blogUpdate->image);
            }
          $path = $request->file('image')->store('images', 'public'); // Save in the 'images' folder
          $blogUpdate->image = $path;
        }
        $blogUpdate->save();
        return redirect()->route('admin.showbloglist')->with('success', 'Blog updated successfully!');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
    
   
}
