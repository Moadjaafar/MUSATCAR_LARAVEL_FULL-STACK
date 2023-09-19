<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marke;
use App\Models\cars;
use App\Models\CarImage;
use App\Models\rental_bookings;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;



class DashboardController extends Controller
{
    //
    public function index(){

        $totalCars = cars::count();
        $totalMarks = Marke::count();
        $totalusers = User::count();
        $totalBookings = rental_bookings::count();
        $totalBookings_pending = rental_bookings::where('status','Pending')->count();
        $totalBookings_canceld = rental_bookings::where('status','Confirmed')->count();;
        $totalBookings_confermd = rental_bookings::where('status','Cancled')->count();;

        return view('Admin.Dashboard',compact('totalCars','totalMarks','totalusers','totalBookings','totalBookings_pending','totalBookings_canceld','totalBookings_confermd'));
    }
    
    public function AddCategory(){

        return view('Admin.Add_Category');
    }
    public function All_Categorys(){
        $category=Marke::all();

        return view('Admin.All_Categorys',compact('category'));
    }
    public function create_marke(Request $request){
        $request->validate([
            'Marke_name'=>'required|unique:markes',
        ]);

        Marke::insert([
            'Marke_name'=>$request->Marke_name
        ]);
        return redirect()->route('Admin.All_Categorys')->with('message','Marke added successfully');
    }
    public function Delete_category($id){
        Marke::findOrFail($id)->delete();
        notyf()->position('x', 'right')->position('y', 'top')->addSuccess('marke deleted successfully');

        return redirect()->route('Admin.All_Categorys')->with('message','Marke Deleted successfully');
    }
    public function Update_category($id){
        $category_info=Marke::findOrFail($id);
        return view('Admin.UpdateCategory',compact('category_info'));
    }
    public function Update_category_data(Request $request){
        $category_id=$request->category_id;

        $request->validate([
            'Marke_name'=>'required'
        ]);

        Marke::findOrFail($category_id)->update([
            'Marke_name'=>$request->Marke_name
        ]);
        notyf()->position('x', 'right')->position('y', 'top')->addSuccess('marke updated successfully');

        return redirect()->route('Admin.All_Categorys')->with('message','Marke Updated successfully');
    }

    ///////////////////////////////////////////////////////////////////////

    public function AddCar(){
        $categories=Marke::latest()->get();
        return view('Admin.Add_Car',compact('categories'));
    }
    public function Store_car_data(Request $request){
        $request->validate([
            'marke_id' => 'required',
            'model' => 'required|string',
            'year' => 'required',
            'color' => 'required|string',
            'price_per_day' => 'required',
            'availability' => 'required',
            'car_images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'Seats_nbr' => 'required|string',
            'Drive_type' => 'required|string',
            'Transmission_type' => 'required',
            'car_images_First' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $marke_name=Marke::where('id',$request->marke_id)->value('marke_name');

        if ($request->hasFile('car_images_First')) {
                // Upload and save each image
            $image = $request->file('car_images_First');
            $imageName =time() . '_' . $image->getClientOriginalName();
            $image->storeAs('car_images_first/', $imageName, 'public');
        }

        $car = Cars::create([
            'marke_id' => $request->marke_id,
            'marke_name' => $marke_name,
            'model' => $request->model,
            'year' => $request->year,
            'color' => $request->color,
            'price_per_day' => $request->price_per_day,
            'availability' => $request->availability,
            'Seats_nbr' => $request->Seats_nbr,
            'Drive_type' => $request->Drive_type,
            'Transmission_type' => $request->Transmission_type,
            'car_images_First' => 'car_images_first/' . $imageName,
        ]);

        Marke::where('id',$request->marke_id)->increment('Cars_count',1);
        $carId = $car->id;
        if ($request->hasFile('car_images')) {
            foreach ($request->file('car_images') as $image) {
                // Upload and save each image
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->storeAs('car_images', $imageName, 'public');
    
                // Create CarImage record
                CarImage::create([
                    'car_id' => $carId,
                    'image_path' => 'car_images/' . $imageName
                ]);
            }
        }
        notyf()->position('x', 'right')->position('y', 'top')->addSuccess('Car created successfully');

        return redirect()->route('Admin.All_Cars')->with('message','Car added successfully');
    }
    public function Update_Car_data(Request $request){
        $request->validate([
            'marke_id' => 'required',
            'Car_id' => 'required',
            'model' => 'required|string',
            'year' => 'required',
            'color' => 'required|string',
            'price_per_day' => 'required',
            'availability' => 'required',
            'Seats_nbr' => 'required|string',
            'Drive_type' => 'required|string',
            'Transmission_type' => 'required',
        ]);
        $marke_name=Marke::where('id',$request->marke_id)->value('marke_name');

        $id_Mark=Cars::where('id',$request->Car_id)->value('marke_id');
        Marke::where('id',$id_Mark)->decrement('Cars_count',1);

        if ($request->hasFile('car_images_First')) {
            $request->validate([
                'car_images_First' => 'image|mimes:jpeg,png,jpg|max:2048'
            ]);
                // Upload and save each image
            $image = $request->file('car_images_First');
            $imageName =time() . '_' . $image->getClientOriginalName();
            $image->storeAs('car_images_first/', $imageName, 'public');
            $imageName='car_images_first/' . $imageName;
        }else{
            $imageName=Cars::where('id',$request->Car_id)->value('car_images_First');
        }

        $car = Cars::findOrFail($request->Car_id)->update([
            'marke_id' => $request->marke_id,
            'marke_name' => $marke_name,
            'model' => $request->model,
            'year' => $request->year,
            'color' => $request->color,
            'price_per_day' => $request->price_per_day,
            'availability' => $request->availability,
            'Seats_nbr' => $request->Seats_nbr,
            'Drive_type' => $request->Drive_type,
            'Transmission_type' => $request->Transmission_type,
            'car_images_First' => $imageName,
        ]);
        Marke::where('id',$request->marke_id)->increment('Cars_count',1);
        $carId = $request->Car_id;
        if ($request->hasFile('car_images')) {

            $request->validate([
                'car_images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);
            CarImage::where('car_id',$request->Car_id)->delete();

            foreach ($request->file('car_images') as $image) {
                // Upload and save each image
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->storeAs('car_images', $imageName, 'public');
    
                // Create CarImage record
                CarImage::create([
                    'car_id' => $carId,
                    'image_path' => 'car_images/' . $imageName
                ]);
            }
        }
        notyf()->position('x', 'right')->position('y', 'top')->addSuccess('Car updated successfully');
        return redirect()->route('Admin.All_Cars')->with('message','Car Updated successfully');
    }

    public function All_Cars(){
        $Cars=Cars::paginate(8);
        
        return view('Admin.All_Cars',compact('Cars'));
    }

    public function Update_Car($id){
        $markes=Marke::latest()->get();
        $car_info=Cars::findOrFail($id);
        return view('Admin.Update-Product',compact('car_info','markes'));
    }
    public function Delete_car($id){
        $mark_id=Cars::where('id',$id)->value('marke_id');
        Cars::findOrFail($id)->delete();
        Marke::where('id',$mark_id)->increment('Cars_count',1);

        $Cars=Cars::paginate(3);
        notyf()->position('x', 'right')->position('y', 'top')->addSuccess('Car deleted successfully');

        return view('Admin.All_Cars',compact('Cars'));
    }
    ////////////////////////////////////////////////////////////////
    public function All_Booking(){
        $Rent_Orders=rental_bookings::orderBy('id', 'desc')->paginate(8);
        return view('Admin.Orders',compact('Rent_Orders'));
    }
    public function All_confrmd_Booking(){
        $status='confirmed';
        $Rent_Orders=rental_bookings::where('status',$status)->get();
        return view('Admin.confirmed_order',compact('Rent_Orders'));
    }
    public function All_cancld_Booking(){
        $status='cancled';
        $Rent_Orders=rental_bookings::where('status',$status)->get();
        return view('Admin.cancled_order',compact('Rent_Orders'));
    }
    public function confrmd_Booking($id){
        $order=rental_bookings::findOrFail($id);
        $order->status='confirmed';
        $order->save();

        $status='confirmed';
        $Rent_Orders=rental_bookings::where('status',$status)->get();
        notyf()->position('x', 'right')->position('y', 'top')->addSuccess('the book confirmed');

        return view('Admin.confirmed_order',compact('Rent_Orders'));
    }
    public function cancld_Booking($id){
        $order=rental_bookings::findOrFail($id);
        $order->status='cancled';
        $order->save();

        $status='cancled';
        $Rent_Orders=rental_bookings::where('status',$status)->get();

        notyf()->position('x', 'right')->position('y', 'top')->addSuccess('the book canceled');

        return view('Admin.cancled_order',compact('Rent_Orders'));
    }
    public function delete_Booking($id){
        $order=rental_bookings::findOrFail($id);
        $order->delete();
        notyf()->position('x', 'right')->position('y', 'top')->addSuccess('the car has been removed');

        $Rent_Orders=rental_bookings::orderBy('id', 'desc')->paginate(8);
        return view('Admin.Orders',compact('Rent_Orders'));
    }


    
}
