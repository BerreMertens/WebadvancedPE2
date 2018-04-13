<?php

namespace App\Http\Controllers;

use App\Antwoord;
use Illuminate\Support\Str;
use App\Locatie;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class AntwoordController extends Controller
{
    public function showLocationToAddAnswer($id)
    {
        $locatie = locatie::find($id);

        Cookie::queue(Cookie::make('token2', \Illuminate\Support\Str::random(99),time()+60*60*24*365));

        return view('antwoorden.antwoordAanmaken', compact('locatie'));
    }

    public function create($id)
    {



        $antwoord = new Antwoord();
        $antwoord -> score = request('Score');
        $antwoord -> commentaar = request('Commentaar');
        $antwoord -> locatieId = $id;
        $antwoord -> token = request('token2');
        $antwoord -> save();

        return response('succes.antwoordToegevoegd');

    }

    public function showLocationAndAnswers($id)
    {
        $locatie = locatie::find($id);

        $antwoorden = DB::table('antwoorden')->where('locatieId', $id)->get();

        return view('antwoorden/locatieMetAntwoorden', compact('antwoorden', 'locatie'));
    }

    public function showMyAnswers(){
        //hier vraag ik ze even allemaal op

        $antwoorden = antwoord::where('token',$_COOKIE['token2']);
        $locaties = locatie::all();
        return view('antwoorden.lijstAntwoorden', compact('antwoorden','locaties'));
    }

    public function showAnswer($id){

        $antwoord = antwoord::find($id);
        $locaties = locatie::all();


        return view('antwoorden.antwoordWijzigen', compact('antwoord','locaties'));
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
