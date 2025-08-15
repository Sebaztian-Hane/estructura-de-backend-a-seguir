# Servicio de Lógica de Negocio para Terapeutas

**Archivo:**  
- TherapistService.php  

**Etiquetas:**  
Backend, Servicio, Lógica de Negocio, Validaciones, Unicidad

## HU03 - Servicio de Lógica de Negocio para Terapeutas

**Historia de Usuario**  
Como desarrollador del sistema,  
Quiero centralizar la lógica de negocio relacionada a terapeutas en un servicio,  
Para mantener el controlador limpio y facilitar el mantenimiento del código.

### Criterios de aceptación
- El servicio debe contener la lógica para crear, actualizar, eliminar y buscar terapeutas.
- Debe validar la unicidad de documento y colegiatura.
- Debe lanzar excepciones claras en caso de errores de negocio.

### Cómo probarlo
- Llamar a los métodos del servicio desde pruebas unitarias y verificar los resultados.
- Intentar crear terapeutas duplicados y verificar la excepción.
- Verificar que el servicio maneje correctamente las operaciones CRUD.

### Checklist técnico
- [ ] Implementar métodos CRUD en TherapistService.
- [ ] Validar unicidad de documento y colegiatura.
- [ ] Manejar excepciones de negocio.
- [ ] Crear pruebas unitarias para el servicio. 