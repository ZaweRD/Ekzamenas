<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
       return view('pages.about');
    }
    public function contacts()
    {
       return view('pages.contacts');
    }
    public function paslaugos()
    {
       return view('paslaugos.paslaugos');
    }
    public function automobiliai()
    {
        return view('paslaugos.automobiliai');
    }
    public function autobusai()
    {
        return view('paslaugos.autobusai');
    }
    public function dviraciai()
    {
        return view('paslaugos.dviraciai');
    }
    public function lektuvai()
    {
        return view('paslaugos.lektuvai');
    }
    public function atsilepimai()
    {
        return view('atsilepimai');
    }
    public function naujas_atsilepimas()
    {
        return view('naujas-atsilepimas');
    }
}
