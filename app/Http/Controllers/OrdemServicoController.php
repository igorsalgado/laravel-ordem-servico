<?php

namespace App\Http\Controllers;

use App\Models\OrdemServico;
use Illuminate\Http\Request;

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
    public function create()
    {
        return view("ordem-servicos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_cliente' => 'required',
            'id_veiculo' => 'required',
            'id_servico' => 'required',
            'valor_total' => 'required',
            'data_criacao' => 'required'
        ]);

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
    public function update(Request $request, OrdemServico $ordemServico)
    {
        $request->validate([
            'id_cliente' => 'required',
            'id_veiculo' => 'required',
            'id_servico' => 'required',
            'valor_total' => 'required',
            'data_criacao' => 'required'
        ]);

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
