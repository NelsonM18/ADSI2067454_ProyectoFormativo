-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-05-2021 a las 19:38:01
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sgi_ceb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acudiente`
--

CREATE TABLE `acudiente` (
  `id_acudiente` int(11) NOT NULL,
  `telefono_acudiente` varchar(30) NOT NULL,
  `direccion_acudiente` varchar(60) NOT NULL,
  `persona_num_documento` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `acudiente`
--

INSERT INTO `acudiente` (`id_acudiente`, `telefono_acudiente`, `direccion_acudiente`, `persona_num_documento`) VALUES
(1, '301000000', 'kr 93 c sur #80-20', '1000000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_estudiante` int(11) NOT NULL,
  `grado_academico_id_grado_academico` int(11) NOT NULL,
  `jornada_academica_id_jornada_academica` int(11) NOT NULL,
  `acudiente_id_acudiente` int(11) NOT NULL,
  `persona_num_documento` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_estudiante`, `grado_academico_id_grado_academico`, `jornada_academica_id_jornada_academica`, `acudiente_id_acudiente`, `persona_num_documento`) VALUES
(1, 1, 1, 1, '1000111111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `genero` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `genero`) VALUES
(1, 'Masculino'),
(2, 'Femenino'),
(3, 'Indefinido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado_academico`
--

CREATE TABLE `grado_academico` (
  `id_grado_academico` int(11) NOT NULL,
  `grado_academico` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grado_academico`
--

INSERT INTO `grado_academico` (`id_grado_academico`, `grado_academico`) VALUES
(1, 'primero'),
(2, 'segundo'),
(3, 'tercero'),
(4, 'cuarto'),
(5, 'quinto'),
(6, 'sexto'),
(7, 'septimo'),
(8, 'octavo'),
(9, 'noveno'),
(10, 'decimo'),
(11, 'once');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_sanguineo`
--

CREATE TABLE `grupo_sanguineo` (
  `id_grupo_sanguineo` int(11) NOT NULL,
  `grupo_sanguineo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupo_sanguineo`
--

INSERT INTO `grupo_sanguineo` (`id_grupo_sanguineo`, `grupo_sanguineo`) VALUES
(1, 'A+'),
(2, 'A-'),
(3, 'B+'),
(4, 'B-'),
(5, 'AB+'),
(6, 'AB-'),
(7, 'O+'),
(8, 'O-');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_ingreso`
--

CREATE TABLE `historial_ingreso` (
  `id_historial` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `hora_ingreso` time NOT NULL,
  `comentario_historial` varchar(60) DEFAULT NULL,
  `persona_num_documento` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial_ingreso`
--

INSERT INTO `historial_ingreso` (`id_historial`, `fecha_ingreso`, `hora_ingreso`, `comentario_historial`, `persona_num_documento`) VALUES
(1, '2021-03-08', '06:10:24', NULL, '1000123123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada_academica`
--

CREATE TABLE `jornada_academica` (
  `id_jornada_academica` int(11) NOT NULL,
  `jornada_academica` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jornada_academica`
--

INSERT INTO `jornada_academica` (`id_jornada_academica`, `jornada_academica`) VALUES
(1, 'mañana'),
(2, 'tarde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `num_documento` varchar(25) NOT NULL,
  `primer_nombre` varchar(45) NOT NULL,
  `segundo_nombre` varchar(45) DEFAULT NULL,
  `primer_apellido` varchar(45) NOT NULL,
  `segundo_apellido` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `grupo_sanguineo_id_grupo_sanguineo` int(11) NOT NULL,
  `tipo_documento_id_tipo_documento` int(11) NOT NULL,
  `tipo_persona_id_tipo_persona` int(11) NOT NULL,
  `genero_id_genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`num_documento`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `fecha_nacimiento`, `grupo_sanguineo_id_grupo_sanguineo`, `tipo_documento_id_tipo_documento`, `tipo_persona_id_tipo_persona`, `genero_id_genero`) VALUES
('1000000000', 'Laura', 'Maria', 'Torres', 'Leon', '1970-04-11', 1, 1, 2, 2),
('1000111111', 'Pedro', 'Andres', 'Gomez', 'Garzon', '2002-03-15', 1, 2, 1, 1),
('1000123123', 'admin_ceb', '', 'admin_ceb', '', '2001-09-13', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`) VALUES
(1, 'admin'),
(2, 'vigilante'),
(3, 'profesor'),
(4, 'personal_admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_tipo_documento` int(11) NOT NULL,
  `tipo_documento` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id_tipo_documento`, `tipo_documento`) VALUES
(1, 'Cedula'),
(2, 'Tarjeta de identidad'),
(3, 'Cedula de extranjeria'),
(4, 'Pasaporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_persona`
--

CREATE TABLE `tipo_persona` (
  `id_tipo_persona` int(11) NOT NULL,
  `tipo_persona` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_persona`
--

INSERT INTO `tipo_persona` (`id_tipo_persona`, `tipo_persona`) VALUES
(1, 'Institucional'),
(2, 'Externo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `correo_usuario` varchar(45) NOT NULL,
  `clave_usuario` varchar(100) NOT NULL,
  `rol_id_rol` int(11) NOT NULL,
  `persona_num_documento` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `correo_usuario`, `clave_usuario`, `rol_id_rol`, `persona_num_documento`) VALUES
(1, 'admin@gmail.com', '$2y$10$b9LPf8rEcVpMfdaed0rbkeatDmQ4gqIoP1XUm.Cx/9fyIya.B.Fy6', 1, '1000123123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acudiente`
--
ALTER TABLE `acudiente`
  ADD PRIMARY KEY (`id_acudiente`,`persona_num_documento`),
  ADD KEY `fk_acudiente_persona1_idx` (`persona_num_documento`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_estudiante`,`persona_num_documento`),
  ADD KEY `fk_estudiante_grado_academico1_idx` (`grado_academico_id_grado_academico`),
  ADD KEY `fk_estudiante_jornada_academica1_idx` (`jornada_academica_id_jornada_academica`),
  ADD KEY `fk_estudiante_persona1_idx` (`persona_num_documento`),
  ADD KEY `fk_estudiante_acudiente1_idx` (`acudiente_id_acudiente`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `grado_academico`
--
ALTER TABLE `grado_academico`
  ADD PRIMARY KEY (`id_grado_academico`);

--
-- Indices de la tabla `grupo_sanguineo`
--
ALTER TABLE `grupo_sanguineo`
  ADD PRIMARY KEY (`id_grupo_sanguineo`);

--
-- Indices de la tabla `historial_ingreso`
--
ALTER TABLE `historial_ingreso`
  ADD PRIMARY KEY (`id_historial`),
  ADD KEY `fk_historial_ingreso_persona1_idx` (`persona_num_documento`);

--
-- Indices de la tabla `jornada_academica`
--
ALTER TABLE `jornada_academica`
  ADD PRIMARY KEY (`id_jornada_academica`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`num_documento`,`tipo_documento_id_tipo_documento`),
  ADD KEY `fk_usuario_grupo_sanguineo1_idx` (`grupo_sanguineo_id_grupo_sanguineo`),
  ADD KEY `fk_usuario_tipo_documento1_idx` (`tipo_documento_id_tipo_documento`),
  ADD KEY `fk_persona_tipo_persona1_idx` (`tipo_persona_id_tipo_persona`),
  ADD KEY `fk_persona_genero1_idx` (`genero_id_genero`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id_tipo_documento`);

--
-- Indices de la tabla `tipo_persona`
--
ALTER TABLE `tipo_persona`
  ADD PRIMARY KEY (`id_tipo_persona`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`,`persona_num_documento`),
  ADD KEY `fk_usuario_rol1_idx` (`rol_id_rol`),
  ADD KEY `fk_usuario_persona1_idx` (`persona_num_documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acudiente`
--
ALTER TABLE `acudiente`
  MODIFY `id_acudiente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `historial_ingreso`
--
ALTER TABLE `historial_ingreso`
  MODIFY `id_historial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo_persona`
--
ALTER TABLE `tipo_persona`
  MODIFY `id_tipo_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acudiente`
--
ALTER TABLE `acudiente`
  ADD CONSTRAINT `fk_acudiente_persona1` FOREIGN KEY (`persona_num_documento`) REFERENCES `persona` (`num_documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `fk_estudiante_acudiente1` FOREIGN KEY (`acudiente_id_acudiente`) REFERENCES `acudiente` (`id_acudiente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estudiante_grado_academico1` FOREIGN KEY (`grado_academico_id_grado_academico`) REFERENCES `grado_academico` (`id_grado_academico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estudiante_jornada_academica1` FOREIGN KEY (`jornada_academica_id_jornada_academica`) REFERENCES `jornada_academica` (`id_jornada_academica`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estudiante_persona1` FOREIGN KEY (`persona_num_documento`) REFERENCES `persona` (`num_documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `historial_ingreso`
--
ALTER TABLE `historial_ingreso`
  ADD CONSTRAINT `fk_historial_ingreso_persona1` FOREIGN KEY (`persona_num_documento`) REFERENCES `persona` (`num_documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_persona_genero1` FOREIGN KEY (`genero_id_genero`) REFERENCES `genero` (`id_genero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_persona_tipo_persona1` FOREIGN KEY (`tipo_persona_id_tipo_persona`) REFERENCES `tipo_persona` (`id_tipo_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_grupo_sanguineo1` FOREIGN KEY (`grupo_sanguineo_id_grupo_sanguineo`) REFERENCES `grupo_sanguineo` (`id_grupo_sanguineo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_tipo_documento1` FOREIGN KEY (`tipo_documento_id_tipo_documento`) REFERENCES `tipo_documento` (`id_tipo_documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_persona1` FOREIGN KEY (`persona_num_documento`) REFERENCES `persona` (`num_documento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_rol1` FOREIGN KEY (`rol_id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
