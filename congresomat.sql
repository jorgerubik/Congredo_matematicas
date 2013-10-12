--
--						#####################		NOTAS		#####################
--
--
--

USE congresomat;




####################################################################################
####################################################################################
##############                   PRINCIPIO CATALOGOS                 ###############
####################################################################################
####################################################################################

# Catálogo países
# VER OPCIONES CATÁLOGOS PREDEFINIDOS
# 
-- CREATE TABLE paises (
-- 	id_pais 	VARCHAR(4) 	NOT NULL,
-- 	nombre_pais VARCHAR(40) NOT NULL,

-- 	PRIMARY KEY (id_pais)
-- ) ENGINE = InnoDB;

-- # Catálogo de estados (de países)
-- # VER OPCIONES CATALOGOS PREDEFINIDOS
-- #
-- CREATE TABLE estados (
-- 	id_estado		VARCHAR(5)	NOT NULL,
-- 	id_pais			VARCHAR(4)	NOT NULL,
-- 	nombre_estado	VARCHAR(30) NOT NULL,

-- 	PRIMARY KEY (id_estado),

-- 	-- FOREIGN KEY (id_pais)
-- 	-- 	REFERENCES paises(id_pais)
-- ) ENGINE = InnoDB;

-- # Catálogo de grados acadámicos
-- #
-- CREATE TABLE grados_academicos (
-- 	id_grado 	VARCHAR(4) 	NOT NULL,
-- 	descripcion VARCHAR(30) NOT NULL,

-- 	PRIMARY KEY (id_grado)
-- ) ENGINE = InnoDB;

-- # Catálogo de Instituciones
-- #
-- CREATE TABLE instituciones (
-- 	id_institucion 		VARCHAR(5) 	NOT NULL,
-- 	nombre_institucion 	VARCHAR(70) NOT NULL,
-- 	id_pais 			VARCHAR(4) 	NOT NULL,

-- 	PRIMARY KEY (id_institucion),

-- 	FOREIGN KEY (id_pais)
-- 		REFERENCES paises(id_pais)
-- ) ENGINE = InnoDB;

-- # Catálogo de sedes/campus (de Instituciones)
-- #
-- CREATE TABLE campus (
-- 	id_campus		VARCHAR(5)	NOT NULL,
-- 	nombre_campus	VARCHAR(70) NOT NULL,
-- 	id_institucion	VARCHAR(5)	NOT NULL,
-- 	id_estado		VARCHAR(5)	NOT NULL,

-- 	PRIMARY KEY (id_campus),

-- 	FOREIGN KEY (id_institucion)
-- 		REFERENCES instituciones(id_institucion),
-- 	FOREIGN KEY (id_estado) 
-- 		REFERENCES estados(id_estado)
-- ) ENGINE = InnoDB;

# Catalogo de tipos de congresista
#
CREATE TABLE tipos_congresista (
	id_tipo_congresista	VARCHAR(5)	NOT NULL,
	descripcion			VARCHAR(25)	NOT NULL,

	PRIMARY KEY(id_tipo_congresista)
) ENGINE = InnoDB;

# Catálogo de pagos para cada tipo de congresista
#
CREATE TABLE tipos_pago (
	id_tipo_pago		VARCHAR(3)	NOT NULL,
	id_tipo_congresista	VARCHAR(5)	NOT NULL,
	fecha_pago_inicio	DATE 		NOT NULL,
	fecha_pago_fin		DATE 		NOT NULL,
	costo				VARCHAR(8)	NOT NULL,

	PRIMARY KEY (id_tipo_pago),

	FOREIGN KEY (id_tipo_congresista)
		REFERENCES tipos_congresista(id_tipo_congresista)
) ENGINE = InnoDB;

# Catálogo de categorías para ponencia oral y cartel (investigación o experiencia en aula)
#
CREATE TABLE categorias (
	id_categoria	VARCHAR(3)	NOT NULL,
	descripcion		VARCHAR(25)	NOT NULL,

	PRIMARY KEY (id_categoria)
) ENGINE = InnoDB;

# Catálogo de áreas para ponencia oral y cartel (enseñanza o aplicación de las matemáticas)
#
CREATE TABLE areas (
	id_area		VARCHAR(3)	NOT NULL,
	descripcion	VARCHAR(35)	NOT NULL,

	PRIMARY KEY (id_area)
) ENGINE = InnoDB;

# Catálogo de modalidades de cada area
#
CREATE TABLE modalidades (
	id_modalidad	VARCHAR(3)	NOT NULL,
	descripcion		VARCHAR(50)	NOT NULL,
	id_area			VARCHAR(3)  NOT NULL,

	PRIMARY KEY (id_modalidad),
	FOREIGN KEY (id_area)
		REFERENCES areas(id_area)
) ENGINE = InnoDB;

####################################################################################
####################################################################################
#################                   FIN CATALOGOS                 ##################
####################################################################################
####################################################################################





# Datos de registro de grupos
#
CREATE TABLE grupos (
	id_grupo				VARCHAR(4)	NOT NULL,
	id_institucion			VARCHAR(5)	NOT NULL,
	cantidad_miembros_grupo	SMALLINT	NOT NULL,

	PRIMARY KEY (id_grupo)
	) ENGINE = InnoDB;

# Datos de registro de usuarios
#
CREATE TABLE usuarios (
	id_usuario 			VARCHAR(15) NOT NULL,
	RFC 				VARCHAR(13) NOT NULL,
	contrasena 			VARCHAR(16) NOT NULL,
	nombre_usuario		VARCHAR(40)	NOT NULL,
	apellido_paterno	VARCHAR(25)	NOT NULL,
	apellido_materno	VARCHAR(25)	NOT NULL,
	email 				VARCHAR(50) NOT NULL,

	PRIMARY KEY (id_usuario)
) ENGINE = InnoDB;


# Trayectoria academica de usuarios
#
CREATE TABLE trayectoria_academica (
	id_usuario		VARCHAR(15)	NOT NULL,
	id_grado		VARCHAR(20)	NOT NULL,

	PRIMARY KEY (id_usuario)
) ENGINE = InnoDB;

# Trayectoria laboral de usuarios
#
CREATE TABLE trayectoria_laboral (
	id_usuario		VARCHAR(15)	NOT NULL,
	id_institucion	VARCHAR(5)	NOT NULL,
	id_pais 		VARCHAR(20)	NOT NULL,
	id_estado		VARCHAR(50)	NOT NULL,

	PRIMARY KEY (id_usuario)
) ENGINE = InnoDB;

# Tabla para distinguir que tipo de congresista es cada usuario (un usuario puede ser mas de un tipo)
#
CREATE TABLE inscripcion_congresistas (
	id_usuario			VARCHAR(15)	NOT NULL,
	id_tipo_congresista VARCHAR(3) NOT NULL,

	PRIMARY KEY (id_usuario, id_tipo_congresista)
) ENGINE = InnoDB;

# Registro de pagos de congresistas
#
CREATE TABLE pagos (
	id_usuario			VARCHAR(15)	NOT NULL,
	id_tipo_pago		VARCHAR(3)	NOT NULL,
    pago_aprobado		BIT			NOT NULL,

    PRIMARY KEY (id_usuario),

	FOREIGN KEY (id_usuario)
		REFERENCES usuarios(id_usuario),
	FOREIGN KEY (id_tipo_pago)
		REFERENCES tipos_pago (id_tipo_pago)
) ENGINE = InnoDB;

# Tabla donde se almacenarán las imágenes de los comprobantes de pago que los congresistas envíen
#
CREATE TABLE comprobantes_pago (
	folio_comprobante	INT			NOT NULL AUTO_INCREMENT,
	id_usuario			VARCHAR(15)	NOT NULL,
	imagen_comprobante	MEDIUMBLOB	NOT NULL,
	formato_comprobante	VARCHAR(10)	NOT NULL,

	PRIMARY KEY (folio_comprobante),
	FOREIGN KEY (id_usuario)
		REFERENCES usuarios(id_usuario)
) ENGINE = InnoDB;




################################################################
# 			TABLAS PARA REGISTRO DE PONENCIAS INICIO           #
################################################################

# Registro de resumenes y extensos las ponencias orales
#
CREATE TABLE ponencias_oral (
	id_ponencia_oral	 VARCHAR(5)	 NOT NULL,
	id_usuario			 VARCHAR(15) NOT NULL,
	id_categoria		 VARCHAR(3)  NOT NULL,
	id_modalidad		 VARCHAR(3)  NOT NULL,
	titulo_oral			 TEXT		 NOT NULL,
	resumen_oral		 TEXT		 NOT NULL,
	referencias_oral	 TEXT		 NOT NULL,
	aceptado_oral		 BIT/*BOOL*/ NOT NULL,
	extenso_oral		 MEDIUMBLOB	 NOT NULL,
	formato_extenso_oral VARCHAR(10) NOT NULL,

	PRIMARY KEY (id_ponencia_oral),

	FOREIGN KEY (id_usuario)
		REFERENCES usuarios(id_usuario),
	FOREIGN KEY (id_categoria)
		REFERENCES categorias(id_categoria),
	FOREIGN KEY (id_modalidad)
		REFERENCES modalidades(id_modalidad)
) ENGINE = InnoDB;

# Registro de resumenes y carteles para las ponencias de cartel
#
CREATE TABLE ponencias_cartel (
	id_ponencia_cartel	 	VARCHAR(5)	NOT NULL,
	id_usuario			 	VARCHAR(15)	NOT NULL,
	id_categoria		 	VARCHAR(3)  NOT NULL,
	id_modalidad		 	VARCHAR(3)  NOT NULL,
	titulo_cartel			TEXT		NOT NULL,
	resumen_cartel		 	TEXT		NOT NULL,
	referencias_cartel	 	TEXT		NOT NULL,
	aceptado_cartel		 	BIT/*BOOL*/ NOT NULL,
	archivo_cartel		    MEDIUMBLOB	NOT NULL,
	formato_archivo_cartel	VARCHAR(10) NOT NULL,
	lugar_cartel			VARCHAR(30)	NOT NULL,
	fecha_cartel			DATE 		NOT NULL,

	PRIMARY KEY (id_ponencia_cartel),

	FOREIGN KEY (id_usuario)
		REFERENCES usuarios(id_usuario),
	FOREIGN KEY (id_categoria)
		REFERENCES categorias(id_categoria),
	FOREIGN KEY (id_modalidad)
		REFERENCES modalidades(id_modalidad)
) ENGINE = InnoDB;

# Registro de talleres y cursos (material solicitado, fecha, hora y lugar del taller)
#
CREATE TABLE ponencias_taller (
	id_ponencia_taller	VARCHAR(5)	NOT NULL,
	id_usuario			VARCHAR(15)	NOT NULL,
	titulo_taller		TEXT		NOT NULL,
 -- contenido_taller			 
	resumen_taller		TEXT		NOT NULL,
	referencias_taller	TEXT		NOT NULL,
	aceptado_taller		BIT			NOT NULL,
	material_taller		TEXT		NOT NULL,
	fecha_taller_ini	DATE 		NOT NULL,
	fecha_taller_fin	DATE 		NOT NULL,
	hora_taller_ini		TIME 		NOT NULL,
	hora_taller_fin		TIME		NOT NULL,
	edificio_taller		VARCHAR(4)	NOT NULL,


	PRIMARY KEY (id_ponencia_taller),

	FOREIGN KEY (id_usuario)
		REFERENCES usuarios(id_usuario)
) ENGINE = InnoDB;

################################################################
# 			TABLAS PARA REGISTRO DE PONENCIAS FINAL            #
################################################################

# Tabla para la idendificación de los autores de cada ponencia
#
#CREATE TABLE autores (
#	
#	) ENGINE = InnoDB;