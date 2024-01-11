<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('user.home');
// });

Route::get('/',[UserController::class,'home'])->name('home');

Route::get('about-us',[UserController::class,'about'])->name('about');

Route::get('patinet-montiors',[UserController::class,'patinetmontiors'])->name('patinet-montiors');
Route::get('syringe-pumps',[UserController::class,'syringepumps'])->name('syringe-pumps');
Route::get('cautery',[UserController::class,'cautery'])->name('cautery');
Route::get('ventilator',[UserController::class,'ventilators'])->name('ventilators');
Route::get('ultrasound',[UserController::class,'ultrasound'])->name('ultrasound');
Route::get('crsystem',[UserController::class,'crsystem'])->name('crsystem');
Route::get('x-ray',[UserController::class,'xray'])->name('xray');
Route::get('laparoscopy',[UserController::class,'laparoscopy'])->name('laparoscopy');
Route::get('light-sources',[UserController::class,'lightsources'])->name('lightsources');
Route::get('medical-grade-monitors',[UserController::class,'medicalgrademonitors'])->name('medicalgrademonitors');
Route::get('ultrsound-monitors',[UserController::class,'ultrsoundmonitors'])->name('ultrsoundmonitors');
Route::get('CT-MRI',[UserController::class,'CTMRI'])->name('CTMRI');
Route::get('pressure-injector',[UserController::class,'pressureinjector'])->name('pressureinjector');
Route::get('CT-MRI-Workstation',[UserController::class,'CTMRIWorkstation'])->name('CTMRIWorkstation');
Route::get('medical-equipment',[UserController::class,'medicalequipment'])->name('medicalequipment');

Route::get('our-expertise',[UserController::class,'ourExpertise'])->name('ourExpertise');

Route::get('industry',[UserController::class,'industry'])->name('industry');

Route::get('analytical',[UserController::class,'analytical'])->name('analytical');

Route::get('why-connex',[UserController::class,'whyConnex'])->name('whyConnex');

Route::get('contact-us',[UserController::class,'contact'])->name('contact');



