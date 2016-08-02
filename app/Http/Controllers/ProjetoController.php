<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Projeto;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Projeto::all();
    }

    public function search()
    {
        return view('projeto.search', ['projetos' => Projeto::limit(10)->get()]);
    }

    public function find($string)
    {
        $projetos = Projeto::where('titulo', 'LIKE', "%$string%")->get();
        return view('projeto.search', ['projetos' => $projetos]);
    }

    public function aprove($id)
    {
        return view('projeto.aprove', ['projeto' => Projeto::find($id)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projeto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projeto = new Projeto();

        $projeto->titulo = $request->titulo;
        $projeto->descricao = $request->descricao;
        $projeto->categorias_id = $request->categorias_id;

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
        //
        return Projeto::find($id);
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $projeto = Projeto::find($id);

        $projeto->nome = $request->nome;

        $sucesso = $projeto->save();
        return ['success' => $sucesso];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $sucesso = Projeto::destroy($id);
        return ['sucesso' => $sucesso];
    }
}
