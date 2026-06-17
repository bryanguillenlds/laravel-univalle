# Sistema de Ventas XYZ

Este proyecto es una aplicacion web desarrollada con Laravel para administrar categorias y productos.

El sistema permite realizar operaciones CRUD usando el patron MVC, modelos Eloquent, rutas, controladores, vistas Blade y conexion a una base de datos MySQL.

## Base de datos

La base de datos se llama `ventas` y contiene dos tablas principales:

- `categorias`
- `productos`

Una categoria puede tener muchos productos y un producto pertenece a una categoria.

## Funciones principales

En categorias se puede:

- Registrar categorias.
- Listar categorias.
- Modificar categorias.
- Eliminar categorias.

En productos se puede:

- Registrar productos.
- Listar productos.
- Buscar productos por nombre.
- Ver el detalle de un producto.
- Modificar productos.
- Eliminar productos.
- Mostrar la categoria asociada a cada producto.

## Ejecucion

Para iniciar el proyecto se debe ejecutar:

```bash
composer run dev
```

Luego se puede ingresar desde el navegador a:

```text
http://127.0.0.1:8000
```
