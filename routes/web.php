<?php

use App\Http\Controllers\Bac\BacController;
use App\Http\Controllers\licence\LicenceController;
use App\Http\Controllers\Matiere\MatiereController;
use App\Http\Controllers\Filiere\FiliereController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\User\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::group(['middleware' => 'auth'], function () {



    Route::get('/user-management',[HomeController::class,'userManagement'])->name('user-management');
    Route::get('/user-management/{id}',[InfoUserController::class,'detailUser'])->name('user-detail');
    Route::get('delete/user/{id}',[InfoUserController::class,'deleteUser']);


    Route::post('/user-profile/update',[InfoUserController::class,'updateProfile']);

    Route::get('/', [HomeController::class, 'home']);
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');



	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	



    

    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');


            /** les routes pour charafeddine */
   

            /** fin les routes pour charafeddine */


	

                /* debut les routes de abdessamad* */
    Route::get('/Accueil', function () {return view('session/Accueil');})->name('Accueil');
    Route::get('/inscription',[UserController::class,'index']);
				 /* debut des routes pour entitie bac  * */
    Route::get('bac', [BacController::class,'index'])->name('Gestion_Baccalaureat');
    Route::get('/bac/create',[BacController::class,'create']);
    Route::post('/table/bac/create',[BacController::class,'store']);
    Route::get('/bac/delete/{id}',[BacController::class,'delete']);
    Route::get('/updatebac/{id}',[BacController::class,'edit']);
    Route::post('bac/update/{id}',[BacController::class,'update']);
	          /* fin des routes pour entitie bac* */

				 /* debut des routes pour entitie matiere  * */
	Route::get('matiere', [MatiereController::class,'index'])->name('Gestion_Matieres');
    Route::get('/matiere/create',[MatiereController::class,'create']);
    Route::post('/table/matiere/create',[MatiereController::class,'store']);
    Route::get('/update/{id}',[MatiereController::class,'edit']);
    Route::post('matiere/update/{id}',[MatiereController::class,'update']);
    Route::get('/matiere/delete/{id}',[MatiereController::class,'delete']);
	       /* fin des routes pour entitie matiere* */

		   /* debut des routes pour entitie licence  * */
	Route::get('licence', [LicenceController::class,'index'])->name('Gestion_Licences');
 	Route::get('/licence/create',[LicenceController::class,'create']);
	Route::post('/table/licence/create',[LicenceController::class,'store']);
	Route::get('/updatelicence/{id}',[LicenceController::class,'edit']);
	Route::post('licence/update/{id}',[LicenceController::class,'update']);
	Route::get('/licence/delete/{id}',[LicenceController::class,'delete']);
		    /* fin des routes pour entitie licence* */

                /* debut des routes pour entitie filiere* */
    Route::get('filiere', [FiliereController::class,'index'])->name('Gestion_Filieres');
    Route::get('/filiere/create',[FiliereController::class,'index']);
    Route::post('filiere/create',[FiliereController::class,'create']);
    Route::get('filiere/update/{id}',[FiliereController::class,'update']);

                /* fin les routes de abdessamad* */
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/inscription', [RegisterController::class, 'create']);
    Route::post('/inscription', [RegisterController::class, 'store']);
    Route::get('/Accueil', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});


