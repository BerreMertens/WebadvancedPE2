<?php

namespace App\Http\Controllers;

use App\Locatie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LocatieController extends Controller
{
    public function index()
    {
        $locaties = locatie::all();

        return view('locaties.locaties_lijst', compact('locaties'));
    }

    public function indexGebruiker()
    {
        $locaties = locatie::all();

        return view('locaties.locatielijst_gebruiker', compact('locaties'));
    }

    public function createNewLocation()
    {
        return view('locaties.locatieAanmaken');
    }

    public function showLocation($id)
    {
        $locatie = locatie::find($id);

        return view('locaties.showLocatie', compact('locatie'));
    }

    public function create()
    {
        $locatie = new Locatie();
        $locatie -> naam = request('Naam');
        $locatie -> save();

        return view('succes.aanmakenGelukt');
    }

    public function update($id)
    {
        $locatie = locatie::find($id);
        $locatie -> naam = request('Naam');
        $locatie -> save();


        return view('succes.wijzigenGelukt');


    }

    public function delete($id)
    {
        $locatie = locatie::find($id);
        $locatie->delete();

        

        return view('succes.verwijderenGelukt');

    }

}
