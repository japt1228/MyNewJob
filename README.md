# MyNewJOb

Es una aplicacion para la busqueda y postulación de empleos

## Requisitos Previos

Antes de comenzar con la instalación, asegúrate de tener instalados los siguientes requisitos:

- PHP >= 8.x
- Composer (https://getcomposer.org/)
- Node.js y npm (https://nodejs.org/)
- MySQL o cualquier otro sistema de gestión de bases de datos compatible

## Instalación

1. **Clona el Repositorio:**

    ```bash
    git clone https://github.com/japt1228/MyNewJob
    ```

2. **Accede al Directorio del Proyecto:**

    ```bash
    cd nombre-del-proyecto
    ```

3. **Instala las Dependencias de PHP:**

    ```bash
    composer install
    ```

4. **Copia el Archivo de Configuración:**

    ```bash
    cp .env.example .env
    ```

5. **Genera la Clave de la Aplicación:**

    ```bash
    php artisan key:generate
    ```

6. **Configura la Base de Datos:**

    Abre el archivo `.env` en un editor de texto y configura las siguientes variables:

    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nombre_de_tu_base_de_datos
    DB_USERNAME=tu_usuario_de_bd
    DB_PASSWORD=tu_contraseña_de_bd
    ```

7. **Ejecuta las Migraciones y Semillas:**

    ```bash
    php artisan migrate --seed
    ```

8. **Instala las Dependencias de JavaScript:**

    ```bash
    npm install
    ```

9. **Compila los Recursos Frontales:**

    ```bash
    npm run dev
    ```

10. **Inicia el Servidor de Desarrollo:**

    ```bash
    php artisan serve
    ```

    El servidor se iniciará en `http://127.0.0.1:8000/`.

## Uso

Inicia Sesion o crea un usuario escogiendo el rol que deseas desempeñar, Aspirante o Reclutador y accede a las permisos que cada perfil ofrece.

