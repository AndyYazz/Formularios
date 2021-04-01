-- TipoPagina --
-- Es la tabla donde registraremos todos los tipos de página que hagamos, como ginecología, ortopedia, pediatría, etc... --

CREATE TABLE tipoPagina(
    id_tipoPagina int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre text NOT NULL,
    fechaDeploy timestamp DEFAULT CURRENT_TIMESTAMP,
    urlPagina text NOT NULL                                                                                                                            
)

CREATE TABLE usuario(
    id_uduario int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre text NOT NULL,
    telefono varchar(10),
    correo text,
    mensaje text,
    id_tipoPagina int(11),
    FOREIGN KEY (id_tipoPagina) REFERENCES tipoPagina(id_tipoPagina)
)