<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Global_;

class UserController extends Controller
{




    public function index(){
        $data_bac = DB::table('bacs')->get();
        return view('page-inscription/insc',compact('data_bac'));
    }
    public function index2(Request $request){
        return dd($request->all());
    }


}
