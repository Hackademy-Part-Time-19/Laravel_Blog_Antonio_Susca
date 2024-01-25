<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/articoli', function () {
    return view('Articoli');
});

Route::get('/Contatti/chisono', function () {
    return view('Contatti', ['Descrizione'=> ' Ciao sono Antonio, classe 91. Amante del design e della musica. Sono Graphic Designer, SMM, Dj e collezionista di vinili.']);
});

Route::get('/', function () {
    return view('home', ['TitoloBlog'=> 'Il mio primo blog laravel']);
});

Route::get('/articoli',function(){


    $articoli = [0 =>['titolo'=> 'Articolo 1', 'descrizione'=>'GalaxyS13','nome'=>'Samsung'],
    1=> ['titolo'=> 'Articolo 2', 'descrizione'=>'15pro','nome'=>'Iphone'],
    2=>['titolo'=> 'Articolo 3', 'descrizione'=>'Pro Retina 16"','nome'=>'Macbook'],
    3=>['titolo'=> 'Articolo 4', 'descrizione'=>'Impermeabile','nome'=>'Apple Watch']
];

    return view('articoli',['articoli'=> $articoli ,'titolo' => 'titolo effettivo']);


})->name('articoli');


Route::get('/Articolo/articolo/{id}', function ($id) {
$articoli = [0 =>['titolo'=> 'Articolo 1', 'descrizione'=>'GalaxyS13','nome'=>'Samsung'],
    1=> ['titolo'=> 'Articolo 2', 'descrizione'=>'15pro','nome'=>'Iphone'],
    2=>['titolo'=> 'Articolo 3', 'descrizione'=>'Pro Retina 16"','nome'=>'Macbook'],
    3=>['titolo'=> 'Articolo 4', 'descrizione'=>'Impermeabile','nome'=>'Apple Watch']];

return view('Articolo',['articolo'=> $articoli[$id]]);
})->name('articoli.articolo');


