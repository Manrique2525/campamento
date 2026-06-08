<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CampistaStoreRequest;
use App\Http\Resources\CampistaResource;
use App\Models\Campista;

class CampistaController extends Controller
{
    /**
     * Listado
     */
    public function index()
    {
        $campistas = Campista::with('casa')
            ->orderBy('nombre')
            ->get();

        return CampistaResource::collection(
            $campistas
        );
    }

    /**
     * Crear
     */
    public function store(CampistaStoreRequest $request)
    {
        $campista = Campista::create(
            $request->validated()
        );

        return new CampistaResource(
            $campista->load('casa')
        );
    }

    /**
     * Mostrar
     */
    public function show(Campista $campista)
    {
        return new CampistaResource(
            $campista->load('casa')
        );
    }

    /**
     * Actualizar
     */
    public function update(
        CampistaStoreRequest $request,
        Campista $campista
    ) {
        $campista->update(
            $request->validated()
        );

        return new CampistaResource(
            $campista->load('casa')
        );
    }

    /**
     * Baja lógica
     */
    public function destroy(Campista $campista)
    {
        $campista->update([
            'activo' => false
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Campista desactivado'
        ]);
    }
}