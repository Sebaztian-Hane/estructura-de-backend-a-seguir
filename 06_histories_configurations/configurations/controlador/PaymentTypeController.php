<?php


namespace Modules\HistoriesConfigurations\Configurations\Controlador;

use App\Http\Controllers\Controller;
use Modules\HistoriesConfigurations\Configurations\Servicio\PaymentTypeService;
use Modules\HistoriesConfigurations\Configurations\Modelo\PaymentType;
use Modules\HistoriesConfigurations\Configurations\Requests\StorePaymentTypeRequest;
use Modules\HistoriesConfigurations\Configurations\Requests\UpdatePaymentTypeRequest;
use Illuminate\Http\JsonResponse;

/**
 * Controlador para la gestión de tipos de pago.
 * 
 * Expone endpoints para listar, crear, mostrar, actualizar y eliminar tipos de pago.
 * Utiliza PaymentTypeService para la lógica de negocio y aplica middleware para permisos.
 */
class PaymentTypeController extends Controller
{
    /**
     * Constructor: inyecta el servicio y aplica los middlewares de permisos.
     */
    public function __construct(private PaymentTypeService $paymentTypeService)
    {
        $this->paymentTypeService = $paymentTypeService;
        $this->middleware('can:payment-types.store')->only('store');
        $this->middleware('can:payment-types.update')->only('update');
        $this->middleware('can:payment-types.destroy')->only('destroy');
        $this->middleware('can:payment-types.index')->only('index');
        $this->middleware('can:payment-types.show')->only('show');
        
    }

    /**
     * Lista todos los tipos de pago.
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->paymentTypeService->getAll();
    }

    /**
     * Crea o restaura un tipo de pago.
     * @param StorePaymentTypeRequest $request
     * @return JsonResponse
     */
    public function store(StorePaymentTypeRequest $request): JsonResponse
    {
        return $this->paymentTypeService->storeOrRestore($request->validated());
    }

    /**
     * Muestra un tipo de pago específico.
     * @param PaymentType $paymentType
     * @return JsonResponse
     */
    public function show(PaymentType $paymentType): JsonResponse
    {
        return response()->json($paymentType);
    }

    /**
     * Actualiza un tipo de pago.
     * @param UpdatePaymentTypeRequest $request
     * @param PaymentType $paymentType
     * @return JsonResponse
     */
    public function update(UpdatePaymentTypeRequest $request, PaymentType $paymentType): JsonResponse
    {
        return $this->paymentTypeService->update($paymentType, $request->validated());
    }

    /**
     * Elimina (soft delete) un tipo de pago.
     * @param PaymentType $paymentType
     * @return JsonResponse
     */
    public function destroy(PaymentType $paymentType): JsonResponse
    {
        return $this->paymentTypeService->destroy($paymentType);
    }
}
