<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use DB;

class ServiceController extends Controller
{
    public function showServiceForm(){
        return view ('admin.service.add-service');
    }

    public  function saveServiceInfo(Request $request){


        $serviceImage = $request->file('car_image');
        $imageName = $serviceImage->getClientOriginalName();
        $directory = 'service-images/';
        $serviceImage->move($directory, $imageName);
        $imageUrl = $directory.$imageName;
        //return 'success';
        //dd($blogImage);

        //return $request->all();

        $service = new Service();
        $service->service_name=$request->service_name;
        $service->service_short_description = $request->service_short_description;
        $service->service_long_description = $request->service_long_description;
        $service->car_image = $imageUrl;
        $service->publication_status=$request->publication_status;

        $service->save();

        return redirect('/service/add-service')->with('message', "Service Info add Successfully");

    }

    public function manageServiceInfo(){
        $serviceInfo = Service::orderBy('id', 'desc')->get();

        $serviceInfo = DB::table('services')
            ->select('services.id','services.service_name','services.service_short_description','services.service_long_description','services.publication_status')
            ->get();

        return view('admin.service.manage-service', ['serviceInfo'=>$serviceInfo]);
    }
    public function unpublishedServiceInfo($id){
        $serviceInfoById = Service::find($id);
        $serviceInfoById->publication_status = 0;
        $serviceInfoById->save();

        return redirect('/service/manage-service')->with('message', 'Service info unpublished successfully !!!');
    }

    public function publishedServiceInfo($id){
        $serviceInfoById = Service::find($id);
        $serviceInfoById->publication_status = 1;
        $serviceInfoById->save();

        return redirect('/service/manage-service')->with('message', 'Service info published successfully !!!');
    }

    public function editServiceInfo($id){
        $service = Service::find($id);
        return view('admin.service.edit-service', ['service'=>$service]);
    }
    public function updateServiceInfo(Request $request){
        $serviceInfoById = Service::find($request->service_id);
        $serviceInfoById->service_name = $request->service_name;
        $serviceInfoById->service_short_description = $request->service_short_description;
        $serviceInfoById->service_long_description = $request->service_long_description;
        $serviceInfoById->publication_status = $request->publication_status;
        $serviceInfoById->save();

        return redirect('/service/manage-service')->with('message', 'Service info updated successfully !!!');
    }

    public function deleteServiceInfo($id){
        $serviceInfoById = Service::find($id);
        $serviceInfoById->delete();

        return redirect('/service/manage-service')->with('message', 'Service info deleted successfully !!!');
    }
    public function detailsServiceInfo($id){
        $serviceDetails = Service::where('services.id', $id)->get();

        //return $carDetails;

        return view('front.Services.service-details', ['servicedetails'=>$serviceDetails]);
    }

}
