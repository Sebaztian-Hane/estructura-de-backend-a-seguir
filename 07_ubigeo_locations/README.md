# Módulo 07 - Ubigeo y Ubicaciones 📍

## **Responsabilidades**
Modelos de ubicación (Country, Region, Province, District), APIs de ubigeo, gestión de ubicaciones y controllers de ubicación para el sistema de direcciones.

## **Meta: Lograr MVC con APIs para React**

### **Model (Modelo)**
- [ ] **Country Model**: Modelo de países
- [ ] **Region Model**: Modelo de regiones
- [ ] **Province Model**: Modelo de provincias
- [ ] **District Model**: Modelo de distritos
- [ ] **Location Relationships**: Relaciones jerárquicas de ubicaciones

### **View (Vista/API)**
- [ ] **Country Controllers**: Gestión de países
- [ ] **Region Controllers**: Gestión de regiones
- [ ] **Province Controllers**: Gestión de provincias
- [ ] **District Controllers**: Gestión de distritos
- [ ] **Ubigeo Controllers**: API unificada de ubigeo
- [ ] **API Resources**: Transformación de datos para React

### **Controller (Lógica de Negocio)**
- [ ] **Country Services**: Lógica de gestión de países
- [ ] **Region Services**: Lógica de regiones
- [ ] **Province Services**: Lógica de provincias
- [ ] **District Services**: Lógica de distritos
- [ ] **Ubigeo Services**: Lógica unificada de ubicaciones

## **Archivos Incluidos**
```
07_ubigeo_locations/
├── ubigeo/
│   ├── CountryController.php
│   ├── Country.php (Model)
│   ├── RegionController.php
│   ├── Region.php (Model)
│   ├── ProvinceController.php
│   ├── Province.php (Model)
│   ├── DistrictController.php
│   ├── District.php (Model)
│   ├── UbigeoController.php
│   └── Requests/ (Ubigeo requests)
└── locations/
    ├── LocationController.php
    ├── LocationService.php
    └── Location.php (Model)
```

## **APIs a Desarrollar para React**
- `GET /api/countries` - Listar países
- `GET /api/countries/{id}` - Obtener país específico
- `GET /api/regions` - Listar regiones
- `GET /api/regions/{id}` - Obtener región específica
- `GET /api/regions/by-country/{country_id}` - Regiones por país
- `GET /api/provinces` - Listar provincias
- `GET /api/provinces/{id}` - Obtener provincia específica
- `GET /api/provinces/by-region/{region_id}` - Provincias por región
- `GET /api/districts` - Listar distritos
- `GET /api/districts/{id}` - Obtener distrito específico
- `GET /api/districts/by-province/{province_id}` - Distritos por provincia
- `GET /api/ubigeo/search` - Búsqueda de ubicaciones
- `GET /api/ubigeo/autocomplete` - Autocompletado de ubicaciones
- `GET /api/ubigeo/hierarchy` - Jerarquía completa de ubicaciones
- `GET /api/locations` - Listar ubicaciones personalizadas
- `POST /api/locations` - Crear ubicación personalizada
- `PUT /api/locations/{id}` - Actualizar ubicación
- `DELETE /api/locations/{id}` - Eliminar ubicación

## **Tareas Específicas**
1. **CRUD de Ubicaciones**: Gestión completa de países, regiones, provincias y distritos
2. **API de Ubigeo**: API unificada para consultas de ubicación
3. **Búsqueda Avanzada**: Búsqueda y filtros de ubicaciones
4. **Autocompletado**: Autocompletado de direcciones
5. **Jerarquía**: Relaciones jerárquicas de ubicaciones
6. **Validación**: Validación de códigos de ubigeo
7. **Caché**: Caché de ubicaciones para mejor rendimiento
8. **Importación**: Importar datos de ubigeo desde CSV

## **Campos del Modelo Country**
- Código de país (ISO)
- Nombre del país
- Código telefónico
- Moneda
- Idioma oficial
- Es activo (boolean)

## **Campos del Modelo Region**
- Código de región
- Nombre de región
- País (relación)
- Es activo (boolean)

## **Campos del Modelo Province**
- Código de provincia
- Nombre de provincia
- Región (relación)
- Es activo (boolean)

## **Campos del Modelo District**
- Código de distrito (ubigeo)
- Nombre de distrito
- Provincia (relación)
- Es activo (boolean)

## **Estructura Jerárquica**
```
País (Perú)
├── Región (Lima)
│   ├── Provincia (Lima)
│   │   ├── Distrito (Miraflores)
│   │   ├── Distrito (San Isidro)
│   │   └── Distrito (Barranco)
│   └── Provincia (Callao)
│       ├── Distrito (Callao)
│       └── Distrito (Bellavista)
└── Región (Arequipa)
    └── Provincia (Arequipa)
        └── Distrito (Arequipa)
```

## **Dependencias**
- Laravel Eloquent para relaciones
- Laravel Validation para requests
- Laravel Resources para APIs
- Laravel Cache para caché de ubicaciones
- Laravel Excel para importación de datos

## **Entregables**
- [ ] CRUD completo de ubicaciones
- [ ] API de ubigeo funcional
- [ ] Búsqueda y autocompletado implementado
- [ ] Jerarquía de ubicaciones establecida
- [ ] Caché de ubicaciones configurado
- [ ] APIs documentadas y testeadas
- [ ] Validación de ubigeo robusta
- [ ] Integración con React lista
- [ ] Tests unitarios y de integración 