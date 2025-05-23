# Sistema de Gestión de Reservas

Ejercicio técnico

## 📦 Requisitos

- PHP >= 8.1
- Composer
- MySQL o MariaDB

## 🚀 Instalación

1. Clona este repositorio o descomprime el proyecto en cualquier directorio de tu máquina.

2. Instala las dependencias del proyecto:

   composer install

3. Configura la base de datos en:
    app/Config/Database.php

Configura estos campos correctamente:
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => 'root',
    'database' => 'sistema_reservas',

4. Crea la base de datos ejecutando el archivo de sql/reservas.sql
    
## Ejecución 

Desde la raíz del proyecto Inicia el servidor con:
    **php spark serve**
