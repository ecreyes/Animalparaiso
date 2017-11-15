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
y para correr el servidor:
```php
php artisan serve
```

# Configurando Base de datos
Hay que abrir el archivo .env y modificar los siguientes parametros con los de ustedes:
```=php
DB_DATABASE=nombrebd
DB_USERNAME=userbd
DB_PASSWORD=passwordbd
```
como laravel usa mysql por defecto se puede usar la linea de comando que se uso con NodeJs o el workbench :)
# Comandos:
Crear nuevo proyecto
```=php
	laravel new proyecto
```

Para crear controladores
```=php
php artisan make:controller NombreControlador
```
Para crear validaciones
```=php
php artisan make:request NombreRequest
```