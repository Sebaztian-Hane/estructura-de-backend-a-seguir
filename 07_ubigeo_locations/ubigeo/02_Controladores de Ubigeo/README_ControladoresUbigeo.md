# Controladores de Ubigeo

**Archivos:**  
- CountryController.php  
- ProvinceController.php  
- DistrictController.php  
- RegionController.php  
- UbigeoController.php  

**Etiquetas:**  
Backend, API, Controlador, Ubigeo, CRUD, REST

## HU02 - Controladores de Ubigeo

**Historia de Usuario**  
Como administrador del sistema,  
Quiero tener controladores que gestionen la consulta y administración de países, regiones, provincias y distritos,  
Para poder mantener y consultar la información geográfica de manera eficiente desde la API.

### Criterios de aceptación
- Los controladores deben exponer endpoints para listar, crear, actualizar y eliminar entidades de ubigeo.
- Deben permitir filtrar y buscar entidades por nombre o código.
- Deben manejar correctamente las respuestas de éxito y error.
- Deben permitir la consulta jerárquica (por ejemplo, listar provincias de una región).

### Cómo probarlo
- Probar endpoints de cada controlador para CRUD y consultas jerárquicas.
- Enviar datos inválidos y verificar los mensajes de error.
- Verificar que las respuestas sean consistentes y usen recursos adecuados.

### Checklist técnico
- [ ] Implementar métodos CRUD en cada controlador de ubigeo.
- [ ] Permitir filtros y búsquedas en los endpoints.
- [ ] Manejar errores y respuestas HTTP adecuadas.
- [ ] Crear pruebas de integración para los controladores. 