# Plataforma laravel
Ejemplo de uso de laravel

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

Para crear controlador
```=php
php artisan make:controller NombreControlador
```

Para crear validaciones
```=php
php artisan make:request NombreRequest
```

ejecutar todas las migraciones de la bd (ejecuta el metedo up de las migraciones)
```=php
php artisan migrate
```
de esta forma se crean las tablas en la bd.

deshacer la migracion creada en la bd (ejecuta metodo down)
```=php
php artisan migrate:rollback
```

crear una migracion para luego ejecutarla y generar la tabla
```=php
php artisan make:migration nombre_migracion --create=nombretabla
```

# Orden para usar REST
Para crear controlador tipo REST
```=php
php artisan make:controller nombreControlador --resource
```
Para usar el ORM Eloquent y arrorarse el QueryBuilder
```=php
php artisan make:model Nombre
```
el nombre tiene que se igual que el de la tabla asociada en la BD pero en singular y la primera letra Mayuscula.
ejemplo, si en la bd la tabla se llama 'mensajes', el modelo debe ser 'Mensaje'.

Ahora si les da lo mismo esta convencion hay que colocar en el modelo creado
```=php
	//accede a la tabla mensajes de la bd
    protected $table = 'mensajes';
```
el modelo independiente de como se llame, va a acceder a esa tabla xD

tratar en este orden
`CREATE`,`STORE`,`INDEX`
