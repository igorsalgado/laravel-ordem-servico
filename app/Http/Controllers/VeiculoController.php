<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $veiculos = Veiculo::all();
        return view('veiculos.index', compact('veiculos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('veiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required',
            'modelo_veiculo' => 'required',
            'placa_veiculo' => 'required',
            'ano_veiculo' => 'required',
            'cor_veiculo' => 'required'
        ]);

        Veiculo::create($request->all());
        return redirect()->route('veiculos.index')->with('success', 'Veículo adicionado com sucesso !!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Veiculo $veiculo)
    {
        return view('veiculos.show', compact('veiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Veiculo $veiculo)
    {
        return view('veiculos.edit', compact('veiculo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Veiculo $veiculo)
    {
        $request->validate([
            'cliente_id' => 'required',
            'modelo_veiculo' => 'required',
            'placa_veiculo' => 'required',
            'ano_veiculo' => 'required',
            'cor_veiculo' => 'required'
        ]);

        $veiculo->update($request->all());
        return redirect()->route('veiculos.index')->with('success', 'Veículo atualizado com sucesso !!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Veiculo $veiculo)
    {
        $veiculo->delete();
        return redirect()->route('veiculos.index')->with('success', 'Veiculo removido com sucesso');
    }
}
