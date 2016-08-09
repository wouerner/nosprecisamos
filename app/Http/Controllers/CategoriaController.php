<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Categoria;
use App\Models\Projeto;

class CategoriaController extends Controller
{
    public function search()
    {
        return view('categoria.search', ['categorias' => Categoria::all() ]);
    }

    public function projetos($id)
    {
        return view('categoria.projetos', ['projetos' => Projeto::where('categorias_id', $id)->get()]);
    }
}
