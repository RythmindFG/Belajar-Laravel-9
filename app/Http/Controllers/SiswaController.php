<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    function index(){
        return 'Saya Siswa dari INDEX Controller';
    }

    function detail($id){
        return "Saya Siswa dari Index Controller dengan ID <strong>$id</strong>";
    }
}
