<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\ConfiguracionModel;

class NoticiaPublicController extends Controller
{
    public function index()
    {
        // Trae solo las activas y ordenadas por fecha más reciente
        $noticias = Noticia::where('activo', true)
            ->orderBy('fecha', 'desc')
            ->get();

        return view('noticias.index', compact('noticias'));
    }

        public function show($id)
    {
        $config = ConfiguracionModel::first();
        $noticia = Noticia::findOrFail($id);
        return view('noticias.show', compact('noticia','config'));
    }

  public function mostrar_carrsuel($id)
{
    $config = ConfiguracionModel::first();
    $noticia = \App\Models\Noticia::findOrFail($id);
    return view('noticias.index', compact('noticia','config'));
}




}


