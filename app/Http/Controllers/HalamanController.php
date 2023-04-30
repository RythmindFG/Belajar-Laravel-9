<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    //
    function index(){
        return view("halaman/index");
    }
    function about(){
        return view("halaman/about");
    }
    function contact(){
        $data = [
            'judul' => 'Halaman Contact',
            'kontak' => [
                'nomor_hp' => '082282900023',
                'email' => 'fahrigunawan2323@gmail.com',
                'facebook' => 'https://facebook.com/DarkDeltha23'
            ]
        ]; 
        return view("halaman/contact")
        ->with($data);
    }
}