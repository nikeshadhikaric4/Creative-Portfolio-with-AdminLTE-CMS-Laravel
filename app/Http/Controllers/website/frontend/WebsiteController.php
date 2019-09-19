<?php

namespace App\Http\Controllers\website\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\website\backend\AboutPage;
use App\Models\website\backend\AddressPage;
use App\Models\website\backend\Blog;
use App\Models\website\backend\BlogCategory;
use App\Models\website\backend\FashionVideo;
use App\Models\website\backend\FashionVideoCategory;
use App\Models\website\backend\Slider;
use App\Models\website\backend\SliderCategory;

class WebsiteController extends Controller
{
    public function index(){
        $data['slider']=Slider::all();
        $data['slidercategory']=SliderCategory::all();
        $data['homeslider']=Slider::with(['SliderCategory' => function ($attachmentQuery) {
            $attachmentQuery->where('title', 'Home Slider');
        }])->get();

        $data['blogcategory']=BlogCategory::all();
        $data['blog']=Blog::all();
        $data['homeblog']=Blog::with(['BlogCategory'=>function($attachmentQuery){
            $attachmentQuery->where('title', 'Home Blogs');
        }])->get();

        return view ('website.frontend.home.index', compact('data'));
    }


    public function style(){


        $data['fashionCategory']=FashionVideoCategory::all();

        $data['fashion']=FashionVideo::all();


//         $data['stylehome']=FashionVideo::with(['FashionVideoCategory'=>function($attachmentQuery){
// $attachmentQuery->where('title','Style Home');
//         }])->get();




        $data['slider']=Slider::all();
        $data['slidercategory']=SliderCategory::all();
        $data['styleslider']=Slider::with(['SliderCategory' => function ($attachmentQuery) {
            $attachmentQuery->where('title', 'Style Slider');
        }])->get();



        return view('website.frontend.style.index', compact('data'));


    }


    public function photography(){



        $data['slider']=Slider::all();
        $data['slidercategory']=SliderCategory::all();
        $data['photographySlider']=Slider::with(['SliderCategory' => function ($attachmentQuery) {
            $attachmentQuery->where('title', 'Photography Slider');
        }])->get();

        $data['photographypictures']=Slider::with(['SliderCategory' => function ($attachmentQuery) {
            $attachmentQuery->where('title', 'Photography Pictures');
        }])->get();



        return view('website.frontend.photography.index', compact('data'));


    }

    public function blog(){

        $data['slider']=Slider::all();
        $data['slidercategory']=SliderCategory::all();
        $data['blogslider']=Slider::with(['SliderCategory' => function ($attachmentQuery) {
            $attachmentQuery->where('title', 'Blog Slider');
        }])->get();


        $data['blogcategory']=BlogCategory::all();
        $data['blog']=Blog::all();
        $data['blogpage']=Blog::with(['BlogCategory'=>function($attachmentQuery){
            $attachmentQuery->where('title', 'Blog Page');
        }])->get();

        return view('website.frontend.blog.index', compact('data'));



    }

    public function aboutpage(){

        $data['slider']=Slider::all();
        $data['slidercategory']=SliderCategory::all();
        $data['aboutpageslider']=Slider::with(['SliderCategory' => function ($attachmentQuery) {
            $attachmentQuery->where('title', 'About Slider');
        }])->get();

        $data['about']=AboutPage::all();

        return view('website.frontend.about.index', compact('data'));

    }

    public function contact(){

        $data['slider']=Slider::all();
        $data['slidercategory']=SliderCategory::all();
        $data['contactpageSlider']=Slider::with(['SliderCategory' => function ($attachmentQuery) {
            $attachmentQuery->where('title', 'Contact Slider');
        }])->get();
        $data['contact']=AddressPage::all();

        return view('website.frontend.contact.index', compact('data'));
    }



}
