<?php

use App\Http\Controllers\messageController;
use App\Http\Controllers\portfolioController;
use Illuminate\Support\Facades\Route;


/*
Route::get('/', function () {
    $name = "Kenneth";
    return view('home', compact('name'));
})->name('home');

Route::get('/about/', function () {
    return view('about');
})->name('about');
*/
/*Route::get('/portfolio/', function () {
    $portfolio = [

        ['title' => 'Proyecto 1'],
        ['title' => 'Proyecto 2'],
        ['title' => 'Proyecto 3'],
        ['title' => 'Proyecto 4'],

    ];
    return view('portfolio', compact('portfolio'));
})->name('portfolio');
*/
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::get('/portfolio', [portfolioController::class,'index'] )->name('portfolio');
/*Route::get('/contact/', function () {
    return view('contact');
})->name('contact');
*/
/*Route::get('/', function() {
    return "Hola desde inicio";
})->name('home');
*/
/*
Es una buena práctica poner nombres a las rutas, ya que así si tenemos n cantidad de rutas
declaradas, si se requiere un cambio solo hariamos referencia al nombre de la ruta y no a la URI
*/
/*
Route::get('/otro/', function() {
    return "Hola desde otra pagina";
})->name('otro');

Route::get('/otro/pagina', function() {
    return "Hola desde otra pagina demtro de otra pagina";
});

//recibir parametros obligatorios

Route::get('/nombre/{name}', function($name) {
    return "Hola mi nombre es: ". $name;
});

//recibir parametros con valores por defecto

Route::get('/nombre/{nombre?}', function($nombre = "guest") {
    return "Hola mi nombre es: ". $nombre;
});

/*
Route::view('/', 'welcome')->name('home');   ->Si solo retornamos una vista con poca o ninguna informacion
esta opcion es adecuada. Ejemplos: Politica de privacidad, terminos y condiciones.
Es mejor que el clousure get, por cuestiones de rendimiento.
*/

//Ruta resource-> primer parametro recibe nombre del recurso
//segundo paramtro -> nombre del controlador resource
//Route::resource('projects', PortfolioController::class);

//ruta post message controller
Route::post('/contacto', [messageController::class, 'store'])->name('contacto');
