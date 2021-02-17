CREATE DATABASE Trucorp;
USE Trucorp;

CREATE TABLE `users` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nama` varchar(30) NOT NULL,
  `Kantor(Pusat/Cabang)` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`),
  CONSTRAINT `CHK_Kantor` CHECK (`Kantor(Pusat/Cabang)` = 'Pusat' or `Kantor(Pusat/Cabang)` = 'Cabang')
);

INSERT INTO users(Nama,`Kantor(Pusat/Cabang)`) 
VALUES('John Pantau','Pusat'),('Jack Septiceye','Cabang'),('Patrick Star','Cabang');
