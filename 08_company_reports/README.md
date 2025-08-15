# Módulo 08 - Empresa, Reportes y Comunicación 📊

## **Responsabilidades**
Modelo CompanyData, sistema de reportes, estadísticas, gestión de logos, sistema de email, APIs de reportes y notificaciones.

## **Meta: Lograr MVC con APIs para React**

### **Model (Modelo)**
- [ ] **CompanyData Model**: Datos de la empresa
- [ ] **Report Model**: Modelo de reportes
- [ ] **Statistics Model**: Modelo de estadísticas
- [ ] **Email Model**: Modelo de emails
- [ ] **Notification Model**: Modelo de notificaciones

### **View (Vista/API)**
- [ ] **Company Controllers**: Gestión de datos de empresa
- [ ] **Report Controllers**: Generación de reportes
- [ ] **Statistics Controllers**: Estadísticas del sistema
- [ ] **Email Controllers**: Gestión de emails
- [ ] **Notification Controllers**: Sistema de notificaciones
- [ ] **API Resources**: Transformación de datos para React

### **Controller (Lógica de Negocio)**
- [ ] **Company Services**: Lógica de gestión de empresa
- [ ] **Report Services**: Lógica de generación de reportes
- [ ] **Statistics Services**: Lógica de estadísticas
- [ ] **Email Services**: Lógica de envío de emails
- [ ] **Notification Services**: Lógica de notificaciones

## **Archivos Incluidos**
```
08_company_reports/
├── company/
│   ├── CompanyController.php
│   ├── CompanyData.php (Model)
│   └── Requests/ (Company requests)
├── reports/
│   ├── ReportController.php
│   ├── ReportService.php
│   └── Requests/ (Report requests)
├── statistics/
│   ├── StatisticsController.php
│   ├── StatisticsService.php
│   ├── StatisticsResource.php
│   └── Requests/ (Statistics requests)
├── emails/
│   ├── EmailController.php
│   ├── EmailServices.php
│   └── email-restore.blade.php (Template)
└── notifications/
    ├── NotificationController.php
    ├── NotificationService.php
    └── Requests/ (Notification requests)
```

## **APIs a Desarrollar para React**
- `GET /api/company` - Obtener datos de la empresa
- `PUT /api/company` - Actualizar datos de la empresa
- `POST /api/company/logo` - Subir logo de la empresa
- `GET /api/reports/patients` - Reporte de pacientes
- `GET /api/reports/appointments` - Reporte de citas
- `GET /api/reports/therapists` - Reporte de terapeutas
- `GET /api/reports/revenue` - Reporte de ingresos
- `POST /api/reports/generate` - Generar reporte personalizado
- `GET /api/reports/{id}/download` - Descargar reporte
- `GET /api/statistics/dashboard` - Estadísticas del dashboard
- `GET /api/statistics/patients` - Estadísticas de pacientes
- `GET /api/statistics/appointments` - Estadísticas de citas
- `GET /api/statistics/revenue` - Estadísticas de ingresos
- `POST /api/emails/send` - Enviar email
- `GET /api/emails/history` - Historial de emails
- `POST /api/notifications/send` - Enviar notificación
- `GET /api/notifications` - Listar notificaciones
- `PUT /api/notifications/{id}/read` - Marcar como leída

## **Tareas Específicas**
1. **Gestión de Empresa**: Datos de la empresa, logo, configuración
2. **Sistema de Reportes**: Reportes de pacientes, citas, ingresos
3. **Estadísticas**: Dashboard con estadísticas en tiempo real
4. **Sistema de Email**: Envío de emails automáticos y manuales
5. **Notificaciones**: Sistema de notificaciones push y email
6. **Exportación**: Exportar reportes a PDF/Excel
7. **Gráficos**: Gráficos y visualizaciones de datos
8. **Programación**: Reportes programados automáticos

## **Campos del Modelo CompanyData**
- Nombre de la empresa
- RUC
- Dirección
- Teléfono
- Email
- Sitio web
- Logo
- Descripción
- Horarios de atención
- Políticas de privacidad
- Términos y condiciones

## **Tipos de Reportes**
- **Reporte de Pacientes**: Lista de pacientes con filtros
- **Reporte de Citas**: Citas por período con estadísticas
- **Reporte de Terapeutas**: Rendimiento de terapeutas
- **Reporte de Ingresos**: Ingresos por período
- **Reporte de Ocupación**: Ocupación de consultorios
- **Reporte Personalizado**: Reporte configurable

## **Tipos de Estadísticas**
- **Dashboard**: Resumen general del sistema
- **Pacientes**: Nuevos pacientes, total, crecimiento
- **Citas**: Citas por día, semana, mes
- **Ingresos**: Ingresos por período
- **Terapeutas**: Rendimiento de terapeutas
- **Ocupación**: Ocupación de consultorios

## **Tipos de Notificaciones**
- **Email**: Notificaciones por email
- **Push**: Notificaciones push en tiempo real
- **SMS**: Notificaciones por SMS
- **WhatsApp**: Notificaciones por WhatsApp

## **Dependencias**
- Laravel Eloquent para relaciones
- Laravel Validation para requests
- Laravel Resources para APIs
- DomPDF para reportes PDF
- Laravel Excel para exportación
- Laravel Mail para emails
- Laravel Notifications para notificaciones
- Chart.js para gráficos

## **Entregables**
- [ ] Gestión de empresa funcional
- [ ] Sistema de reportes operativo
- [ ] Dashboard de estadísticas implementado
- [ ] Sistema de email configurado
- [ ] Notificaciones en tiempo real
- [ ] Exportación de reportes implementada
- [ ] APIs documentadas y testeadas
- [ ] Integración con React lista
- [ ] Tests unitarios y de integración 