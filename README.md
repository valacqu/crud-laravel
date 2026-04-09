CRUD de Productos con Laravel

Aplicación web desarrollada con Laravel que permite gestionar productos mediante operaciones CRUD (Crear, Leer, Actualizar y Eliminar).
º Funcionalidades
Crear productos
Listar productos
Editar productos
Eliminar productos
Autenticación de usuarios (login y registro)
Relación entre usuarios y productos
Búsqueda de productos por nombre
Visualización del usuario que creó cada producto
Filtrado: cada usuario solo ve sus productos

º Tecnologías utilizadas
PHP
Laravel
SQLite / MySQL
HTML / CSS
Blade (motor de plantillas de Laravel)

º Conceptos aplicados
Patrón MVC (Modelo - Vista - Controlador)
Eloquent ORM
Relaciones (uno a muchos)
Middleware de autenticación
Rutas tipo resource
Formularios con protección CSRF

º Instalación
Clonar el repositorio:
git clone https://github.com/TU_USUARIO/TU_REPOSITORIO.git
Entrar al proyecto:
cd TU_REPOSITORIO
Instalar dependencias:
composer install
Crear archivo de entorno:
cp .env.example .env
Generar clave:
php artisan key:generate
Ejecutar migraciones:
php artisan migrate
Levantar servidor:
php artisan serve


º Acceso
Abrir en navegador:

http://127.0.0.1:8000

Autor
Desarrollado por Valentina Quiroz

Este proyecto fue desarrollado como práctica para fortalecer conocimientos en Laravel, incluyendo autenticación, relaciones en base de datos y desarrollo de aplicaciones web completas.
