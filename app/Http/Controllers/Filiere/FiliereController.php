<?php

namespace App\Http\Controllers\Filiere;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bac;
use App\Models\Matiere;
use App\Models\Licence;
use App\Models\Filiere;
use Illuminate\Support\Facades\DB;

class FiliereController extends Controller
{


    public function create(Request $request){
        $filiere = new Filiere;
        $filiere->name = $request->filiere_name;
        $filiere->save();

        $last_filiere = Filiere::orderBy('created_at','desc')->first();
        $checkbox_bac = $request->checkbox_bac;
        $lent = sizeof($checkbox_bac);
        for($i =0;$i<$lent;$i++){
            $bonus = "bonus".$checkbox_bac[$i];
            $last_filiere->bacs()->attach($checkbox_bac[$i],['bonus_bac' =>$request->$bonus]);
        }

        return redirect('filiere/create');
    }

    public function index(){
        $data_bac = DB::table('bacs')->get();
        $data_matiere = DB::table('matieres')->get();
        $data_licence = DB::table('licences')->get();
        return view('filiere/create',compact('data_bac','data_matiere','data_licence'));
    }
}
