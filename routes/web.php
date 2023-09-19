<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','role:user'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth','role:admin')->group(function(){

    Route::controller(DashboardController::class)->group(function(){
        Route::get('/Admin/Dashboard','index')->name('Admin.Dashboard');
            /*Marke_Routs*/
        Route::get('/Admin/Add-Category','AddCategory')->name('Admin.Add_Category');
        Route::Post('/Admin/Create_Cat','create_marke')->name('create_marke');
        Route::get('/Admin/All-Categorys','All_Categorys')->name('Admin.All_Categorys');
        Route::get('/Admin/Update_Cat/{id}','Update_category')->name('Update_category');
        Route::get('/Admin/Delete-Cat/{id}','Delete_category')->name('Delete_category');
        Route::Post('/Admin/Update-CatUpda','Update_category_data')->name('Update_category_data');

        Route::get('/Admin/Add-Car','AddCar')->name('Admin.Add_Car');
        Route::Post('/Admin/Create-Car','Store_car_data')->name('create_car');
        Route::get('/Admin/All-Cars','All_Cars')->name('Admin.All_Cars');
        Route::get('/Admin/Update_Car/{id}','Update_Car')->name('Update_Car');
        Route::Post('/Admin/Update-Car','Update_Car_data')->name('Update_Car_data');

        Route::get('/Admin/All-Bookings','All_Booking')->name('Admin.Orders');

        Route::get('/Admin/Confirmed-Bookings','All_confrmd_Booking')->name('All_confrmd_Booking');
        Route::get('/Admin/Canceled-Bookings','All_cancld_Booking')->name('All_cancld_Booking');

            /*Product_Routs*/
        Route::get('/Admin/delete-car/{id}','Delete_car')->name('Delete_car');
        Route::get('/Admin/delete_marke/{id}','Delete_category')->name('Delete_category');


            /*Orders_Routs*/
        Route::get('/Admin/Confirm-Bookings/{id}','cancld_Booking')->name('cancld_Booking');
        Route::get('/Admin/Cancel-Bookings/{id}','confrmd_Booking')->name('confrmd_Booking');
        Route::get('/Admin/Delete-Bookings/{id}','delete_Booking')->name('delete_Booking');

    });

});
Route::Post('/Book-Car',[HomeController::class, 'Book_Car_date'])->name('Book_Car_date');
Route::get('/start-chat', [DashboardController::class, 'startChatWithBot'])->name('startChatWithBot');

Route::get('/', [HomeController::class, 'Index'])->name('user_pages.home');
Route::get('/Cars-List', [HomeController::class, 'Get_Cars_List'])->name('Cars_List');


Route::get('/Car-Details/{id}', [HomeController::class, 'Car_Details_Form'])->name('Cars_info');
// Route::get('/', [HomeController::class, 'Index'])->name('default');


Route::Post('/Search-Car',[HomeController::class, 'Search_for_cars'])->name('Search_for_cars');
Route::get('/LogOut', [AuthenticatedSessionController::class, 'destroy'])->name('LogOut');


require __DIR__.'/auth.php';
