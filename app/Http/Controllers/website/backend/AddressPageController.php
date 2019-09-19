<?php

namespace App\Http\Controllers\website\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\website\backend\AddressPage;

class AddressPageController extends Controller
{


    public function index()
    {

        $datas =AddressPage::all();
        return view('website.backend.address-page.index' , compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.backend.address-page.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $sliderStore = new AddressPage();
        $sliderStore->address = $request ->input('address');
        $sliderStore->phone = $request ->input('phone');
        $sliderStore->email = $request ->input('email');
        $sliderStore->website = $request ->input('website');





        if ($sliderStore->save()){

            return redirect()->route('addresspage.index')->with('message', 'added successfully');
        }

        else{
            return redirect()->route('addresspage.index')->with('message', 'data has not added');
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

        $editCategory=AddressPage::findorFail($id);
        return view('website.backend.address-page.edit', compact('editCategory'));
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
        $updateCategory = AddressPage::findOrFail($id);

        if ($request->has('address')){
            $updateCategory->address = $request ->get('address');
        }
        if ($request->has('phone')){
            $updateCategory->phone = $request ->get('phone');
        }
        if ($request->has('email')){
            $updateCategory->email = $request ->get('email');
        }
        if ($request->has('website')){
            $updateCategory->website = $request ->get('website');
        }





         if ($updateCategory->save()){

            return redirect()->route('addresspage.index')->with('message', 'added successfully');
        }

        else{
            return redirect()->route('addresspage.index')->with('message', 'data has not added');
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

        $deleteCategory = AddressPage::findOrfail($id);


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
