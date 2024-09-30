## DTWebEvaluator
DTWebEvaluator es un prototipo de aplicación web diseñado para evaluar la transparencia en la gestión de datos de los usuarios en plataformas web. Esta herramienta es parte de un proyecto de investigación.

## Tecnologías utilizadas

- Laravel 11
- PHP 8
- MySQL 8

## Requisitos mínimos

- PHP 8
- MySQL 8
- Composer

## Instalación

1. Clona este repositorio
2. Ejecuta composer install en la raíz del proyecto
3. Crea una base de datos en MySQL
4. Carga los archivos SQL en el siguiente orden, los archivos sql se encuentran en la carpeta sql ubicada en la raiz del proyecto:

  - sql1_caracteristicas.sql
  - sql2_metricas.sql
  - sql3_componente_formula.sql
  - sql4_variable.sql
  - sql5_respuesta.sql
  - sql6_preguntas.sql
  - sql7_opcion_respuesta.sql

## Iniciar la aplicación
Puedes utilizar el servidor Artisan de Laravel ejecutando php artisan serve en la raíz del proyecto, o configurar otro servidor de tu preferencia.

## Características

- Evaluación cuantitativa de la transparencia en la gestión de datos de plataformas web
- Resultados gráficos y visuales
- Opción de descargar un reporte en formato CSV

## Uso
El uso de DTWebEvaluator es gratuito y no requiere registro ni inicio de sesión.

## Notas importantes

Esta es una versión prototipo y no debe considerarse como una versión final o completa.
Los resultados proporcionados son solo para fines informativos y de investigación.
La aplicación no recolecta datos personales de los usuarios.

## Interfaz de usuario
Para la parte visual de la aplicación, se utilizan las siguientes herramientas:

Bootstrap 5: Framework CSS para el diseño responsivo.
AdminLTE 3: Plantilla de administración basada en Bootstrap para una interfaz de usuario moderna y fácil de usar.

## Licencia
DTWebEvaluator es una aplicación de código abierto (open source) desarrollada para fines de investigación académica.

## Autores
- Jonathan Ibarra
- Santiago Quijano
