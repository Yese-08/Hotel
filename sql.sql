CREATE TABLE habitacion (
    numero_hab  INT AUTO_INCREMENT PRIMARY KEY,
    categoria VARCHAR(50) NOT NULL,
    detalles TEXT NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    estado VARCHAR(20) DEFAULT 'disponible'
);
CREATE TABLE `cliente` (
  `nombre` varchar(100) NOT NULL,
  `tipo_documento` varchar(20) NOT NULL,
  `numero_documento` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `pregunta` varchar(100) NOT NULL,
  `respuesta` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL);


CREATE TABLE servicios (
    cod INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    precio DECIMAL(10,2) NOT NULL
);

CREATE TABLE reserva (
    numero_reserva INT AUTO_INCREMENT PRIMARY KEY,
    numero_documento VARCHAR(20),
    nombre_cliente VARCHAR(100),
    nacionalidad VARCHAR(50),
    telefono VARCHAR(20),
    email VARCHAR(100),
    numero_hab INT,
    costo DECIMAL(10,2),
    numero_personas INT,
    fecha_ingreso DATE,
    fecha_salida DATE,
    numero_noches INT,
    servicios_adicionales VARCHAR(255),
    costo_servicio DECIMAL(10,2),
    total_pagar DECIMAL(10,2)
);