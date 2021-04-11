# TFG Risk Adventure

Documentación de flujo de trabajo remoto con GIT 

# Cómo colaborar en un proyecto en GitHub

*   Fork del repositorio
*   Clonar el repositorio
*   Actualizar la rama master
*   Crear una rama
*   Hacer los cambios
*   Hacer un Pull Request

## Fork del repositorio

El primer paso es hacer "Fork" del repositorio. https://github.com/RiskAdventure/TFG_RiskAdventure.git

## Clonar el repositorio

Después de tener el repositorio en nuestra cuenta, seleccionar la dirección del repositorio "SSH o HTTP" y clonar:

`$ git clone https://github.com/User/NombreRepo.git`

Dentro de la carpeta que genera, comprobar la URL del repositorio:

`$ git remote -v`

Antes de realizar modificaciones agregar la URL del repositorio original del proyecto:

`$ git remote add upstream https://github.com/RiskAdventure/TFG_RiskAdventure.git`

Comprobar

`$ git remote -v`

## Actualizar la rama Master

Antes de empezar a trabajar, obtener los últimos cambios del Repo Original:

`$ git pull -r upstream master`

## Crear una Rama

Para crear una rama usar la opción "checkout" de git:

`$ git checkout -b modificaciones-user`

## Hacer cambios

Realizar todos los cambios que se desea hacer al proyecto.

Agregar los archivos y hacer un commit:

`git add -A`
`git commit -m "Lo que quieras"`

Después de realizar el commit hacer el push hacia nuestro repositorio indicando la rama que hemos creado.

`$ git push origin modificaciones-user`

## Hacer un Pull Request

Hacer click en "Compare & Pull Request"

Escribir cambios del Pull Request.

Si todo está bien, enviar con el botón "Send Pull Request".

Esperar a que el duelo del repositorio lo revise, acepte y mezcle en la rama correspondiente.

## Extensión a instlar en VSC para ver cambios de GIT
Yo ya lo he hecho de nuevo
Git Lens

