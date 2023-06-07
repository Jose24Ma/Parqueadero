DROP DATABASE IF EXISTS parqueadero; 
CREATE DATABASE parqueadero;
USE parqueadero;

CREATE TABLE persona (
  cedula int(11) NOT NULL,
  nombre varchar(20) NOT NULL,
  apellido varchar(50) NOT NULL,
  telefono varchar(15) NOT NULL,
  PRIMARY KEY(cedula)
);

CREATE TABLE vehiculo (
  placa varchar(11) NOT NULL,
  tipo_vehiculo varchar(30) NOT NULL,
  fecha varchar(100) NOT NULL,
  hora_entrada varchar(20) NOT NULL,
  hora_salida varchar(20) NOT NULL,
  PRIMARY KEY(placa)
);

CREATE TABLE ticket (
  cod_factura int(11) NOT NULL,
  fecha varchar(20) NOT NULL,
  hora_entrada varchar(20) NOT NULL,
  hora_salida varchar(20) NOT NULL,
  valor varchar(20) NOT NULL,
  PRIMARY KEY(cod_factura)
);

CREATE TABLE tarifa (
  placa varchar(11) NOT NULL,
  cod_tarifa int(11) NOT NULL,
  tipo_tarifa varchar(30) NOT NULL,
  tipo_vehiculo varchar(130) NOT NULL,
  PRIMARY KEY(cod_tarifa),
  FOREIGN KEY(placa) REFERENCES tarifa (placa)
);