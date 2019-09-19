<?php

namespace App\Http\Controllers\website\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\website\backend\Blog;
use App\Models\website\backend\BlogCategory;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page=DB::table('blog')->paginate(5);
        $datas =Blog::all();
        return view('website.backend.blog.index' , compact('datas','page' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $datas = BlogCategory::all();
        return view('website.backend.blog.add', compact('datas'));
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
            'title'    =>  'required',

            'description'=>'required',

        ]);

        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);

        $slug = str_slug($request->input('title'));

        $sliderStore = new Blog();
        $sliderStore->title = $request ->input('title');
        $sliderStore->description = $request ->input('description');
        $sliderStore->blog_category_id = $request ->input('blogcategory');

        $sliderStore->slug = $slug;
        $sliderStore->image = $new_name;



        if ($sliderStore->save()){

            return redirect()->route('blog.index')->with('message', 'added successfully');
        }

        else{
            return redirect()->route('blog.index')->with('message', 'data has not added');
        }




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {



        $editBlog=Blog::findorFail($id);

        return view('website.backend.blog.edit', compact('editBlog'));
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
        $updateCategory = Blog::findOrFail($id);

        if ($request->has('title')){
            $updateCategory->title = $request ->get('title');
        }
        if ($request->has('description')){
            $updateCategory->description = $request ->get('description');
        }
        if ($request->has('blogcategory')){
            $updateCategory->slider_category = $request ->get('blogcategory');
        }


        if ($request->has('image')){
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            $updateCategory->image = $new_name;
        }

         if ($updateCategory->save()){

            return redirect()->route('blog.index')->with('message', 'added successfully');
        }

        else{
            return redirect()->route('blog.index')->with('message', 'data has not added');
        }


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

    public function delete($id){
        $deleteCategory = Blog::findOrfail($id);
        $fileName = $deleteCategory->image;

        $filepath= public_path('images/');
        $old_image = $filepath.$fileName;
        //dd($old_image);
        if (file_exists($old_image)) {
            @unlink($old_image);
        }


        if($deleteCategory->delete()){
            return redirect()->route('blog.index')->with('message','slider deleted Successfully!!!');
        }
        else{
            return redirect()->route('blog.index')->with('message','Unable To Delete!!!');
        }
    }

}
