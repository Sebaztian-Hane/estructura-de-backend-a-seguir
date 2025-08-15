# Módulo 01 - Arquitecto del Sistema 🏗️

## **Responsabilidades**
Configuración base del proyecto, sistema de autenticación JWT, middleware, permisos y estructura general del proyecto.

## **Meta: Lograr MVC con APIs para React**

### **Model (Modelo)**
- [ ] **User Model**: Modelo de usuario con autenticación
- [ ] **Permission Model**: Sistema de permisos y roles
- [ ] **UserVerificationCode Model**: Verificación de email
- [ ] **Middleware Models**: Modelos para autenticación opcional

### **View (Vista/API)**
- [ ] **Auth Controllers**: Login, logout, registro, verificación
- [ ] **Permission Controllers**: Gestión de roles y permisos
- [ ] **API Routes**: Configuración de rutas de autenticación
- [ ] **JWT Implementation**: Tokens de autenticación

### **Controller (Lógica de Negocio)**
- [ ] **Auth Services**: Lógica de autenticación
- [ ] **Permission Services**: Lógica de permisos
- [ ] **Email Services**: Envío de emails de verificación
- [ ] **JWT Services**: Generación y validación de tokens

## **Archivos Incluidos**
```
01_architect/
├── authentication/
│   ├── Controllers/
│   │   └── Auth/ (Login, Register, Verification, etc.)
│   ├── Middleware/
│   │   └── OptionalAuthenticate.php
│   ├── Requests/
│   │   └── Auth/ (LoginRequest, RegisterRequest, etc.)
│   ├── Services/
│   │   └── FirstLogin/ (EmailServices, VerificationServices, etc.)
│   ├── auth.php (Rutas de autenticación)
│   ├── api.php (Rutas principales de API)
│   └── AppServiceProvider.php
└── permissions/
    ├── Models/
    │   ├── Permission.php
    │   └── RoleEnum.php
    └── Services/
        └── getRoleService.php
```

## **APIs a Desarrollar para React**
- `POST /api/auth/login` - Login de usuario
- `POST /api/auth/register` - Registro de usuario
- `POST /api/auth/logout` - Logout de usuario
- `POST /api/auth/verify-email` - Verificación de email
- `POST /api/auth/reset-password` - Reset de contraseña
- `GET /api/auth/user` - Obtener usuario actual
- `GET /api/auth/permissions` - Obtener permisos del usuario

## **Tareas Específicas**
1. **Configurar JWT**: Implementar autenticación con tokens
2. **Crear Middleware**: Autenticación opcional para rutas públicas
3. **Sistema de Permisos**: Roles y permisos granulares
4. **Email Verification**: Verificación de email con códigos
5. **API Documentation**: Documentar todas las APIs
6. **Testing**: Tests unitarios y de integración

## **Dependencias**
- Laravel Sanctum para JWT
- Spatie Permission para roles
- Laravel Mail para emails
- Laravel Validation para requests

## **Entregables**
- [ ] APIs de autenticación funcionales
- [ ] Sistema de permisos implementado
- [ ] Middleware configurado
- [ ] Documentación de APIs
- [ ] Tests completos
- [ ] Integración con React lista 