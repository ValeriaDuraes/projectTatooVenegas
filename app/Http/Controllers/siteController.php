<?php

namespace App\Http\Controllers;

use App\Models\Estilo;
use Illuminate\Http\Request;
use App\Models\Tatto;

class SiteController extends Controller
{

    public function homeView()
    {

        $estilos = Estilo::all();
        $lastjobs = Tatto::limit(6)->orderBy('id_tatto', 'desc')->get();
        dd($lastjobs);
        return view("home");
    }

    public function styleView()
    {
        $estilosFiltrados = Estilo::where('id_estilo')->orderBy('id', 'desc')->get();
        return view("style");
    }

    public function aboutView()
    {
        // Alteração de registros
        return view("about");
    }

    public function commentsView()
    {
        // Alteração de registros
        return view("comments");
    }
}
