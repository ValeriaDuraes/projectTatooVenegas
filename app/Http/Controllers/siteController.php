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

        return view("home", [
            'estilos' => $estilos,
            'lastjobs' => $lastjobs,
        ]);
    }

    public function styleView(Request $request)
    {
        $id_estilo = $request -> input('id_estilo');
        $estiloFiltrado = Estilo::find($id_estilo);
        //CRIAR QUERY DE IMAGENS
        //$estiloImagem = Imagens::where('');
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
