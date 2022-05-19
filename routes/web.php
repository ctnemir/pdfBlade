<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Storage;
use \Illuminate\Support\Str;
use \Barryvdh\DomPDF\Facade\Pdf;


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
    return view('pdf');
    /*$pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf');
    return $pdf->download('deneme.pdf');*/
});
Route::post('/pdf',function (\Illuminate\Http\Request $request){
    try {
//    return json_decode($request->datas);//json_decode($request->datas);
        $random = Str::random();
        Storage::put('public/pdf/'.$random.'.blade.php',$request->code);
        $pdf = Pdf::loadView($random,collect(json_decode($request->datas))->toArray());
        return $pdf->download($random.'.pdf');
    }catch (Exception){
        return back();
    }
});
Route::get('test',function (){
    return view('deneme1');
    return \Illuminate\Support\Facades\Storage::get('public/pdf/deneme1.blade.php');
});
