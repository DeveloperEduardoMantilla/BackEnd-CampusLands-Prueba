# CampusLands Prueba de Sanbox

A continuación se enumeran los endpoints disponibles en esta API:

Paso a paso para su ejecucion

1. Contar con base de datos de nombre campuslands
2. cargar variables de entorno, aqui monto el como debe ir 

DB_DRIVER="mysql"
DB_HOST="127.0.0.1"
DB_PORT="3306"
DB_DATABASE="campuslands"
DB_USERNAME="root"
DB_PASSWORD=""

estas variables de entorno deben estar en un archivo .env en la raiz del proyecto


Modificaciones a base de datos

Se agrego campo a la tabla campers que guardara el numero de documento de los campers
se combio el tipo de dato de idCamper, estaba varchar lo pase a int, para que quedara como llave primaria de tipo INT
## pais

- (GET) http://localhost/Backend-Api-Php/pais => Obtiene datos de la tabla pais
- (GET) http://localhost/Backend-Api-Php/pais/{id} => Obtiene un dato de la tabla pais mediante su ID
- (POST) http://localhost/Backend-Api-Php/pais => Guarda datos en la tabla pais
- (PUT) http://localhost/Backend-Api-Php/pais/{id} => Actualiza datos de la tabla pais
- (DELETE) http://localhost/Backend-Api-Php/pais/{id} => Elimina datos de la tabla pais

## departamento

- (GET) http://localhost/Backend-Api-Php/departamento => Obtiene datos de la tabla departamento
- (GET) http://localhost/Backend-Api-Php/departamento/{id} => Obtiene un dato de la tabla departamento mediante su ID
- (POST) http://localhost/Backend-Api-Php/departamento => Guarda datos en la tabla departamento
- (PUT) http://localhost/Backend-Api-Php/departamento/{id} => Actualiza datos de la tabla departamento
- (DELETE) http://localhost/Backend-Api-Php/departamento/{id} => Elimina datos de la tabla departamento

## region

- (GET) http://localhost/Backend-Api-Php/region => Obtiene datos de la tabla region
- (GET) http://localhost/Backend-Api-Php/region/{id} => Obtiene un dato de la tabla region mediante su ID
- (POST) http://localhost/Backend-Api-Php/region => Guarda datos en la tabla region
- (PUT) http://localhost/Backend-Api-Php/region/{id} => Actualiza datos de la tabla region
- (DELETE) http://localhost/Backend-Api-Php/region/{id} => Elimina datos de la tabla region

## campers

- (GET) http://localhost/Backend-Api-Php/campers => Obtiene datos de la tabla campers
- (GET) http://localhost/Backend-Api-Php/campers/{id} => Obtiene un dato de la tabla campers mediante su ID
- (POST) http://localhost/Backend-Api-Php/campers => Guarda datos en la tabla campers
- (PUT) http://localhost/Backend-Api-Php/campers/{id} => Actualiza datos de la tabla campers
- (DELETE) http://localhost/Backend-Api-Php/campers/{id} => Elimina datos de la tabla campers
