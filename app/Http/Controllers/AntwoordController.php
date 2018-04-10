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

    public function delete($id)
    {
        $antwoord = antwoord::find($id);
        $antwoord->delete();

        return view('succes.antwoordVerwijderd');
        return Redirect::to('locatie');
    }
}
