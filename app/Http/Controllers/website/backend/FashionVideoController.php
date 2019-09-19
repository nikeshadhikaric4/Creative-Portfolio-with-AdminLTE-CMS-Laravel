<?php

namespace App\Http\Controllers\website\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\website\backend\FashionVideo;
use App\Models\website\backend\FashionVideoCategory;

class FashionVideoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas =FashionVideo::all();
        return view('website.backend.fashion-videos.index' , compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $datas = FashionVideoCategory::all();
        return view('website.backend.fashion-videos.add', compact('datas'));
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

        $sliderStore = new FashionVideo();
        $sliderStore->title = $request ->input('title');
        $sliderStore->description = $request ->input('description');
        $sliderStore->fashion_category = $request ->input('fashioncategory');

        $sliderStore->slug = $slug;
        $sliderStore->image = $new_name;



        if ($sliderStore->save()){

            return redirect()->route('fashionvideo.index')->with('message', 'added successfully');
        }

        else{
            return redirect()->route('fashionvideo.index')->with('message', 'data has not added');
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



        $editBlog=FashionVideo::findorFail($id);

        return view('website.backend.fashion-videos.edit', compact('editBlog'));
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
        $updateCategory = FashionVideo::findOrFail($id);

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
    public function delete($id)
    {
        $deleteCategory = FashionVideo::findOrfail($id);
        $fileName = $deleteCategory->image;

        $filepath= public_path('images/');
        $old_image = $filepath.$fileName;
        //dd($old_image);
        if (file_exists($old_image)) {
            @unlink($old_image);
        }


        if($deleteCategory->delete()){
            return redirect()->route('slider')->with('message','slider deleted Successfully!!!');
        }
        else{
            return redirect()->route('slider')->with('message','Unable To Delete!!!');
        }

    }





    public function destroy($id)
    {
        //
    }
}
