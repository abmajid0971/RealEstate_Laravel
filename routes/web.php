<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\home;
use App\Http\Controllers\Frontend\about;
use App\Http\Controllers\Frontend\agents;
use App\Http\Controllers\Frontend\blogfController;
use App\Http\Controllers\Frontend\blogdetail;
use App\Http\Controllers\Frontend\buysalerent;
use App\Http\Controllers\Frontend\contact;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Property2;
use App\Http\Controllers\Frontend\index;

use App\Http\Controllers\Frontend\prpertydetail;
use App\Http\Controllers\Frontend\register;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Property;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\blogController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/property',[Property2::class,'index']);
route::post('/SaveProperty',[Property2::class,'SaveProperty']);
Route::get('/AllProperties',[Property2::class,'ShowAllProperties']);
Route::get('/editproperty/{id}',[Property2::class,'EditProp']);
Route::post('/updateproperty',[Property2::class,'updateProperty']);
Route::post('/deleteprop/{id}',[Property2::class,'DeletePropertyCommit']);

Route::get('/viewpropertyy/{id}',[Property2::class,'viewpropertyy']);
Route::get('/viewpropertydetail/{id}',[Property2::class,'viewpropertydetail']);
route::get('/buy',[buysalerent::class,'buy']);
route::get('/sale',[buysalerent::class,'sale']);
route::get('/rent',[buysalerent::class,'rent']);

Route::get('/Addblog',[BlogController::class,'index']);
route::post('/SaveBlog',[BlogController::class,'SaveBlog']);
Route::get('/BlogList',[BlogController::class,'BlogList']);
Route::get('/EditBlog/{id}',[BlogController::class,'EditBlog']);
Route::post('/updateBlog',[BlogController::class,'updateBlog']);

route::get('/index',[Index::class,'index']);
route::get('/Featured',[Index::class,'Featured']);
Route::get('/propertydetail/{id}',[Index::class,'propertydetail']);
route::get('/about',[about::class,'index']);
route::get('/aboutbe',[aboutController::class,'index']);
route::post('/SaveAbout',[aboutController::class,'SaveAbout']);



// Route::get('/property',[Property::class,'index']);
// route::post('/SaveProperty',[Property::class,'SaveProperty']);


// Route::get('/AllProperties',[Property::class,'ShowAllProperties']);
// Route::get('/editproperty/{id}',[Property::class,'EditProp']);
// Route::post('/updateproperty',[Property::class,'updateProperty']);
// Route::get('/propertydetail/{id}',[Property::class,'propertydetail']);
// Route::post('/deleteproperty',[Property::class,'deleteproperty']);

Route::get('/agent',[AgentController::class,'index']);
Route::get('/Allagents',[AgentController::class,'ShowAllagents']);
route::post('/SaveAgent',[AgentController::class,'SaveAgent']);
route::get('/editagent/{id}',[AgentController::class,'editAgent']);
route::post('/updateagent',[AgentController::class,'updateagent']);


// route::get('i/ndex',[IndexController::class,'index']);
// route::get('/NewUser',[registercontroller::class,'index']);
route::get('/about',[about::class,'index']);
route::get('/agents',[agents::class,'index']);
route::get('/blog',[blogfController::class,'index']);
route::get('/blogdetail/{id}',[blogfController::class,'blogdetail']);

route::get('/contact',[contact::class,'index']);

// route::get('/insert',[registercontroller::class,'index']);
// route::get('/insert',[registercontroller::class,'index']);
// route::get('/User',[UserController::class,'index']);
// route::get('/Home',[HomeController::class,'index']);
// route::get('/Profile',[ProfileController::class,'index']);
// Route::get('/addproperty',[Property::class,'index']);
// route::post('/newproperty',[Property::class,'CreateProperty']);
// route::get('/contact',[contactcontroller::class,'index']);
route::post('/UserRegistration',[registercontroller::class,'UserRegistration']);
Route::get('/PropertiesList',[Property::class,'ViewProperty']);
Route::get('/EditProperty/{id}',[Property::class,'EditProperty']);
Route::get('/DeleteProperty/{id}',[Property::class,'DeleteProperty']);
Route::get('/admin', function () {
    return view('admin.dashboard');

});
// Route::get('/addproperty',[Property::class,'addproperty']);
Route::get('/addproperty1', function () {
    return view('Backend.PropertyManagement.Createproperty1');

});
