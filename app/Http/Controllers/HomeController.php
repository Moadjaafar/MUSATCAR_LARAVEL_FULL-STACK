<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\cars;
use App\Models\CarImage;
use App\Models\rental_bookings;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerEmail;

class HomeController extends Controller
{
    public function Index(){
        $Cars=Cars::latest()->get();
        return view('user_pages.home',compact('Cars'));
    }
    public function Get_Cars_List(){
        $Cars=Cars::latest()->paginate(3);
        return view('user_pages.cars_list',compact('Cars'));
    }
    public function Car_Details_Form($id){
        $Cars_info=Cars::findOrFail($id);
        $images=CarImage::where('car_id',$id)->pluck('image_path')->toArray();
        return view('user_pages.booking',compact('Cars_info','images'));
    }
    public function Book_Car_date(Request $request){
        $request->validate([
            'car_id' => 'required',
            'User_phone' => 'required',
            'user_name' => 'required',
            'pickup_date' => 'required',
            'return_date' => 'required'    
        ]);
        rental_bookings::insert([
            'car_id'=>$request->car_id,
            'User_phone' => $request->User_phone,
            'user_name' => $request->user_name,
            'pickup_date' => $request->pickup_date,
            'return_date' => $request->return_date,
            'pickup_Time' => $request->pickup_Time,
            'return_Time' => $request->return_Time
        ]);
        $Cars_info=Cars::findOrFail($request->car_id);
        $images=CarImage::where('car_id',$request->car_id)->pluck('image_path')->toArray();
        $data = [
            'User_phone' => $request->User_phone,
            'user_name' => $request->user_name,
            'pickup_date' => $request->pickup_date,
            'return_date' => $request->return_date,
            'Cars_info' => $Cars_info->model
        ];

        $this->sendmaile($data);
        Alert::success('Thank you for choosing us !', 'We will contact you as soon as possible');

        $Cars=Cars::paginate(8);
        return view('user_pages.cars_list',compact('Cars'));

    }
    public function sendmaile($data){
        $recipient = 'moadjaafar15@gmail.com';
        $subject = 'You have a new client '. $data['user_name'];
        $body = 'Client Name: ' . $data['user_name'] . "\nClient Phone: " . $data['User_phone'] . "\nClient Car: " . $data['Cars_info'] . "\nPickup Date: " . $data['pickup_date'] . "\nReturn Date: " . $data['return_date'];

        try {

            Mail::to($recipient)->send(new CustomerEmail($data));


            return response()->json(['message' => 'Email sent successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to send email', 'error' => $e->getMessage()], 500);
        }

    }
    public function Search_for_cars(Request $request){
        $query = Cars::query();

        if ($request->has('lower_price')&&$request->has('highe_price')) {
            $query->whereBetween('price_per_day', [$request->lower_price, $request->highe_price]);
        }
        if ($request->has('car_seat')) {
            $query->where('Seats_nbr' , $request->car_seat);
        }
        $Cars = $query->paginate(8);

        if ($Cars->isEmpty()) {
            Alert::success('Sorry !', 'We do not have car with this requirement');

        }else{

        }
        return view('user_pages.cars_list',compact('Cars'));

    }
}
