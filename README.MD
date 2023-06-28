# codigo sql usado para la creacion de la db
## Jhon Jairo Morales Garcia

```mysql
CREATE DATABASE campuslands;
USE campuslands;
CREATE TABLE pais (
    idPais INT PRIMARY KEY AUTO_INCREMENT,
    nombrePais VARCHAR(60) NOT NULL
);

CREATE TABLE departamento(
    idDep INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombreDep VARCHAR(50) NOT NULL,
    idPais INT NOT NULL,
    CONSTRAINT fkPais
    FOREIGN KEY (idPais) REFERENCES pais(idPais)
);

CREATE TABLE region(
    idReg INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombreReg VARCHAR(50) NOT NULL,
    idDep INT NOT NULL,
    CONSTRAINT fkDepartamento
    FOREIGN KEY (idDep) REFERENCES departamento(idDep)
);


CREATE TABLE campers(
    idCamper VARCHAR(20) NOT NULL PRIMARY KEY,
    nombreCamper VARCHAR(50) NOT NULL,
    apellidoCamper VARCHAR(50) NOT NULL,
    fechaNac DATE NOT NULL,
    idReg INT NOT NULL,
    CONSTRAINT fkRegion
    FOREIGN KEY (idReg) REFERENCES region(idReg)
);
```


# uso api

- se puede hacer post de camper con la ruta http://localhost/ApolT01-010/prueba-reto-php-filtro/camper

- se puede obtener un pais en especifico con la id  http://localhost/ApolT01-010/prueba-reto-php-filtro/pais/{id}

- se puede post de un pais   http://localhost/ApolT01-010/prueba-reto-php-filtro/pais

- se peude obtener todos los paises 
http://localhost/ApolT01-010/prueba-reto-php-filtro/paises


- se impleto la logica de obtener y actualizar camper en modelo  pero  no se lancanzo a implmentar en la endpoint





