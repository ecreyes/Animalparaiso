# Animalparaiso
Plataforma para la ONG

# Instalación del proyecto.

Al descargar el repositorio colocarlo en:
```=php
laragon\www
```
Luego hay que instalar los modulos, para esto entran a la carpeta y escriben:
```=php
composer install
```
ahora hay que configurar las cosas de git:
```=php
cp .env.example .env
```
ahora se genera la key:
```php
php artisan key:generate
```
por ultimo solo hay que correr el servidor:
```php
php artisan serve
```

# Comandos:

```=php
	laravel new proyecto
	php artisan make:controller NombreControlador
```