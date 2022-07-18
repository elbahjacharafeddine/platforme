<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        return redirect('dashboard');
    }

    public function userManagement(){
        if(Auth::user()->role =="admin"){
            $data =DB::table('users')->where('role','normal user')->get();
            return view('laravel-examples/user-management',compact('data'));
        }
        else{
            return  redirect('dashboard');
        }
    }
    public function index(){
        $data_bac = DB::table('bacs')->get();
        $data_matiere = DB::table('matieres')->get();
        $data_licence = DB::table('licences')->get();
        return view('filiere/create',compact('data_bac','data_matiere','data_licence'));
    }
}
