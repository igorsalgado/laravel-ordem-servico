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
        $ordemServico = OrdemServico::all();
        return view("ordem-servicos.index", compact("ordemservico"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $clientes = Cliente::all();
        $veiculos = collect();
        $servicos = Servico::all();

        return view("ordem-servicos.create", compact('clientes', 'veiculos', 'servicos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrdemServicoRequest $request)
    {
        OrdemServico::create($request->all());
        return redirect()->route('ordem-servico.index')->with('success', 'Ordem de Serviço N° X gerada com sucesso !!');
    }

    /**
     * Display the specified resource.
     */
    public function show(OrdemServico $ordemServico)
    {
        return view('ordem-servicos.show', compact('ordemServico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrdemServico $ordemServico)
    {
        return view('servicos.edit', compact('servico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrdemServicoRequest $request, OrdemServico $ordemServico)
    {

        $ordemServico->update($request->all());
        return redirect()->route('ordem-servico.index')->with('success', 'Ordem de Servico N° X atualizada com sucesso !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrdemServico $ordemServico)
    {
        $ordemServico->delete();
        return redirect()->route('ordem-servico.index')->with('success', 'Ordem de Servico N° X atualizada com sucesso !!');
    }
}
