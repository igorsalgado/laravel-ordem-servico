<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Servico;
use App\Models\Veiculo;
use App\Models\OrdemServico;
use Illuminate\Http\Request;
use App\Http\Requests\OrdemServicoRequest;

class OrdemServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ordem = OrdemServico::all();
        return view("ordens.index", compact('ordem'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $clientes = Cliente::all();
        $veiculos = collect();
        $servicos = Servico::all();

        return view("ordens.create", compact('clientes', 'veiculos', 'servicos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrdemServicoRequest $request)
    {
        OrdemServico::create($request->all());
        return redirect()->route('ordens.index')->with('success', 'Ordem de Serviço N° X gerada com sucesso !!');
    }

    /**
     * Display the specified resource.
     */
    public function show(OrdemServico $ordem)
    {
        return view('ordens.show', compact('ordem'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrdemServico $ordem)
    {
        return view('ordens.edit', compact('ordem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrdemServicoRequest $request, OrdemServico $ordem)
    {

        $ordem->update($request->all());
        return redirect()->route('ordens.index')->with('success', 'Ordem de Servico N° X atualizada com sucesso !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrdemServico $ordem)
    {
        $ordem->delete();
        return redirect()->route('ordens.index')->with('success', 'Ordem de Servico N° X atualizada com sucesso !!');
    }

    public function selecionarServicos()
    {
        $servicos = Servico::all();
        return response()->json(['servicos' => $servicos]);
    }
}
