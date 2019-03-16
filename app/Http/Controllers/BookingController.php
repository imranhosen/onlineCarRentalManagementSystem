<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Order;
use Illuminate\Http\Request;
use Session;
use Mail;
use App\Customer;
use App\Car;
use App\Service;


class BookingController extends Controller
{
    public function index(){
     return view('front.booking.booking');
    }
    public function showRegisterForm(){
        return view('front.booking.booking-register');
    }

    public function saveCustomerInfo(Request $request ){
             $this->validate($request, [
            'first_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'last_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required',
            'phone_number' => 'required|size:11|regex:/(01)[0-9]{9}/',
            'address' => 'required',
        ]);

       // $carDetails = Car::orderBy('id', 'desc')->get();


        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->phone_number = $request->phone_number;
        $customer->address = $request->address;
        $customer->token = str_random(10);
        $customer->save();


        Session::put('customerId', $customer->id);
        Session::put('customerName', $customer->first_name.' '.$customer->last_name);

//       $data = $customer->toArray();
//
//
//        Mail::send('front.mail.congratulation-mail', $data, function ($message) use ($data) {
//            $message->to($data['email']);
//            $message->subject('Congratulation Mail');
//        });

//          return redirect('/booking-info/');
       // return view ('front.booking.booking-info',  ['cardetails'=>$carDetails]);

        return redirect('/booking');

    }
//    public function signUpConfirmation($token) {
//        $customer = Customer::find($token);
//        $customer->status = 1;
//        $customer->token = ' ';
//        $customer->save();
//    }

    public function customerLogout(){
       Session::forget('customerId');
       Session::forget('customerName');

       return redirect('/');
    }

    public function customerLoginCheck(Request $request){

       $customer = Customer::where('email', $request->email)->first();

       //$carDetails = Car::orderBy('id', 'desc')->get();

       if($customer) {
           if (password_verify($request->password, $customer->password)) {

               Session::put('customerId', $customer->id);
               Session::put('customerName', $customer->first_name.' '.$customer->last_name);

//               return redirect('/booking-info/');
               //return view ('front.booking.booking-info',  ['cardetails'=>$carDetails]);
               return redirect('/fleet');

           } else {
               return redirect('/booking')->with('message', 'Invalid Password');
           }
       }else{
           return redirect('/booking')->with('message', 'Invalid Email');
       }

    }


    public function showBookingInfo($id){
        $carDetails = Car::where('cars.id', $id)->get();
        $services = Service::where('publication_status', 1)->get();
        $drivers = Driver::where('publication_status', 1)->get();
        return view ('front.booking.booking-info', ['cardetails'=>$carDetails, 'services'=>$services, 'drivers'=>$drivers]);
    }

    public function saveOrderInfo(Request $request){

        $order = new Order();
        $order->location = $request->location;
        $order->location_drop_off = $request->location_drop_off;
        $order->option1 = $request->option1;
        $order->option2 = $request->option2;
        $order->input_date = $request->input_date;
        $order->input_time = $request->input_time;
        $order->input_date_2 = $request->input_date_2;
        $order->input_time_2 = $request->input_time_2;
        $order->select_vehicle = $request->select_vehicle;
        $order->select_service = $request->select_service;
        $order->select_driver = $request->select_driver;
        $order->passengers = $request->passengers;
        $order->luggage = $request->luggage;
        $order->carseat = $request->carseat;
        $order->first_name = $request->first_name;
        $order->last_name = $request->last_name;
        $order->mobile_number = $request->mobile_number;
        $order->email = $request->email;
        $order->specialreguests = $request->specialreguests;
        $order->save();

               Session::put('orderId', $order->id);

        return redirect('/successfull');



    }

    public function orderSaved(){
      return view('front.booking.successfull');
    }

    public function manageOrderInfo(){
        $orders = Order::orderBy('id' , 'desc') -> get();
        return view('admin.order.manage-order',['orders'=> $orders]);
    }
    public function deleteOrderInfo($id){
        $orderInfoById = Order::find($id);
        $orderInfoById->delete();

        return redirect('/order/manage-order')->with('message', 'Order info deleted successfully !!!');
    }

}
