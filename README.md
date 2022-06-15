# Desafío técnico - Desarrollador Full Stack
<img src="https://www.decreditos.com/hubfs/raw_assets/public/decreditos2021/images/logo-decreditos.svg" alt="drawing" width="300"/>

## Instrucciones de instalación
Para este desafío es necesario que tengas instalado Docker en tu computadora y que estés al menos familiarizado cómo funciona.

Primero empezamos _buildeando_ nuestra imagen.
Para este desafío es necesario que tengas instalado Docker en tu computadora y que estés al menos familiarizado cómo funciona.

Primero empezamos _buildeando_ nuestra imagen.

```bash
docker compose up -d
```

Luego ingresamos a la instancia.

```bash
docker exec -it debitos bash
```

Instalamos el proyecto.

```bash
composer install
```

Creamos las tablas en nuestra base de datos.

```bash
php artisan migrate
```

Creamos registros de prueba en nuestra base de datos.

```bash
php artisan db:seed
```

Listo! Ya tenés funcionando el proyecto.

Solo resta copiar el siguiente archivo .env

```bash
APP_NAME="Desafio Decreditos"
APP_ENV=local
APP_KEY=base64:3SGmfy/SUphHo4jHXjhwIqkJILO8i0g9q6KGaCvd30o=
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=secret

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120
```