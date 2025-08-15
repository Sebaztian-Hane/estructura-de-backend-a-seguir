# Servicios

Los servicios de este módulo encapsulan la lógica de negocio de cada entidad, manteniendo los controladores delgados y reutilizables. Cada uno está documentado con PHPDoc:

- **DocumentTypeService**: Gestiona la lógica para tipos de documento (crear, restaurar, actualizar, eliminar, listar). Valida unicidad, soft delete y restauración.
- **PaymentTypeService**: Gestiona la lógica para tipos de pago (crear, restaurar, actualizar, eliminar, listar). Valida unicidad y soft delete.
- **PredeterminedPriceService**: Gestiona la lógica para precios predeterminados (crear, restaurar, actualizar, eliminar, listar). Valida unicidad y soft delete.

Los servicios devuelven siempre respuestas JSON apropiadas para la API y centralizan las reglas de negocio.
# Requests (Form Requests)

Los Form Requests de este módulo validan los datos de entrada para la creación y actualización de las entidades principales. Cada uno está documentado con PHPDoc y define reglas y mensajes personalizados:

- **StoreDocumentTypeRequest**: Valida la creación de tipos de documento (nombre único, requerido, descripción opcional).
- **StorePaymentTypeRequest**: Valida la creación de tipos de pago (nombre único, requerido, descripción opcional).
- **StorePredeterminedPriceRequest**: Valida la creación de precios predeterminados (nombre único, requerido, precio numérico opcional).
- **UpdateDocumentTypeRequest**, **UpdatePaymentTypeRequest**, **UpdatePredeterminedPriceRequest**: Validan la actualización de cada entidad.

Cada Form Request asegura que los datos enviados a la API cumplan con las reglas de negocio y formato requeridas.
# Modelos

Los modelos de este módulo representan las entidades principales de la configuración de historiales clínicos y están documentados con PHPDoc:

- **DocumentType**
  - Representa los tipos de documento.
  - Campos: `id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`.
  - Relaciones: usuarios, pacientes, terapeutas.
  - Permite soft deletes y factorías.

- **PaymentType**
  - Representa los tipos de pago.
  - Campos: `id`, `code`, `name`, `created_at`, `updated_at`, `deleted_at`.
  - Relaciones: citas (appointments).
  - Permite soft deletes y factorías.

- **PredeterminedPrice**
  - Representa precios predeterminados para servicios.
  - Campos: `id`, `name`, `price`, `created_at`, `updated_at`, `deleted_at`.
  - Relaciones: citas (appointments).
  - Permite soft deletes y factorías.

Cada modelo está documentado con PHPDoc en la clase y en sus métodos, describiendo su funcionalidad, campos y relaciones.
# Controladores

Los controladores de este módulo exponen endpoints RESTful para gestionar las entidades principales:

- **DocumentTypeController**: Permite listar, crear, mostrar, actualizar y eliminar tipos de documento. Utiliza el servicio DocumentTypeService y aplica middleware para control de permisos.
- **PaymentTypeController**: Permite listar, crear, mostrar, actualizar y eliminar tipos de pago. Utiliza el servicio PaymentTypeService y aplica middleware para control de permisos.
- **PredeterminedPricesController**: Permite listar, crear, mostrar, actualizar y eliminar precios predeterminados. Utiliza el servicio PredeterminedPriceService y aplica middleware para control de permisos.

Cada controlador está documentado con PHPDoc en la clase y en sus métodos, describiendo su funcionalidad, parámetros y retornos.
# Módulo 6: Histories Configurations

Este módulo gestiona la configuración de historiales clínicos, incluyendo tipos de documento, tipos de pago y precios predeterminados. Está compuesto por modelos, controladores, servicios y requests bien organizados y documentados.

## Estructura de Carpetas

```
modules/
  06_histories_configurations/
    configurations/
      controlador/         # Controladores API
      modelo/              # Modelos Eloquent
      requests/            # Form Requests para validación
      servicio/            # Servicios con lógica de negocio
```

## Modelos

- **DocumentType**: Representa los tipos de documento. Relacionado con usuarios, pacientes y terapeutas. Permite soft deletes.
- **PaymentType**: Representa los tipos de pago. Relacionado con citas. Permite soft deletes.
- **PredeterminedPrice**: Representa precios predeterminados para servicios. Relacionado con citas. Permite soft deletes.

## Controladores

- **DocumentTypeController**: CRUD para tipos de documento. Usa `DocumentTypeService` y aplica middleware de permisos.
- **PaymentTypeController**: CRUD para tipos de pago. Usa `PaymentTypeService` y aplica middleware de permisos.
- **PredeterminedPricesController**: CRUD para precios predeterminados. Usa `PredeterminedPriceService` y aplica middleware de permisos.

## Servicios

- **DocumentTypeService**: Lógica de negocio para tipos de documento (crear, restaurar, actualizar, eliminar, listar).
- **PaymentTypeService**: Lógica de negocio para tipos de pago.
- **PredeterminedPriceService**: Lógica de negocio para precios predeterminados.

## Requests (Validaciones)

- **StoreDocumentTypeRequest**: Valida la creación de tipos de documento.
- **StorePaymentTypeRequest**: Valida la creación de tipos de pago.
- **StorePredeterminedPriceRequest**: Valida la creación de precios predeterminados.
- **UpdateDocumentTypeRequest**, **UpdatePaymentTypeRequest**, **UpdatePredeterminedPriceRequest**: Validan la actualización de cada entidad.

## Rutas API

Las rutas principales se encuentran en `routes/api.php`:

```php
Route::apiResource('document-types', DocumentTypeController::class);
Route::apiResource('payment-types', PaymentTypeController::class);
Route::apiResource('predetermined-prices', PredeterminedPricesController::class);
```

## Notas

- Todos los controladores y modelos están documentados con PHPDoc.
- Se utiliza soft delete en todas las entidades principales.
- Los servicios centralizan la lógica de negocio para mantener los controladores delgados.
- Los Form Requests aseguran la validación robusta de los datos de entrada.

---

