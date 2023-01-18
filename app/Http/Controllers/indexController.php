<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as controller;


class indexController extends controller
{
   
    public function home()
    {
        return view('index');
    }
    public function directores()
    {
        return view('directores');
    }
    public function docentes()
    {
        return view('docentes');
    }
    public function personalApoyo()
    {
        return view('personalApoyo');
    }
    public function personalUSAE()
    {
        return view('personalUSAE');
    }
    public function plazaEstatal()
    {
        return view('plazaEstatal');
    }
    public function plazaEstatalPersonal()
    {
        return view('plazaEstatalpersonalapoyo');
    }
    public function plazaFederal()
    {
        return view('plazaFederal');
    }
    public function plazaFederalPersonal()
    {
        return view('plazaFederalpersonalapoyo');
    }

   
}
