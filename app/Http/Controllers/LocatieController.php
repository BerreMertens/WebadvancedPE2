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

    }

    public function showLocation(Locatie $locatie)
    {

    }

    public function create()
    {
        $locatie = new Locatie();
        $locatie -> naam = request('Naam');
        $locatie -> save();

        return view('succes.succes');
    }

    public function modify()
    {

    }

    public function delete()
    {

    }

}
