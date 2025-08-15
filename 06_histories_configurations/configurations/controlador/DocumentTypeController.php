<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DocumentType\DocumentTypeService;
use App\Models\DocumentType;
use App\Http\Requests\DocumentType\StoreDocumentTypeRequest;
use App\Http\Requests\DocumentType\UpdateDocumentTypeRequest;
use Illuminate\Http\JsonResponse;

/**
 * Controlador para la gestión de tipos de documento.
 * 
 * Expone endpoints para listar, crear, mostrar, actualizar y eliminar tipos de documento.
 * Utiliza DocumentTypeService para la lógica de negocio y aplica middleware para permisos.
 */
class DocumentTypeController extends Controller
{
    
    /**
     * Constructor: inyecta el servicio y aplica los middlewares de permisos.
     */
    public function __construct(private DocumentTypeService $documentTypeService)
    {
        $this->documentTypeService = $documentTypeService;
        $this->middleware('can:document-types.store')->only('store');
        $this->middleware('can:document-types.update')->only('update');
        $this->middleware('can:document-types.destroy')->only('destroy');
        $this->middleware('can:document-types.index')->only('index');
        $this->middleware('can:document-types.show')->only('show');
    }

    /**
     * Lista todos los tipos de documento.
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->documentTypeService->getAll();
    }

    /**
     * Crea o restaura un tipo de documento.
     * @param StoreDocumentTypeRequest $request
     * @return JsonResponse
     */
    public function store(StoreDocumentTypeRequest $request): JsonResponse
    {
        return $this->documentTypeService->storeOrRestore($request->validated());
    }

    /**
     * Muestra un tipo de documento específico.
     * @param DocumentType $documentType
     * @return JsonResponse
     */
    public function show(DocumentType $documentType): JsonResponse
    {
        return response()->json($documentType);
    }

    /**
     * Actualiza un tipo de documento.
     * @param UpdateDocumentTypeRequest $request
     * @param DocumentType $documentType
     * @return JsonResponse
     */
    public function update(UpdateDocumentTypeRequest $request, DocumentType $documentType): JsonResponse
    {
        return $this->documentTypeService->update($documentType, $request->validated());
    }

    /**
     * Elimina (soft delete) un tipo de documento.
     * @param DocumentType $documentType
     * @return JsonResponse
     */
    public function destroy(DocumentType $documentType): JsonResponse
    {
        return $this->documentTypeService->destroy($documentType);
    }
}
