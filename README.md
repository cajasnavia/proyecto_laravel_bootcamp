<p align="center">
        <a href="#" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400">
    </a>
</p>


# PROYECTO LARAVEL BOOTCAMP v1
El proyecto es realizado el mes de Agosto de 2021 durante el Boocamp Laravel v1 The PHP Framework for Web Artisans

## Lista de requerimientos
El software se dividirá en 3 secciones:
1. Sección pública: accesible para que cualquier persona (no usuario).
2. Sección de usuario: accesible para personas registradas en el software (usuario).
3. Sección administrativa: accesible para el usuario administrador del sistema.
Las funcionalidades en cada sección se describen brevemente a continuación.
## 1. Sección pública
- Se permitirá a las personas visualizar los detalles de los productos publicados.
- Debe existir enlaces que envíen a las personas a un formulario de registro de usuario y a un
formulario de acceso.
- Cada producto tendrá un botón “Agregar al carrito”, el cual debe direccionar al formulario de
registro o acceso de usuario.
- En caso de olvidar su contraseña, el software debe permitirle a la persona reestablecer su
contraseña a través del correo electrónico.
## 2. Sección de usuario
Una vez que la persona haya ingresado a la sección de usuario mediante el formulario de acceso
podrá realizar las siguientes operaciones.
### 2.1. Subsección de compras
- Visualizar un resumen de todas sus operaciones del usuario desde un panel de inicio.
- Acceder al listado de productos, cuyo botón de “Agregar al carrito” permita agregarlos al carrito
de compras.
- Visualizar el listado de productos del carrito de compras.
- Confirmar la orden de compra mediante un formulario que permita seleccionar un método de
pago.
- Visualizar el historial de órdenes de compra y pagos realizados.
### 2.2. Subsección de cuenta de usuario
- Actualizar datos de personales y fotografía
- Actualizar contraseña.
- CRUD de métodos de pago.
## 3. Sección administrativa
Una vez que la persona haya ingresado a la sección de administración mediante el formulario de
acceso podrá realizar las siguientes operaciones.
- Visualizar un resumen de todas las operaciones del sistema desde un panel de inicio.
- CRUD de categoría de productos.
- CRUD de productos.
- Listar las ordenes e historial de pagos por usuario.
- Listar los usuarios del sistema.