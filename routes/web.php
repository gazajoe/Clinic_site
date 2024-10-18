<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;



Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function(){
    Route::get('register/form',[AdminController::class,'AdminRegisterForm'])->name('admin.register.form');
    Route::get('login',[AdminController::class,'LoginForm'])->name('login.form');
    Route::post('register',[AdminController::class,'AdminRegister'])->name('admin.register');
    Route::post('login',[AdminController::class,'AdminLogin'])->name('admin.login');
    Route::get('logout',[AdminController::class,'AdminLogout'])->name('admin.logout');
    Route::get('dashboard',[AdminController::class,'Index'])->name('admin.dashboard')->middleware('admin');


Route::prefix('doctor')->group(function(){
    //Doctor
    Route::get('add',[DoctorController::class,'AddDoctor'])->name('add.doctor');
    Route::post('store/doctor',[DoctorController::class,'StoreDoctor'])->name('store.doctor');
    Route::get('view/doctor',[DoctorController::class,'viewdoctor'])->name('view.doctor');
    Route::get('edit/doctor/{id}',[DoctorController::class,'editdoctor'])->name('edit.doctor');
    Route::post('update/doctor/{id}', [DoctorController::class, 'updatedoctor'])->name('update.doctor');
    Route::get('delete/doctor/{id}',[DoctorController::class, 'deletedoctor'])->name('doctor.delete');
    


    //Specialty
    Route::get('add/specialty',[DoctorController::class, 'AddSpecialty'])->name('add.specialty');
    Route::post('store/specialty',[DoctorController::class,'StoreSpecialty'])->name('store.specialty');
    Route::get('specialty/all',[DoctorController::class,'viewspec'])->name('all.specialty');
    Route::get('edit/specialty/{id}',[DoctorController::class, 'editspec'])->name('edit.spec');
    Route::post('update/specialty/{id}',[DoctorController::class,'updatespec'])->name('update.spec');
    Route::get('delete/specialty/{id}',[DoctorController::class,'deletespec'])->name('delete.spec');

    //HOME INPUT

    Route::get('home/page',[HomeController::class,'HomeIndex'])->name('home.index');
    Route::post('store/page',[HomeController::class,'StoreHome'])->name('store.home');
    Route::get('home/details',[HomeController::class,'Homedetails'])->name('home.details');
    Route::get('edit.home/{id}',[HomeController::class,'edithome'])->name('edit.home');
    Route::post('update/home/{id}',[HomeController::class,'updatehome'])->name('update.home');


   
});



Route::prefix('appointment')->group(function(){
    Route::post('store/appointment',[AppointmentController::class,'StoreAppointment'])->name('store.appointment');
    Route::get('view/appointment',[AppointmentController::class,'ViewAppointment'])->name('view.appointment');
    Route::get('approve/appointment/{id}',[AppointmentController::class,'Approve'])->name('approve.appointment');
    Route::get('declined/appointment/{id}',[AppointmentController::class,'Declined'])->name('declined.appointment');
    Route::get('user/cancelled/{id}', [AppointmentController::class,'UserCancelled'])->name('user.cancelled');
    Route::get('approved-appointment',[AppointmentController::class,'ApprovedAppointment'])->name('approved-appointment');
    Route::get('declined-appointment',[AppointmentController::class,'DeclinedAppointment'])->name('declined-appointment');
    


});


Route::prefix('Blog')->group(function(){
    Route::get('add/category',[CategoryController::class,'AddCategory'])->name('add.category');
    Route::post('store/category',[CategoryController::class,'StoreCategory'])->name('store.category');
    Route::get('view/category',[CategoryController::class,'ViewCategory'])->name('view.category');
    Route::get('edit/category/{id}',[CategoryController::class,'EditCategory'])->name('edit.category');
    Route::post('update/category/{id}',[CategoryController::class,'UpdateCategory'])->name('update.category');
    Route::get('delet/category/{id}',[CategoryController::class,'DeleteCategory'])->name('delete.category');

});

Route::prefix('Blog-post')->group(function(){
    Route::get('create/post',[BlogController::class,'create'])->name('create.post');
    Route::post('store/post',[BlogController::class,'store'])->name('store.post');
    Route::get('view/post',[BlogController::class,'viewpost'])->name('blog.post');
    Route::get('edit/post/{id}',[BlogController::class,'editpost'])->name('edit.post');
    Route::post('update/post/{id}',[BlogController::class,'updatepost'])->name('update.post');
    Route::get('delete/post/{id}',[BlogController::class,'deletepost'])->name('delete.post');

});


Route::prefix('home')->group(function(){
    Route::get('user/appointment',[HomeController::class,'UserAppointment'])->name('user.appointment');
    Route::get('blog/details/{id}', [HomeController::class,'BlogDetails'])->name('blog.details');
    Route::get('blog/post',[HomeController::class,'Blog'])->name('blog');
    Route::get('doctor/all',[HomeController::class,'doctor'])->name('doctor.all');


    
    


});

Route::prefix('contact')->group(function(){
    Route::get('page', [ContactController::class,'contactpage'])->name('contact.page');
    Route::post('store',[ContactController::class,'storecontact'])->name('store.contact');
    Route::get('view',[ContactController::class,'view'])->name('view.contact');

});



});

Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
