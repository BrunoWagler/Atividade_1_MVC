<?php

namespace App\Http\Controllers;

use App\Models\TurmasModel;
use Illuminate\Http\Request;



class TurmasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $turmas = TurmasModel::all();
    
        return view('turmas.turmas', compact('turmas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TurmasModel $turmasModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TurmasModel $turmasModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TurmasModel $turmasModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TurmasModel $turmasModel)
    {
        //
    }
}
