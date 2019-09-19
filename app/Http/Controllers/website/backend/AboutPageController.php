<?php

namespace App\Http\Controllers\website\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\website\backend\AboutPage;

class AboutPageController extends Controller
{
    public function index()
    {

        $datas =AboutPage::all();
        return view('website.backend.about-page.index' , compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.backend.about-page.add');
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



        $sliderStore = new AboutPage();
        $sliderStore->title = $request ->input('title');
        $sliderStore->description = $request ->input('description');
        $sliderStore->fb_link = $request ->input('fblink');
        $sliderStore->twitter_link = $request ->input('twitterlink');
        $sliderStore->insta_link = $request ->input('instalink');


        $sliderStore->image = $new_name;



        if ($sliderStore->save()){

            return redirect()->route('aboutpage.index')->with('message', 'added successfully');
        }

        else{
            return redirect()->route('aboutpage.index')->with('message', 'data has not added');
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

        $editCategory=AboutPage::findorFail($id);
        return view('website.backend.about-page.edit', compact('editCategory'));
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
        $updateCategory = AboutPage::findOrFail($id);

        if ($request->has('title')){
            $updateCategory->title = $request ->get('title');
        }
        if ($request->has('description')){
            $updateCategory->description = $request ->get('description');
        }
        if ($request->has('fblink')){
            $updateCategory->fb_link = $request ->get('fblink');
        }
        if ($request->has('twitterlink')){
            $updateCategory->twitter_link = $request ->get('twitterlink');
        }
        if ($request->has('instalink')){
            $updateCategory->insta_link = $request ->get('instalink');
        }



        if ($request->has('image')){
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            $updateCategory->image = $new_name;
        }

         if ($updateCategory->save()){

            return redirect()->route('aboutpage.index')->with('message', 'added successfully');
        }

        else{
            return redirect()->route('aboutpage.index')->with('message', 'data has not added');
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

        $deleteCategory = AboutPage::findOrfail($id);
        $fileName = $deleteCategory->image;

        $filepath= public_path('images/');
        $old_image = $filepath.$fileName;
        //dd($old_image);
        if (file_exists($old_image)) {
            @unlink($old_image);
        }

        if($deleteCategory->delete()){
            return redirect()->route('aboutpage.index')->with('message','slider deleted Successfully!!!');
        }
        else{
            return redirect()->route('aboutpage.index')->with('message','Unable To Delete!!!');
        }

    }






    public function destroy($id)
    {
        //
    }
}
