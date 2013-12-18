BEGIN TRANSACTION;

DROP TABLE IF EXISTS categorias CASCADE;
CREATE TABLE categorias (
    pk serial NOT NULL,
    nombre varchar(255) NOT NULL,
    descripcion text,
    UNIQUE (nombre),
    PRIMARY KEY (pk)
);

DROP TABLE IF EXISTS administrador CASCADE;
CREATE TABLE administrador (
    pk serial NOT NULL,
    nombres varchar(255) NOT NULL,
    apellidos varchar(255) NOT NULL,
    rut int NOT NULL,
    login varchar(255) NOT NULL,
    pass varchar(255) NOT NULL,
    UNIQUE (rut),
    PRIMARY KEY (pk)
);

DROP TABLE IF EXISTS articulos CASCADE;
CREATE TABLE articulos (
    pk bigserial NOT NULL,
	titulo text NOT NULL,
	bajada text NOT NULL,
	noticia text NOT NULL,
    fecha timestamp NOT NULL DEFAULT NOW(),
    autor_fk int NOT NULL REFERENCES administrador(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    categoria_fk int NOT NULL REFERENCES categorias(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY (pk)
);


COMMIT;