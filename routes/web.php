<?php


use Illuminate\Support\Facades\Route;

use App\Livewire\Home;
use App\Livewire\Informacoes;
use App\Livewire\Projetos;
use App\Livewire\Certificates;
use App\Livewire\Experiences;
use App\Livewire\Paginaprojeto;

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

Route::get('/', Home::class)->name('home');
Route::get('/projetcs', Projetos::class)->name('projects');
Route::get('/informations', Informacoes::class)->name('informations');
Route::get('/certificates', Certificates::class)->name('certificates');
Route::get('/experiences', Experiences::class)->name('experiences');

Route::get('/projetcs/{id}', Paginaprojeto::class)->name('projectpage');