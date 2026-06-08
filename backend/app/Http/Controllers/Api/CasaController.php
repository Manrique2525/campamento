<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CasaStoreRequest;
use App\Http\Resources\CasaResource;
use App\Models\Casa;
use Illuminate\Http\Request;

class CasaController extends Controller
{
    /**
     * Listado
     */
    public function index()
    {
        $casas = Casa::orderBy('nombre')
            ->get();

        return CasaResource::collection(
            $casas
        );
    }

    /**
     * Crear
     */
    public function store(CasaStoreRequest $request)
    {
        $casa = Casa::create([
            'nombre' => $request->nombre,
            'color' => $request->color,
        ]);

        return new CasaResource(
            $casa
        );
    }

    /**
     * Mostrar
     */
    public function show(Casa $casa)
    {
        return new CasaResource(
            $casa
        );
    }

    /**
     * Actualizar
     */
    public function update(
        CasaStoreRequest $request,
        Casa $casa
    ) {
        $casa->update([
            'nombre' => $request->nombre,
            'color' => $request->color,
        ]);

        return new CasaResource(
            $casa
        );
    }

    /**
     * Eliminar (baja lógica)
     */
    public function destroy(Casa $casa)
    {
        $casa->update([
            'activo' => false
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Casa desactivada'
        ]);
    }
}