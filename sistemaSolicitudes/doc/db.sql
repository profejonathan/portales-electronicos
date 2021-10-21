SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS `Usuarios`;
DROP TABLE IF EXISTS `Solicitudes`;
DROP TABLE IF EXISTS `SolicitudesEstados`;
SET FOREIGN_KEY_CHECKS = 1;

CREATE TABLE `Usuarios` (
    `UsuarioId` INTEGER NOT NULL AUTO_INCREMENT,
    `Nombre` VARCHAR(64) NOT NULL,
    `Email` VARCHAR(128) NOT NULL,
    `Password` VARCHAR(128) NOT NULL,
    `Borrado` DATETIME,
    PRIMARY KEY (`UsuarioId`)
);

CREATE TABLE `Solicitudes` (
    `SolicitudId` INTEGER NOT NULL AUTO_INCREMENT,
    `Fecha` DATE NOT NULL,
    `Detalles` VARCHAR(1024) NOT NULL,
    `UsuarioId` INTEGER NOT NULL,
    `EstadoId` INTEGER NOT NULL,
    `Borrado` DATETIME,
    PRIMARY KEY (`SolicitudId`)
);

CREATE TABLE `SolicitudesEstados` (
    `EstadoId` INTEGER NOT NULL,
    `Descripcion` VARCHAR(64) NOT NULL,
    `Borrado` DATETIME NOT NULL,
    PRIMARY KEY (`EstadoId`)
);

ALTER TABLE `Solicitudes` ADD FOREIGN KEY (`UsuarioId`) REFERENCES `Usuarios`(`UsuarioId`);
ALTER TABLE `Solicitudes` ADD FOREIGN KEY (`EstadoId`) REFERENCES `SolicitudesEstados`(`EstadoId`);