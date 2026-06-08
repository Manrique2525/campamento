<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventoStoreRequest;
use App\Http\Resources\EventoResource;
use App\Models\Evento;

class EventoController extends Controller
{
    /**
     * Listado
     */
    public function index()
    {
        $eventos = Evento::orderBy('fecha_inicio')
            ->get();

        return EventoResource::collection(
            $eventos
        );
    }

    /**
     * Crear
     */
    public function store(EventoStoreRequest $request)
    {
        $evento = Evento::create(
            $request->validated()
        );

        return new EventoResource(
            $evento
        );
    }

    /**
     * Mostrar
     */
    public function show(Evento $evento)
    {
        return new EventoResource(
            $evento
        );
    }

    /**
     * Actualizar
     */
    public function update(
        EventoStoreRequest $request,
        Evento $evento
    ) {
        $evento->update(
            $request->validated()
        );

        return new EventoResource(
            $evento
        );
    }

    /**
     * Baja lógica
     */
    public function destroy(Evento $evento)
    {
        $evento->update([
            'activo' => false
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Evento desactivado'
        ]);
    }
}