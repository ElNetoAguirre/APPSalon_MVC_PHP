<p align="center">
  <a href="https://www.w3.org/html/logo/index.html" target="blank"><img src="https://www.w3.org/html/logo/downloads/HTML5_Logo.svg" width="200" alt="HTML5 Logo"/></a>
</p>

# AppSalon

Aplicación creada utilizando **HTML**, **MVC**, **PHP 8**, **MySQL**, **SASS** y **Gulp**, esta aplicación es para un Salón de Belleza, donde los Clientes pueden crear sus propias cuentas y reservar citas para alguno de los servicios ofrecidos. También cuenta con una sección para administrar la aplicación (ver las citas, actualizar, añadir o eliminar servicios).

La sección del *Cliente* cuenta con un área para realizar el Login, en caso de no tener una cuenta registrada, puedes crear una, donde se te pedirá información para contactarte en caso de ser necesario, o si ya tienes una cuenta, pero olvidaste tu contraseña puedas reestablecerla. Todos los campos cuentan con validaciones y mensajes visuales para ayudarte en caso de ser necesario.

Una vez que tengas tu cuenta, confirmado la misma y te hayas logueado, podrá acceder a la sección de generación de citas, donde podrás elegir los servicios que requieres, seleccionar una fecha para la misma (este salón de belleza solo trabaja de lunes a viernes de las 10:00 a las 19:00 hrs, también cierra algunos días festivos) y al final te presenta un resumen de dicha cita para que revises la información antes de generarla.

En la sección de *Administrador* te permitirá ver las citas agendadas mediante un buscador por fechas, incluso te permitirá eliminarlas en caso de ser necesario, también podrás ver los servicios ofrecidos, actualizarlos o eliminarlos, y por último crear nuevos servicios.

**Nota:** Para hacer que un usuario sea administrador es necesario hacerlo desde la base de datos, cambiando el valor de `"0"` a `"1"` en la columna `"admin"` de la tabla de `"usuarios"`.

## Servidor de Desarrollo

1. Clona el proyecto para extraer los datos del repositorio.

2. Ejecuta `npm install` para descargar e instalar los paquetes necesarios para la ejecución de la app.

3. Ejecuta `npm run gulp` para iniciar el proceso de automatización de la compilación de archivos. 

4. En otra terminal, levanta el Backend de la app con el comando `php -S localhost:3000` para acceder la base da datos local la cual correrá en la dirección `http://localhost:3000`, recuerda que debes hacerlo dede la carpeta **public**.

5. Ejecuta `npm run build` para iniciar el proceso de automatización de la compilación de archivos para el caso de llevar la app a producción.

## Producción

Si deseas ver el funcionamiento de la APP en producción, visita la página: [App Salon](https://elneto-appsalon.domcloud.io/).
