<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Controllers\ManagementUserController;
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
//GET digunakan untuk menampilkan resource bisa berupa Fungsi atau Controller
//Tanda slash ( /login ), artinya kita berada pada halaman utama atau index.
//Didalam return View memanggil langsung ke blade yang bernama 'login'
// Route::get('/login', function () {
//     return view('login');
// });

//POST digunakan untuk mengarahkan form ketika di submit. 
//Request adalah proses menerima atau menangkap data dari inputan POST.
// Route::POST('/login_proses', function (Request $request){
//     dd($request);
// });

//method redirect() digunakan untuk peralihan URI lama ke URI baru
//GET digunakan untuk menampilkan resource bisa berupa Fungsi atau Controller
// Route::get('/redirect_route2', function(){
//     return "Redirect Route";
// });
// Route::Redirect('/redirect_route1','/redirect_route2');

//Penjaluran ini menunjukkan bahwa jika variabel id bernilai kosong maka laravel secara otomatis akan mengisi dengan nilai Ameliya
// Route::get('users/{id}', function ($id ="ameliya"){
//     return "Hello " . $id;
// });

//GET digunakan untuk menampilkan resource
//Dengan menggunakan metode where pada penjaluran kita dapat membatasi nilai dari parameter pada url yang dapat diinputkan.
// Route::get('/user/{name}', function ($name = "ameliya") {
//     return "Hello " . $name;
// })->where('name', '[A-Za-z]+');


// Route::get('/user/{name}', function ($name = "ameliya") {
//     return "Hello " . $name;
// })->where('name', '.*');

// Route::get('/pengguna', function() {
//     //generating url
//     $url = route('users',[
//         "id" => $id,
//     ]);
//     //generating redirect
//     return redirect()->route('users', [
//         "id"=> $id,
//     ]);
// })->where('id','.*');


// route::middleware(['auth'])->group(function (){
//     Route::get('/transaksi', function() {
//         return "Ini Transaksi Page";
//     });
// });


// route::namespace('Admin')->group(function(){
//     Route::get('/profile', function() {
//         return "Ini Web Profile";
//     });
// });

// route::domain('laravel.amel.com')->group(function () {
//     Route::get('/test', function(){
//     return "avaible";
//     });
// });

// route::prefix('/admin')->group(function(){
//     Route::get('/dashboard', function() {
//         return "Ini Page /admin/dashboard";
//     });

//     Route::get('/users', function() {
//         return "Ini Page /admin/useers";
//     });

//     Route::get('/product', function(){
//         return "Ini Page /admin/product";
//     });
// });

