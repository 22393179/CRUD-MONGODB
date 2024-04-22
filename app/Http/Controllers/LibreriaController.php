<?php

namespace App\Http\Controllers;

use App\Models\Libreria;
use App\Http\Requests\StoreLibreriaRequest;
use App\Http\Requests\UpdateLibreriaRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class LibreriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $libros = Libreria::all();
        return view('libros', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('createLibros');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLibreriaRequest $request): RedirectResponse
    {

        $request->validate([
            'nombre' => 'required',
            'editorial' => 'required',
            'detalle' => 'required',
        ]);

        Libreria::create($request->all());
        return redirect()->route('libros.index')->with('success', 'Nuevo proyecto creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $libreria = Libreria::findOrFail($id);
        return view('showLibros', compact('libreria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $libreria = Libreria::find($id);
        return view('editLibros', compact('libreria'));
    }

/**
 * Update the specified resource in storage.
 */
    public function update(UpdateLibreriaRequest $request, $id): RedirectResponse
    {
        $request->validate([
            'nombre' => 'required',
            'editorial' => 'required',
            'detalle' => 'required',
        ]);

        $libreria = Libreria::findOrFail($id);
        $libreria->update($request->all());
        return redirect()->route('libros.index')->with('success', 'proyecto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libreria $libreria, $id): RedirectResponse
    {
        $libreria->destroy($id);
        return redirect()->route('libros.index')->with('success', 'proyecto eliminado exitosamente');
    }
}
