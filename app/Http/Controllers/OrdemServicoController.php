<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Servico;
use App\Models\Veiculo;
use App\Models\OrdemServico;
use Illuminate\Http\Request;
use App\Http\Requests\OrdemServicoRequest;
use Barryvdh\DomPDF\Facade\Pdf;

class OrdemServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ordens = OrdemServico::all();
        return view("ordens.index", compact('ordens'));
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

        // Criação da Ordem de Serviço
        $ordem = OrdemServico::create($request->all());

        // Associar serviços à ordem de serviço na tabela pivot
        if ($request->has('servicos')) {
            $ordem->servicos()->attach($request->servicos);
        }

        //dd($request->all());
        return redirect()->route('ordens.index')->with('success', 'Ordem de Serviço N° 00' . $ordem->id . ' gerada com sucesso !!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Carrega a ordem de serviço com as relações de cliente, veículo e serviços
        $ordem = OrdemServico::with(['cliente', 'veiculo', 'servicos'])->findOrFail($id);
        return view('ordens.show', compact('ordem'));
    }


    // public function edit(OrdemServico $ordem)
    // {
    //     return view('ordens.edit', compact('ordem'));
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrdemServicoRequest $request, OrdemServico $ordem)
    {

        $ordem->update($request->all());
        return redirect()->route('ordens.index')->with('success', 'Ordem de Serviço N° 00' . $ordem->id . ' atualizada com sucesso !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ordem = OrdemServico::with(['cliente', 'veiculo', 'servicos'])->findOrFail($id);
        $ordem->delete();
        return redirect()->route('ordens.index')->with('success', 'Ordem de Serviço N° 00' . $ordem->id . ' atualizada com sucesso !!');
    }

    public function selecionarServicos()
    {
        $servicos = Servico::all();
        return response()->json(['servicos' => $servicos]);
    }

    public function gerarPDF(OrdemServico $ordem)
    {
        $ordem->load('cliente', 'veiculo', 'servicos');

        $pdf = Pdf::loadView('ordens.pdf', compact('ordem'));
        return $pdf->download('ordem_servico_00' . $ordem->id . '.pdf');
    }
}
