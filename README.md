# KanbanBoard + Drag and Drop

## Descripción del Proyecto

Este proyecto es una aplicación de KanbanBoard, desarrollada utilizando Laravel y MySQL para la gestión del backend, y AJAX para la interacción dinámica en el frontend. La aplicación permite a los usuarios crear, leer, actualizar y eliminar (CRUD) tarjetas y columnas en un tablero Kanban, facilitando la organización de tareas y proyectos.

## Características

- **Creación de Tableros y Columnas**: Los usuarios pueden crear múltiples tableros y añadir columnas personalizadas en cada uno.
- **Gestión de Tarjetas**: Las tarjetas pueden ser añadidas, editadas, movidas entre columnas y eliminadas.
- **Interacción Dinámica**: Utiliza AJAX para actualizar el contenido de manera dinámica sin recargar la página.
- **Autenticación de Usuarios**: Sistema de registro e inicio de sesión para gestionar los accesos.
- **Persistencia de Datos**: Utiliza MySQL para almacenar de manera persistente la información de los tableros, columnas y tarjetas.

## Requisitos

- PHP 8.1 o superior
- Composer
- MySQL
- Node.js y npm
- Laravel 11.x

## Instalación

Sigue estos pasos para instalar y configurar el proyecto:

1. **Clonar el Repositorio**

    ```bash
       git clone https://github.com/JerickTwO/KanbanBoard_Laravel.git
       cd KanbanBoard_Laravel
   
2. **Instalar Dependencias de Composer**

   ```bash
    npm install
    npm run dev



3. **Edita el archivo .env para configurar la conexión a tu base de datos MySQL:**

    ```plaintext
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=kanbanboard
        DB_USERNAME=root
        DB_PASSWORD=
    
4. **Migrar la Base de Datos**

    ```bash
        php artisan migrate

5. **Iniciar el Servidor de Desarrollo**

    ```bash
        php artisan serve
## Uso
Una vez que el servidor está en funcionamiento, puedes acceder a la aplicación en http://localhost:8000. 
<br>Regístrate o inicia sesión para empezar a crear y gestionar tus tableros Kanban.

**Estructura del Proyecto**
app/: Contiene los controladores, modelos y servicios de la aplicación.<br>
database/: Contiene las migraciones y seeders.<br>
public/: Contiene los activos públicos como imágenes, CSS y JavaScript.<br>
resources/: Contiene las vistas Blade, archivos de idioma y activos compilados.<br>
routes/: Contiene los archivos de rutas de la aplicación.<br>
webpack.mix.js: Archivo de configuración para Laravel Mix.<br>
**Contribuciones**
Las contribuciones son bienvenidas. Por favor, sigue estos pasos para contribuir:

**Haz un fork del repositorio.**
Crea una rama con tu nueva característica (git checkout -b feature/nueva-caracteristica).
Realiza tus cambios y commitea (git commit -am 'Añadir nueva característica').
Sube tus cambios a la rama (git push origin feature/nueva-caracteristica).

Contacto
Para cualquier consulta o sugerencia, contactame a:

Nombre: Jerick Toro
Correo Electrónico: jerickjjtm774@gmail.com

## Imagen del proyecto
![Captura de pantalla 2024-05-10 135634](https://github.com/JerickTwO/KanbanBoard_Laravel/assets/137414207/20c08ff4-5f1f-4f98-9175-3494c60fd7c2)
