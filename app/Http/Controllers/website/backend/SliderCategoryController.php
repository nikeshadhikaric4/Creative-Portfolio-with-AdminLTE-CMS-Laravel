<?php

namespace App\Http\Controllers\website\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\website\backend\SliderCategory;

class SliderCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $datas =SliderCategory::all();
        return view('website.backend.slider.slidercategory.index' , compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.backend.slider.slidercategory.add');
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
        if ($request->has('image')){
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $sliderStore->image = $new_name;}

        $slug = str_slug($request->input('title'));

        $sliderStore = new SliderCategory();
        $sliderStore->title = $request ->input('title');
        $sliderStore->description = $request ->input('description');
        $sliderStore->slug = $slug;




        if ($sliderStore->save()){

            return redirect()->route('slidercategory')->with('message', 'added successfully');
        }

        else{
            return redirect()->route('slidercategory')->with('message', 'data has not added');
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

        $editCategory=SliderCategory::findorFail($id);
        return view('website.backend.slider.slidercategory.edit', compact('editCategory'));
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
        $updateCategory = SliderCategory::findOrFail($id);

        if ($request->has('title')){
            $updateCategory->title = $request ->get('title');
        }
        if ($request->has('description')){
            $updateCategory->description = $request ->get('description');
        }


        if ($request->has('image')){
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            $updateCategory->image = $new_name;
        }

         if ($updateCategory->save()){

            return redirect()->route('slidercategory')->with('message', 'added successfully');
        }

        else{
            return redirect()->route('slidercategory')->with('message', 'data has not added');
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
        $deleteCategory = SliderCategory::findOrfail($id);
        $fileName = $deleteCategory->image;

        $filepath= public_path('images/');
        $old_image = $filepath.$fileName;
        //dd($old_image);
        if (file_exists($old_image)) {
            @unlink($old_image);
        }






        if($deleteCategory->delete()){
            return redirect()->route('slidercategory')->with('message','slider deleted Successfully!!!');
        }
        else{
            return redirect()->route('slidercategory')->with('message','Unable To Delete!!!');
        }

    }
}
