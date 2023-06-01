<?php

namespace App\Http\Controllers;

use App\Models\Estilo;
use Illuminate\Http\Request;
use App\Models\Tatto;
use App\Models\Imagens;

class SiteController extends Controller
{

    public function homeView()
    {
        $estilos = Estilo::all();
        $tattoo = Tatto::limit(6)->orderBy('id_tatto', 'desc')->get();
        //$imagens = $tattoo->imagens->first();

        // dd($tattoo->get(4));

        return view("home", [
            'estilos' => $estilos,
            'tattoos' => $tattoo,
        ]);
    }

    public function styleView(int $id)
    {
        $estilo = Estilo::find($id);
        if ($estilo == Null) return redirect("/");
        return view("style", [
            'estilo' => $estilo
        ]);
    }

    public function aboutView()
    {
        return view("about");
    }

    public function commentsView()
    {
        // Alteração de registros
        return view("comments");
    }
}
