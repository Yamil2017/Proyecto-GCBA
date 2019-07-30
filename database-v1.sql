
CREATE TABLE Datos_Personales(
	datos_personales_id INTEGER NOT NULL AUTO_INCREMENT,
	nombres VARCHAR(100),
	apellido VARCHAR(100),
	sexo CHAR(1),
	estado_civil VARCHAR(20),
	dni VARCHAR(20) NOT NULL UNIQUE,
	
	PRIMARY KEY (datos_personales_id),
	INDEX USING BTREE (dni)
) ENGINE = InnoDB;

CREATE TABLE Direccion (
	direccion_id INTEGER NOT NULL AUTO_INCREMENT,
	calle VARCHAR(50),
	provincia VARCHAR(50),
	ciudad VARCHAR(50),
	pais VARCHAR(50),
	datos_personales_id INTEGER NOT NULL,

	CONSTRAINT FOREIGN KEY (datos_personales_id) REFERENCES Datos_personales (datos_personales_id) ON DELETE CASCADE ON UPDATE CASCADE,
	PRIMARY KEY (direccion_id)
) ENGINE = InnoDB;

CREATE TABLE Telefono(
	telefono_id INTEGER NOT NULL AUTO_INCREMENT,
	fijo VARCHAR(50),
	movil VARCHAR(50),
	datos_personales_id INTEGER NOT NULL,

	CONSTRAINT FOREIGN KEY (datos_personales_id) REFERENCES Datos_personales (datos_personales_id) ON DELETE CASCADE ON UPDATE CASCADE,
	PRIMARY KEY (telefono_id)
) ENGINE = InnoDB;

CREATE TABLE Objetivo(
	objetivo_id INTEGER NOT NULL AUTO_INCREMENT,
	objetivo VARCHAR(500),
	datos_personales_id INTEGER NOT NULL,

	CONSTRAINT FOREIGN KEY (datos_personales_id) REFERENCES Datos_personales (datos_personales_id) ON DELETE CASCADE ON UPDATE CASCADE,
	PRIMARY KEY (objetivo_id)
) ENGINE = InnoDB;

CREATE TABLE Experiencia_laboral(
	experiencia_laboral_id INTEGER NOT NULL AUTO_INCREMENT,
	empresa VARCHAR(50),
	actividad_empresa VARCHAR(100),
	pais VARCHAR(50),
	puesto VARCHAR(100),
	nivel VARCHAR(50),
	desde VARCHAR(100),
	hasta VARCHAR(100),
	area_puesto VARCHAR(150),
	descripcion VARCHAR(255),
	personas_cargo INTEGER,
	persona_referencia VARCHAR(50),
	datos_personales_id INTEGER NOT NULL,

	CONSTRAINT FOREIGN KEY (datos_personales_id) REFERENCES Datos_personales (datos_personales_id) ON DELETE CASCADE ON UPDATE CASCADE,
	PRIMARY KEY (experiencia_laboral_id)
) ENGINE = InnoDB;

CREATE TABLE Estudios(
	estudios_id INTEGER NOT NULL AUTO_INCREMENT,
	casa_estudios VARCHAR(100),
	nivel VARCHAR(50),
	especialidad VARCHAR(100),
	desde VARCHAR(100),
	hasta VARCHAR(100),
	datos_personales_id INTEGER,

	CONSTRAINT FOREIGN KEY (datos_personales_id) REFERENCES Datos_personales (datos_personales_id) ON DELETE CASCADE ON UPDATE CASCADE,
	PRIMARY KEY (estudios_id)
) ENGINE = InnoDB;

CREATE TABLE Idiomas(
	idiomas_id INTEGER NOT NULL AUTO_INCREMENT,
	idioma VARCHAR(50),
	oral VARCHAR(20),
	escrito VARCHAR(50),
	datos_personales_id INTEGER,

	CONSTRAINT FOREIGN KEY (datos_personales_id) REFERENCES Datos_personales (datos_personales_id) ON DELETE CASCADE ON UPDATE CASCADE,
	PRIMARY KEY (idiomas_id)

) ENGINE = InnoDB;

