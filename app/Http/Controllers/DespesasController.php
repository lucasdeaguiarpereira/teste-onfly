<?php

namespace App\Http\Controllers;

use App\Models\Despesas;
use Illuminate\Http\Request;

class DespesasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Despesas::get();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Despesas::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Despesas  $despesas
     * @return \Illuminate\Http\Response
     */
    public function show(Despesas $despesas)
    {
        return Despesas::findOrFail($despesas->id);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Despesas  $despesas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Despesas $despesas)
    {
        //
        $despesa = Precos::findOrFail($despesas->id);
        $despesa->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Despesas  $despesas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Despesas $despesas)
    {
        $despesa = Despesas::findOrFail($despesas->id);
        $despesa->delete();
    }
}
