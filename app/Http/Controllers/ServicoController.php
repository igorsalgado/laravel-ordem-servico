<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;
use App\Http\Requests\ServicoRequest;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servico = Servico::all();
        return view('servicos.index', compact('servico'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servicos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServicoRequest $request)
    {

        Servico::create($request->all());
        return redirect()->route('servicos.index')->with('success', 'Serviço cadastrado com sucesso !!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Servico $servico)
    {
        return view('servicos.show', compact('servico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servico $servico)
    {
        return view('servicos.edit', compact('servico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServicoRequest $request, Servico $servico)
    {

        $servico->update($request->all());
        return redirect()->route('servicos.index')->with('success', 'Serviço atualizado com sucesso !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servico $servico)
    {
        $servico->delete();
        return redirect()->route('servicos.index')->with('success', 'Veiculo removido com sucesso');
    }
}
