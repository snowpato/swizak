Swiss Zombie Army Knife
========================

![SwiZAK Logo](https://dl.dropbox.com/u/87428962/swizak-logo.png)

OO-PHP classes library for Hordes / Die2Nite / Zombinoia

# Contents #

### English ###

1. [Instructions](#1-instructions)
2. [About...](#2-about)
3. [Requiremets](#3-requirements)
4. [Versions](#4-versions)
5. [TODO](#5-todo)
6. [Disclaimer](#6-disclaimer)

### Español ###

1. [Instrucciones](#1-instrucciones)
2. [Acerca de...](#2-acerca-de)
3. [Requerimientos](#3-requerimientos)
4. [Versiones](#3-versiones)
5. [Por hacer](#4-por-hacer)
6. [Renuncias](#6-renuncias)

# English #

## 1. Instructions ##

Thanks to this PHP Package, you can load a Zombinoia, Hordes or Die2Nite XML and use it by PHP Objects.

1 . Download and untar the file **swizak-latest.tar**.

2. To prepare the Objects, you must add the following lines in your file:

>`require_once("swizak.php");`

>`$page = new ZomXML("en");`

>`$page->load($userkey);`

If you have a Developer Key, you can add it as a parameter on load function:

>`$page->load($userkey,$devkey);`

## 2. About ##

The Swiss Zombie Army Knife (or SwiZAK) was developed by [Snow](http://twinoid.com/user/2485) as a way to simplify the developing for programmers, focusing their efforts to make smart apps not wasting efforts in reading the XML.

## 3. Requirements ##

- PHP 5.0+
- SimpleXML Support

Tested on PHP 5.3.8

## 4. Versions ##

V1.02 - Added a lot of new functions and fixed a lot of bugs.
V1.01 - Added Soul(Ghost) XML.
V1.0 - Compatible with XML 2.171 - Added base code.

## 5. TODO ##

- Test new functionalities.
- Test XML with Developer Key.
- Develop Wiki.
- Check and prepare XML Ghost compatibility.

## 6. Disclaimer ##

Hordes, Zombinoia and Die2Nite are games made and developed by Motion-Twin. All the rerefences of the XML are trademarked by their respective owners.
This tools is not related with Motion-Twin and/or any of their developers.

# Español #

## 1. Instrucciones ##

Gracias a este paquete PHP, podrás cargar cualquier XML de Zombinoia, Hordes o Die2Nite y manejarlo mediante Objetos en PHP. 

1. Descarga y descomprime el archivo **swizak-latest.tar**.

2. Para preparar los objetos, basta con agregar las siguientes lineas en tu archivo:

>`require_once("swizak.php");`

>`$pagina = new ZomXML("es");`

>`$pagina->load($userkey);`

Si tienes una Key de Desarrollador, simplemente agrega el parámetro al load:

>`$pagina->load($userkey,$devkey);`

El paquete se encargará de leer el XML y transformarlo en Objetos PHP.

## 2. Acerca de ##

La Swiss Zombie Army Knife (o SwiZAK) fué desarrollada por [Snow](http://twinoid.com/user/2485) como una forma de simplificar el desarrollo a los programadores, enfocando su esfuerzo en desarrollar un sinfin de aplicaciones y ahorrando el esfuerzo en leer el XML.

## 3. Requerimientos ##

- PHP 5.0+
- Soporte SimpleXML

Probado en PHP 5.3.8

## 4. Versiones ##

V1.02 - Agregada muchas funcionalidades y corregidos varios bugs.
V1.01 - Agregado XML para alma.
V1.0 - Compatible con el XML 2.171 - Agregado código base.

## 5. Por Hacer ##

- Probar nuevas funcionalidad.
- Preparar XML con Key de Desarrollador.
- Desarrollar Wiki.
- Revisar y preparar compatibilidad con XML Ghost.

## 6. Renuncias ##

Hordes, Zombinoia y Die2Nite son juegos creados y desarrollados por Motion-Twin. Todas las referencias del XML están reservados por sus respectivos autores.
Esta herramienta no tiene ninguna relación con Motion-Twin y/o sus desarrolladores.