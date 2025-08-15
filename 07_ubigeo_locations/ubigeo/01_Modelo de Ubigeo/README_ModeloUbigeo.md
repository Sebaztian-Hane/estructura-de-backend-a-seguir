# Modelo de Ubigeo

**Archivos:**  
- Country.php  
- Province.php  
- District.php  
- Region.php  

**Etiquetas:**  
Backend, Modelo, Eloquent, Ubigeo, Relaciones, Integridad

## HU01 - Modelo de Ubigeo

**Historia de Usuario**  
Como desarrollador del sistema,  
Quiero contar con modelos bien definidos para países, regiones, provincias y distritos,  
Para asegurar la correcta representación y relación jerárquica de la información geográfica.

### Criterios de aceptación
- Cada modelo debe mapear los campos obligatorios y relaciones (por ejemplo, una provincia pertenece a una región).
- Los modelos deben permitir la navegación entre entidades relacionadas (por ejemplo, obtener todas las provincias de una región).
- Los modelos deben registrar automáticamente las fechas de creación y actualización.
- Los modelos deben validar la unicidad de los códigos de ubigeo.

### Cómo probarlo
- Crear entidades de cada nivel y verificar que se almacenan correctamente.
- Consultar relaciones (por ejemplo, provincias de una región).
- Verificar unicidad de códigos de ubigeo.
- Verificar timestamps de creación y actualización.

### Checklist técnico
- [ ] Definir modelos Country, Region, Province y District con sus campos y relaciones.
- [ ] Configurar timestamps en los modelos.
- [ ] Validar unicidad de códigos de ubigeo.
- [ ] Crear pruebas unitarias para los modelos y relaciones. 