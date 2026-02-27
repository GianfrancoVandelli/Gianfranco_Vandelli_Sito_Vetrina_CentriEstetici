<?php

namespace App\Http\Controllers;

class PublicController extends Controller
{
    public function home()
    {
        return view ('home');
    }
    public function centroEstetico() 
    { 
        return view('pages.centro-estetico'); 
    } 
    public function trattamenti() 
    { 
        return view('pages.trattamenti'); 
    } 
    public function promozioni() { 
        return view('pages.promozioni'); 
    } 
    public function contatti() { 
        return view('pages.contatti'); 
    }
}