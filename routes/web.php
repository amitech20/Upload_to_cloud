<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


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

Route::get('/upload', function () {
    return view('upload');
});

Route::post('/upload', function (Request $request) {
   // Upload any File to clodinary

$uploadedFileUrl = Cloudinary::uploadFile($request->file('file')->getRealPath(),[
    'folder' => 'Document',
])->getSecurePath();

      return redirect('/upload')
         ->with('flash','Upload was sent successfully');
    
});