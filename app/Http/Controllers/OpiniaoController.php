<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Opiniao;
use App\Models\Projeto;
use Auth;

class OpiniaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Opiniao::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $this->middleware('auth');

        $opiniaoUsuario = Opiniao::where('projetos_id', $id)->where('users_id', Auth::user()->id)->get();

        $aprovado = Opiniao::where('projetos_id', $id)->where('aprovado', 1)->get();
        $reprovado = Opiniao::where('projetos_id', $id)->where('aprovado', 0)->get();

        return view('opiniao.create', [
            'projeto' => Projeto::find($id),
            'opiniaoUsuario' => $opiniaoUsuario->first(),
            'aprovado' => $aprovado->count(),
            'reprovado' =>  $reprovado->count()]
        );
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

        $opiniao = new Opiniao();

        $opiniao->projetos_id = $request->projeto;
        $opiniao->aprovado = $request->aprovado;
        $opiniao->users_id = Auth::user()->id;

        $sucesso = $opiniao->save();

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
        //
        return Opiniao::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


}
