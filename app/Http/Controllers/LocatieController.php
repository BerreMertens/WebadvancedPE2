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

    public function update($id)
    {

        $locatie = locatie::find($id);
        $locatie -> naam = request('Naam');
        $locatie > save();

        Session::flash('message', 'Locatie wijzigen gelukt!');
        return Redirct::to('locatie/AlleLocaties');

    }

    public function delete($id)
    {
        $locatie = locatie::find($id);
        $locatie->delete();

        Session::flash('message', 'Locatie verwijderd!');
        return Redirect::to('lcatie/AlleLocaties');
    }

}
