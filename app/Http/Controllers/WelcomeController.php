<?php

namespace App\Http\Controllers;
use App\Blog;
use App\Car;

use App\Comment;
use App\Service;
use App\Driver;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){

        $cars = Car::where('publication_status' , 1)->paginate();
        $blogs = Blog::where('publication_status' , 1)->paginate();
        $comments = Comment::orderBy('id' , 'desc') -> get();
        return view('front.home.home-content',['cars'=>$cars , 'blogs'=>$blogs, 'comments'=>$comments]);

    }
    public function about()
    {

        return view('front.About.about');


    }
    public function fleet(){
        $cars = Car::where('publication_status' , 1)->get();
        return view('front.Fleet.fleet',['cars'=>$cars]);

    }
    public function service(){

        $services = Service::where('publication_status', 1)->get();
        return view('front.Services.service',['services'=>$services]);

    }

    public function rate(){

        return view('front.Rates.rate');

    }
    public function driver(){
        $drivers = Driver::where('publication_status', 1)->get();
        return view('front.Drivers.driver', ['drivers'=>$drivers]);

    }
    public function tips(){

        return view('front.Tips.tips');

    }
    public function blog(){

//        $blogs = Blog::where('publication_status' , 1)->paginate();
        return view('front.Blog.blog');

    }
    public function contact(){

        return view('front.Contact.contact');

    }

    public function carDetailsInfo($id){
        $carDetails = Car::where('cars.id', $id)->get();

        //return $carDetails;

        return view('front.Fleet.car-details', ['cardetails'=>$carDetails]);

    }


}
