<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;
use DB;

class DriverController extends Controller
{
    public function showDriverForm(){
        return view ('admin.driver.add-driver');
    }

    public  function saveDriverInfo(Request $request){


        $driverImage = $request->file('driver_image');
        $imageName = $driverImage->getClientOriginalName();
        $directory = 'driver-images/';
        $driverImage->move($directory, $imageName);
        $imageUrl = $directory.$imageName;
        //return 'success';
        //dd($blogImage);

        //return $request->all();

        $driver = new Driver();
        $driver->driver_name=$request->driver_name;
        $driver->driver_type=$request->driver_type;
        $driver->driver_description = $request->driver_description;
        $driver->driver_image = $imageUrl;
        $driver->publication_status=$request->publication_status;
        //return $request->all();

        $driver->save();

        return redirect('/driver/add-driver')->with('message', "Driver Info add Successfully");

    }

    public function manageDriverInfo(){
        $driverInfo = Driver::orderBy('id', 'desc')->get();

        $driverInfo = DB::table('drivers')
            ->select('drivers.id','drivers.driver_name','drivers.driver_type','drivers.driver_description','drivers.publication_status')
            ->get();

        return view('admin.driver.manage-driver', ['driverInfo'=>$driverInfo]);
    }
    public function unpublishedDriverInfo($id){
        $driverInfoById = Driver::find($id);
        $driverInfoById->publication_status = 0;
        $driverInfoById->save();

        return redirect('/driver/manage-driver')->with('message', 'Driver info unpublished successfully !!!');
    }

    public function publishedDriverInfo($id){
        $driverInfoById = Driver::find($id);
        $driverInfoById->publication_status = 1;
        $driverInfoById->save();

        return redirect('/driver/manage-driver')->with('message', 'Driver info published successfully !!!');
    }

    public function editDriverInfo($id){
        $driver = Driver::find($id);
        return view('admin.driver.edit-driver', ['driver'=>$driver]);
    }
    public function updateDriverInfo(Request $request){
        $driverInfoById = Driver::find($request->driver_id);
        $driverInfoById->driver_name = $request->driver_name;
        $driverInfoById->driver_type = $request->driver_type;
        $driverInfoById->driver_description = $request->driver_description;
        $driverInfoById->publication_status = $request->publication_status;
        $driverInfoById->save();

        return redirect('/driver/manage-driver')->with('message', 'Driver info updated successfully !!!');
    }

    public function deleteDriverInfo($id){
        $driverInfoById = Driver::find($id);
        $driverInfoById->delete();

        return redirect('/driver/manage-driver')->with('message', 'Driver info deleted successfully !!!');
    }

}
