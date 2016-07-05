<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
/**/
    //return view('welcome');

    public function welcome()
    {
        return view('welcome');
    }

    public function meusite()
    {
        $usuarios = ['Arthur', 'Ayrton', 'Daniel', 'Isaac', 'Gilson', 'Marcos', 'Luís', 'Kádson'];


        return view('meusite', compact('usuarios'));
    }
}
