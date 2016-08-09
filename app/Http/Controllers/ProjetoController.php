<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Projeto;
use App\Models\Categoria;
use App\Models\Opiniao;
use Auth;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Projeto::all();
    }

    public function search()
    {
        return view('projeto.search', ['projetos' => Projeto::all()]);
    }

    public function aprove($id)
    {
        $aprovado = Opiniao::where('projetos_id', $id)->where('aprovado', 1)->get();
        $reprovado = Opiniao::where('projetos_id', $id)->where('aprovado', 0)->get();

        return view('projeto.aprove',
            ['projeto' => Projeto::find($id),
            'aprovado' => $aprovado->count(),
            'reprovado' =>  $reprovado->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->middleware('auth');

        return view('projeto.create', [ 'categorias' => Categoria::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->middleware('auth');

        $projeto = new Projeto();

        $projeto->titulo = $request->titulo;
        $projeto->descricao = $request->descricao;
        $projeto->categorias_id = $request->categorias_id;
        $projeto->users_id = Auth::user()->id;

        $sucesso = $projeto->save();

        return ['success' => $sucesso];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Projeto::find($id);
    }
}
