# Requests (Validaciones) de Terapeutas

**Archivos:**  
- StoreTherapistRequest.php  
- UpdateTherapistRequest.php  
- SearchTherapistsRequest.php  

**Etiquetas:**  
Backend, Validaciones, Request, Formulario, Seguridad, Integridad

## HU04 - Validaciones de Terapeutas

**Historia de Usuario**  
Como usuario del sistema,  
Quiero que los formularios de registro, edición y búsqueda de terapeutas validen correctamente los datos,  
Para evitar errores y asegurar la integridad de la información.

### Criterios de aceptación
- El request de registro debe validar todos los campos obligatorios y unicidad.
- El request de actualización debe validar los cambios y unicidad.
- El request de búsqueda debe permitir filtros válidos.
- Los mensajes de error deben ser claros y específicos.

### Cómo probarlo
- Intentar registrar un terapeuta con datos faltantes o duplicados y verificar los mensajes de error.
- Actualizar un terapeuta con datos inválidos y verificar la validación.
- Buscar terapeutas usando filtros y verificar los resultados.

### Checklist técnico
- [ ] Definir reglas de validación en StoreTherapistRequest.
- [ ] Definir reglas de validación en UpdateTherapistRequest.
- [ ] Definir reglas y filtros en SearchTherapistsRequest.
- [ ] Crear pruebas unitarias para las validaciones. 