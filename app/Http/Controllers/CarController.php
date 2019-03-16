<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Car;
use App\Category;
use Illuminate\Support\Facades\Auth;
use DB;

class CarController extends Controller
{
    public function ShowCarForm(){

        $publishedCategory = Category::where('publication_status', 1)->get();
        return view ('admin.car.add-car', ['publicationCategories'=>$publishedCategory]);

    }

    public function SaveCarForm(Request $request){

        $this->validate($request,[
            'car_name' => 'required|alpha|min:5|max:10'
        ]);

        $carImage = $request->file('car_image');
        $imageName = $carImage->getClientOriginalName();
        $directory = 'car-images/';
        $carImage->move($directory, $imageName);
        $imageUrl = $directory.$imageName;
        //return 'success';
        //dd($blogImage);

        //retu  rn $request->all();

        $car = new Car();
        $car->car_name=$request->car_name;
        $car->author_name= Auth::user()->name;
        $car->category_id=$request->category_id;
        $car->car_description = $request->car_description;
        $car->car_image = $imageUrl;
        $car->car_price =$request->car_price;
        $car->publication_status=$request->publication_status;

        $car->save();

        return redirect('/car/add-car')->with('message', "Car Info add Successfully");

    }
    public function manageCarInfo(){
        $carInfo = Car::orderBy('id', 'desc')->get();

        $carInfo = DB::table('cars')
            ->join('categories','cars.category_id', '=', 'categories.id')
            ->select('cars.id','cars.car_name','cars.author_name','cars.car_description','cars.publication_status','cars.category_id','categories.category_name')
            ->get();

        return view('admin.car.manage-car', ['carInfo'=>$carInfo]);
    }

    public function unpublishedCarInfo($id){
        $carInfoById = Car::find($id);
        $carInfoById->publication_status = 0;
        $carInfoById->save();

        return redirect('/car/manage-car')->with('message', 'Car info unpublished successfully !!!');
    }

    public function publishedCarInfo($id){
        $carInfoById = Car::find($id);
        $carInfoById->publication_status = 1;
        $carInfoById->save();

        return redirect('/car/manage-car')->with('message', 'Car info published successfully !!!');
    }

    public function editCarInfo($id){
        $car = Car::find($id);
        return view('admin.car.edit-car', ['car'=>$car]);
    }

    public function updateCarInfo(Request $request){
        $carInfoById = Car::find($request->car_id);
        $carInfoById->car_name = $request->car_name;
        $carInfoById->car_description = $request->car_description;
        $carInfoById->publication_status = $request->publication_status;
        $carInfoById->save();

        return redirect('/car/manage-car')->with('message', 'Car info updated successfully !!!');
    }

    public function deleteCarInfo($id){
        $carInfoById = Car::find($id);
        $carInfoById->delete();

        return redirect('/car/manage-car')->with('message', 'Car info deleted successfully !!!');
    }




}
