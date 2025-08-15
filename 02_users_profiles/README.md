# Módulo 02 - Gestión de Usuarios y Perfiles 👥

Este módulo gestiona todo lo relacionado con usuarios, perfiles, autenticación y verificación. Está organizado en Historias de Usuario (HU):

## HU01_UserCRUD - Gestión de Usuarios

Gestiona las operaciones CRUD de usuarios:

### Estructura:
- **Controllers/UserController.php**: Maneja las peticiones HTTP para usuarios
- **Models/User.php**: Modelo principal de usuario con atributos como:
  - Información personal (nombre, apellidos)
  - Datos de contacto (email, teléfono)
  - Credenciales (usuario, contraseña)
  - Usa traits: HasFactory, SoftDeletes, Notifiable, HasApiTokens, HasRoles
- **Requests/**:
  - `StoreUserRequest.php`: Validaciones para crear usuarios
  - `UpdateUserRequest.php`: Validaciones para actualizar usuarios
- **Resources/**:
  - `UserCollection.php`: Colección de recursos de usuario
  - `UserResource.php`: Transformación de datos de usuario
- **Services/UserService.php**: Lógica de negocio para usuarios

## HU02_ProfileManagement - Gestión de Perfiles

Maneja la información de perfiles y fotos de usuario:

### Estructura:
- **Controllers/**:
  - `ImageController.php`: Gestión de imágenes de perfil
  - `ProfileController.php`: Gestión de perfiles de usuario
- **Requests/**:
  - `UpdatePhotoRequest.php`: Validación de actualización de foto
  - `UpdateProfileRequest.php`: Validación de actualización de perfil
  - `UploadImageRequest.php`: Validación de carga de imágenes
- **Services/ProfileService.php**: Lógica de gestión de perfiles

## HU03_ChangePassword - Gestión de Contraseñas

Maneja el cambio y restablecimiento de contraseñas:

### Estructura:
- **Controllers/ChangePasswordController.php**: Control de cambios de contraseña
- **Requests/**:
  - `ChangePasswordRequest.php`: Validación de cambio de contraseña
  - `ResetPasswordRequest.php`: Validación de restablecimiento
- **Services/**:
  - `ChangePasswordService.php`: Lógica de cambio de contraseña
  - `FirstLoginService.php`: Gestión del primer inicio de sesión
  - `ResetPasswordServices.php`: Servicios de restablecimiento

## HU04_EmailVerification - Verificación de Email

Gestiona la verificación de correos electrónicos:

### Estructura:
- **Controllers/VerificationController.php**: Control de verificación
- **Mails/VerificationEmail.php**: Plantilla de correo de verificación
- **Models/UserVerificationCode.php**: Modelo para códigos de verificación
- **Requests/**:
  - `EmailRequest.php`: Validación de correo
  - `VerificationRequest.php`: Validación de verificación
- **Services/VerificationServices.php**: Lógica de verificación
- **Views/**:
  - `password-restore.blade.php`: Vista de restauración
  - `verification.blade.php`: Vista de verificación

## HU05_UserSearchFilters - Filtros de Búsqueda

Implementa la búsqueda avanzada de usuarios:

### Estructura:
- **Requests/SearchUsersRequest.php**: Validaciones para búsqueda de usuarios

## Funcionalidades Principales

1. **Gestión de Usuarios**:
   - CRUD completo de usuarios
   - Gestión de roles y permisos
   - Soft delete para usuarios

2. **Gestión de Perfiles**:
   - Actualización de información de perfil
   - Gestión de fotos de perfil
   - Validaciones de datos

3. **Seguridad**:
   - Cambio de contraseña
   - Restablecimiento de contraseña
   - Verificación de email
   - Gestión de primer inicio de sesión

4. **Búsqueda y Filtros**:
   - Búsqueda avanzada de usuarios
   - Filtros personalizados

## Dependencias

- Laravel Sanctum para autenticación
- Spatie Permission para roles y permisos
- Laravel Mail para envío de correos
- Laravel Storage para gestión de archivos
        