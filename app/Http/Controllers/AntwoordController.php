<?php

namespace App\Http\Controllers;

use App\Antwoord;
use App\Locatie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AntwoordController extends Controller
{
    public function showLocationToAddAnswer($id)
    {
        $locatie = locatie::find($id);

        return view('antwoorden.antwoordAanmaken', compact('locatie'));
    }

    public function create($id)
    {
        $antwoord = new Antwoord();
        $antwoord -> score = request('Score');
        $antwoord -> commentaar = request('Commentaar');
        $antwoord -> locatieId = $id;
        $antwoord -> save();

        return view('succes.antwoordToegevoegd');
    }

    public function showLocationAndAnswers($id)
    {
        $locatie = locatie::find($id);

        $antwoorden = DB::table('antwoorden')->where('locatieId', $id)->get();

        return view('antwoorden/locatieMetAntwoorden', compact('antwoorden', 'locatie'));
    }

    public function showMyAnswers(){
        //hier vraag ik ze even allemaal op

        $antwoorden = antwoord::all();

        return view('antwoorden.lijstAntwoorden', compact('antwoorden'));
    }

    public function showAnswer($id){

       /* $antwoord = antwoord::find($id);*/
       /* $locatie = DB::table('locaties')->where('id', $antwoord->locatieId)->get();*/
        /*$antwoord = DB::table('antwoord')
            ->select($antwoord)*/

            $antwoord= DB::table('antwoorden')
                ->select('score,commentaar,locatieId,naam')
                ->leftJoin('locaties ','antwoorden.locatieId', '=','locaties.id')
            ->get();
        return view('antwoorden.antwoordWijzigen', compact('antwoord'));
    }

    public function update($id)
    {

        $antwoord = antwoord::find($id);
        $antwoord -> score = request('Score');
        $antwoord -> commentaar = request('Commentaar');
        $antwoord -> save();

        return view('succes.antwoordGewijzigd');


    }

    public function delete($id)
    {
        $antwoord = antwoord::find($id);
        $antwoord->delete();

        return view('succes.antwoordVerwijderd');
    }
}
