# Controlador de Terapeutas

**Archivo:**  
- TherapistController.php  

**Etiquetas:**  
Backend, API, Controlador, CRUD, REST

## HU02 - Controlador de Terapeutas

**Historia de Usuario**  
Como administrador del sistema,  
Quiero tener un controlador que gestione las operaciones CRUD de terapeutas,  
Para poder administrar el personal de salud desde la API.

### Criterios de aceptación
- El controlador debe exponer endpoints para crear, listar, actualizar y eliminar terapeutas.
- Debe manejar correctamente las respuestas de éxito y error.
- Debe utilizar los recursos para las respuestas.
- Debe validar los datos recibidos.

### Cómo probarlo
- Probar cada endpoint (crear, listar, actualizar, eliminar) y verificar las respuestas.
- Enviar datos inválidos y verificar los mensajes de error.
- Verificar que las respuestas usen los recursos definidos.

### Checklist técnico
- [ ] Implementar métodos CRUD en TherapistController.
- [ ] Integrar validaciones y recursos en las respuestas.
- [ ] Manejar errores y respuestas HTTP adecuadas.
- [ ] Crear pruebas de integración para el controlador. 