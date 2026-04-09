# CRUD de Productos con Laravel

Aplicación web desarrollada con Laravel que permite gestionar productos mediante operaciones CRUD con autenticación.

## Funcionalidades

- Registro e inicio de sesión
- Listado de productos
- Crear productos
- Editar productos
- Eliminar productos
- Rutas protegidas con middleware

## Tecnologías

- Laravel
- PHP
- SQLite

## Instalación

```bash
git clone https://github.com/valacqu/crud-laravel.git
cd crud-laravel
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve

