<?php

namespace Modules\HistoriesConfigurations\Configurations\Controlador;

use App\Http\Controllers\Controller;
use Modules\HistoriesConfigurations\Configurations\Servicio\PredeterminedPriceService;
use Modules\HistoriesConfigurations\Configurations\Modelo\PredeterminedPrice;
use Modules\HistoriesConfigurations\Configurations\Requests\StorePredeterminedPriceRequest;
use Modules\HistoriesConfigurations\Configurations\Requests\UpdatePredeterminedPriceRequest;
use Illuminate\Http\JsonResponse;

/**
 * Controlador para la gestión de precios predeterminados.
 * 
 * Expone endpoints para listar, crear, mostrar, actualizar y eliminar precios predeterminados.
 * Utiliza PredeterminedPriceService para la lógica de negocio y aplica middleware para permisos.
 */
class PredeterminedPricesController extends Controller
{
    /**
     * Constructor: inyecta el servicio y aplica los middlewares de permisos.
     */
    public function __construct(private PredeterminedPriceService $predeterminedPriceService)
    {
        $this->predeterminedPriceService = $predeterminedPriceService;
        $this->middleware('can:predetermined-prices.store')->only('store');
        $this->middleware('can:predetermined-prices.update')->only('update');
        $this->middleware('can:predetermined-prices.destroy')->only('destroy');
        $this->middleware('can:predetermined-prices.index')->only('index');
        $this->middleware('can:predetermined-prices.show')->only('show');
    }

    /**
     * Lista todos los precios predeterminados.
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->predeterminedPriceService->getAll();
    }

    /**
     * Crea o restaura un precio predeterminado.
     * @param StorePredeterminedPriceRequest $request
     * @return JsonResponse
     */
    public function store(StorePredeterminedPriceRequest $request): JsonResponse
    {
        return $this->predeterminedPriceService->storeOrRestore($request->validated());
    }

    /**
     * Muestra un precio predeterminado específico.
     * @param PredeterminedPrice $predeterminedPrice
     * @return JsonResponse
     */
    public function show(PredeterminedPrice $predeterminedPrice): JsonResponse
    {
        return response()->json($predeterminedPrice);
    }

    /**
     * Actualiza un precio predeterminado.
     * @param UpdatePredeterminedPriceRequest $request
     * @param PredeterminedPrice $predeterminedPrice
     * @return JsonResponse
     */
    public function update(UpdatePredeterminedPriceRequest $request, PredeterminedPrice $predeterminedPrice): JsonResponse
    {
        return $this->predeterminedPriceService->update($predeterminedPrice, $request->validated());
    }

    /**
     * Elimina (soft delete) un precio predeterminado.
     * @param PredeterminedPrice $predeterminedPrice
     * @return JsonResponse
     */
    public function destroy(PredeterminedPrice $predeterminedPrice): JsonResponse
    {
        return $this->predeterminedPriceService->destroy($predeterminedPrice);
    }
}