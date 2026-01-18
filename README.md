# 🐾 Protectora de Animales - Laravel Project
Aplicación web desarrollada en Laravel para la gestión de una protectora de animales.
Permite registrar usuarios, registrar animales y visualizar los datos almacenados en la base de datos mediante vistas simples y funcionales.
## 📌 Caracteristicas principales
### 👤 Gestion de Usuarios
- Registro de nuevos usuarios.
- Campos: username, email, telefono, contrasena, nombre, apellido, direccion y rol.
- Contrasenas encriptadas con bcrypt.
- Listado completo de usuarios.
### 🐶 Gestion de Mascotas
- Registro de animales con nombre, raza y fecha de nacimiento.
- Listado de animales almacenados en la base de datos.
## 🚀 Tecnologias utilizadas
- Laravel 12
- PHP 8.3
- MySQL
- Blade Templates
- Laragon
## 📁 Instalacion y configuracion
### 1. Clonar el repositorio
```
git clone https://github.com/AngelOrtizTorres/protectora-laravel

cd protectora
```
### 2. Instalar dependencias
```
composer install
```
### 3. Configurar el entorno
```
cp .env.example .env

Editar .env:

DB_DATABASE=protectoralaravel
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generar la clave de la aplicacion
```
php artisan key:generate
```
### 5. Ejecutar migraciones
```
php artisan migrate
```
## 🧭 Rutas principales
- /registro/usuario
- /registro/animal
- /usuarios
- /animales
## 🛠 Funcionalidades implementadas
- Registro de usuarios
- Registro de animales
- Listados con Blade
## 📌 Proximas mejoras
- Login real
- Roles y permisos
- CRUD completo
- Estilos con Tailwind o Bootstrap
- Subida de imagenes