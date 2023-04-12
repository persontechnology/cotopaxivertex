<?php

use App\Models\User;
use App\Notifications\CorreoNoty;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::post('/enviar-contacto', function (Request $request) {
    $request->validate([
        'nombre'=>'required|string|max:255',
        'email'=>'required|string|max:255|email',
        'asunto'=>'required|string|max:255',
        'mensaje'=>'required|string|max:255',
    ]);

    $user=new User();
    $user->email='info@cotopaxi-vertex.com';
    $user->notify(new CorreoNoty($request));
    return redirect()->route('contacto')->with('success','Mensaje Enviado, gracias por preferisnos.');

})->name('enviar-contacto');



Route::prefix('servicios')->name('servicios.')->group(function () {
    Route::get('/trabajos-en-techo', function () {
        return view('servicios.trabajos-techos');
    })->name('trabajos-en-techo');
    Route::get('/trabajos-confinados', function () {
        return view('servicios.trabajos-confinados');
    })->name('trabajos-confinados');
    Route::get('/trabajos-steel-panel', function () {
        return view('servicios.trabajos-step-panel');
    })->name('trabajos-steel-panel');
    Route::get('/trabajos-en-eolicos', function () {
        return view('servicios.trabajos-eolicos');
    })->name('trabajos-eolicos');
    Route::get('/acceso-vertical', function () {
        return view('servicios.acceso-vertical');
    })->name('acceso-vertical');

    Route::get('/recoleccion-muestras-chimeneas', function () {
        return view('servicios.recoleccion-muestras-chimeneas');
    })->name('recoleccion-muestras-chimeneas');

    Route::get('/supervicion-trabajos-alturas', function () {
        return view('servicios.supervicion-trabajos-alturas');
    })->name('supervicion-trabajos-alturas');
    
    Route::get('/limpiesa-silos', function () {
        return view('servicios.limpiesa-silos');
    })->name('limpiesa-silos');


    Route::get('/capacitacion', function () {
        return view('servicios.capacitacion');
    })->name('capacitacion');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
