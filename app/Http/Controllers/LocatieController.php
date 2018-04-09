<?php

namespace App\Http\Controllers;

use App\Locatie;
use Illuminate\Http\Request;


class LocatieController extends Controller
{
    public function index()
    {
        return view('locaties.locatie');
    }

    public function showAllLocations()
    {

        $locaties = locatie::all();

        return view('locaties.locaties_lijst', compact('locaties'));
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

        return view('succes.succes');
    }

    public function edit($id)
    {
        $locatie = locatie::find($id);
    }

    public function delete()
    {

    }

}
