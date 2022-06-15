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
docker exec -it decreditos bash
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
