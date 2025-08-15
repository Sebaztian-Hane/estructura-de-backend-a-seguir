# Módulo 04 - Terapeutas 👨‍⚕️

## **Responsabilidades**
Modelo Therapist completo, CRUD de terapeutas, búsqueda de terapeutas, gestión de especialidades y relación con citas médicas.

## **Meta: Lograr MVC con APIs para React**

### **Model (Modelo)**
- [ ] **Therapist Model**: Modelo completo de terapeuta con relaciones
- [ ] **Specialty Model**: Especialidades médicas
- [ ] **Therapist-Specialty Relationship**: Relación muchos a muchos
- [ ] **Therapist-Appointment Relationship**: Relación con citas

### **View (Vista/API)**
- [ ] **Therapist Controllers**: CRUD completo de terapeutas
- [ ] **Specialty Controllers**: Gestión de especialidades
- [ ] **Search Controllers**: Búsqueda avanzada de terapeutas
- [ ] **API Resources**: Transformación de datos para React

### **Controller (Lógica de Negocio)**
- [ ] **Therapist Services**: Lógica de gestión de terapeutas
- [ ] **Specialty Services**: Lógica de especialidades
- [ ] **Search Services**: Búsqueda y filtros avanzados
- [ ] **Validation Services**: Validación de datos médicos

## **Archivos Incluidos**
```
04_therapists/
└── therapists/
    ├── TherapistController.php
    ├── TherapistService.php
    ├── Therapist.php (Model)
    ├── TherapistResource.php
    ├── TherapistCollection.php
    └── Requests/ (StoreTherapistRequest, UpdateTherapistRequest, SearchTherapistsRequest)
```

## **APIs a Desarrollar para React**
- `GET /api/therapists` - Listar terapeutas con paginación
- `POST /api/therapists` - Crear nuevo terapeuta
- `GET /api/therapists/{id}` - Obtener terapeuta específico
- `PUT /api/therapists/{id}` - Actualizar terapeuta
- `DELETE /api/therapists/{id}` - Eliminar terapeuta
- `GET /api/therapists/search` - Búsqueda avanzada de terapeutas
- `GET /api/therapists/{id}/appointments` - Citas de un terapeuta
- `GET /api/therapists/{id}/schedule` - Horario de un terapeuta
- `GET /api/therapists/specialties` - Listar especialidades
- `POST /api/therapists/specialties` - Crear especialidad
- `PUT /api/therapists/specialties/{id}` - Actualizar especialidad
- `DELETE /api/therapists/specialties/{id}` - Eliminar especialidad
- `GET /api/therapists/statistics` - Estadísticas de terapeutas

## **Tareas Específicas**
1. **CRUD de Terapeutas**: Gestión completa de terapeutas
2. **Sistema de Especialidades**: Especialidades médicas con categorías
3. **Búsqueda Avanzada**: Filtros por nombre, especialidad, disponibilidad
4. **Gestión de Horarios**: Horarios de trabajo y disponibilidad
5. **Relaciones Médicas**: Terapeuta-Especialidad-Cita
6. **Validación Médica**: Validación de credenciales médicas
7. **Paginación**: Listado paginado con filtros
8. **Estadísticas**: Estadísticas de terapeutas y especialidades

## **Campos del Modelo Therapist**
- Documento de identidad
- Nombres y apellidos
- Especialidad principal
- Especialidades secundarias
- Número de colegiatura
- Años de experiencia
- Teléfono
- Email
- Dirección de consultorio
- Horarios de trabajo
- Tarifa por consulta
- Estado (activo/inactivo)
- Foto de perfil

## **Campos del Modelo Specialty**
- Código de especialidad
- Nombre de especialidad
- Descripción
- Categoría
- Requisitos de formación
- Duración de consulta típica

## **Dependencias**
- Laravel Eloquent para relaciones
- Laravel Validation para requests médicos
- Laravel Resources para APIs
- Laravel Scout para búsqueda avanzada

## **Entregables**
- [ ] CRUD completo de terapeutas
- [ ] Sistema de especialidades funcional
- [ ] Búsqueda avanzada implementada
- [ ] Gestión de horarios establecida
- [ ] Relaciones médicas configuradas
- [ ] APIs documentadas y testeadas
- [ ] Validación médica robusta
- [ ] Integración con React lista
- [ ] Tests unitarios y de integración 