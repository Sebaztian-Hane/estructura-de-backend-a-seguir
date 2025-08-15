# Modelo y Recursos de Terapeutas

**Archivos:**  
- Therapist.php  
- TherapistResource.php  
- TherapistCollection.php  

**Etiquetas:**  
Backend, Modelo, Recursos, Eloquent, Serialización, SoftDelete

## HU01 - Modelo y Recursos de Terapeutas

**Historia de Usuario**  
Como desarrollador del sistema,  
Quiero contar con un modelo y recursos bien definidos para los terapeutas,  
Para asegurar la correcta representación, serialización y manipulación de los datos de los profesionales de salud.

### Criterios de aceptación
- El modelo debe mapear todos los campos obligatorios y relaciones de un terapeuta.
- Los recursos deben transformar y exponer los datos de manera consistente para la API.
- El modelo debe registrar automáticamente las fechas de creación y actualización.
- El modelo debe soportar soft delete.

### Cómo probarlo
- Crear un terapeuta y verificar que los datos se almacenan correctamente.
- Consultar un terapeuta y verificar la estructura del recurso.
- Eliminar un terapeuta y verificar que se realiza soft delete.
- Verificar que las fechas de creación y actualización se registran.

### Checklist técnico
- [ ] Definir el modelo Therapist con sus campos y relaciones.
- [ ] Implementar TherapistResource y TherapistCollection para la API.
- [ ] Configurar timestamps y soft delete en el modelo.
- [ ] Crear pruebas unitarias para el modelo y recursos. 