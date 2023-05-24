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
        $tattoos = Tatto::limit(6)->orderBy('id_tatto', 'desc')->get();

        return view("home", [
            'estilos' => $estilos,
            'tattoos' => $tattoos,
        ]);
    }

    public function styleView(int $id )
    {
        $estilo = Estilo::find($id);
        if ($estilo == Null) return redirect("/");
        return view("style",[
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
