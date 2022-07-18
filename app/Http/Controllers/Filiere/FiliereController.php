<?php

namespace App\Http\Controllers\Filiere;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bac;
use App\Models\Matiere;
use App\Models\Licence;
use App\Models\Filiere;

class FiliereController extends Controller
{
 
    public function create(Request $request)
    {
        $filiere = new Filiere;
        $filiere->name = ' Enseignement Primaire';
        $filiere->save();
        
        //Bac
        $bacs = Bac::find([1, 2,3]);
        $bonus_bac=['bonus_bac'=>'6'];
        $filiere->bacs()->attach($bacs,$bonus_bac);

        //matiere
        $matieres = Matiere::find([1, 2,3]);
        $coefficient_matiere=['coefficient_matiere'=>'4'];
        $filiere->matieres()->attach($matieres,$coefficient_matiere);

        //licence
        $licences = Licence::find([1, 2]);
        $bonus_licence=['bonus_licence'=>'3'];
        $filiere->licences()->attach($licences,$bonus_licence);

        return 'Success';
    }
}
