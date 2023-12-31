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



