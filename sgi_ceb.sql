-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2021 a las 00:50:40
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

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
-- Estructura de tabla para la tabla `ciculares`
--

CREATE TABLE `ciculares` (
  `id_cicular` tinyint(10) NOT NULL,
  `circular` tinyblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` tinyint(10) NOT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_estudiante` tinyint(10) NOT NULL,
  `jornada_academica_id_jornada_academica` tinyint(10) NOT NULL,
  `persona_num_documento` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_estudiante`, `jornada_academica_id_jornada_academica`, `persona_num_documento`) VALUES
(1, 1, '1000111111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` tinyint(10) NOT NULL,
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
-- Estructura de tabla para la tabla `grupo_sanguineo`
--

CREATE TABLE `grupo_sanguineo` (
  `id_grupo_sanguineo` tinyint(10) NOT NULL,
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
  `id_historial` tinyint(10) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `hora_ingreso` time NOT NULL,
  `comentario_historial` varchar(60) DEFAULT NULL,
  `persona_num_documento` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial_ingreso`
--

INSERT INTO `historial_ingreso` (`id_historial`, `fecha_ingreso`, `hora_ingreso`, `comentario_historial`, `persona_num_documento`) VALUES
(1, '2021-03-08', '06:10:24', 'asdasdsadd', '1000123123'),
(11, '2021-06-19', '19:00:48', 'Ejemplo', '1000590174'),
(12, '2021-06-19', '19:08:25', 'asdasd', '1000590174'),
(23, '2021-06-29', '08:10:20', '', '1000111111'),
(25, '2021-09-23', '17:28:43', 'Ejemplo3', '1000111111'),
(26, '2021-09-23', '17:28:52', 'Ejemplo 5\r\n', '1000111111'),
(28, '2021-09-23', '17:38:07', '', '1000111111'),
(29, '2021-09-23', '17:38:27', 'este historial creado por profesor.', '1000111111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada_academica`
--

CREATE TABLE `jornada_academica` (
  `id_jornada_academica` tinyint(10) NOT NULL,
  `jornada_academica` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
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
  `tipo_documento_id_tipo_documento` tinyint(10) NOT NULL,
  `tipo_persona_id_tipo_persona` tinyint(10) NOT NULL,
  `grupo_sanguineo_id_grupo_sanguineo` tinyint(10) NOT NULL,
  `genero_id_genero` tinyint(10) NOT NULL,
  `estado_id_estado` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`num_documento`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `fecha_nacimiento`, `tipo_documento_id_tipo_documento`, `tipo_persona_id_tipo_persona`, `grupo_sanguineo_id_grupo_sanguineo`, `genero_id_genero`, `estado_id_estado`) VALUES
('1000000000', 'laura', 'Maria', 'Torres', 'Leon', '1970-04-11', 1, 2, 1, 2, 1),
('1000111111', 'Codak', 'Andres', 'Gomez', 'Garzon', '2002-03-15', 2, 3, 1, 1, 2),
('1000111113', 'ejemploUsuario', '', 'a', '', '2021-09-22', 1, 1, 2, 1, 1),
('1000123123', 'admin_ceb', '', 'admin_ceb', '', '2001-09-13', 1, 1, 1, 1, 1),
('1000590174', 'David', 'Fernando', 'Gonzalez', 'Garcia', '2001-09-13', 1, 1, 7, 1, 1),
('1193518889', 'Nelson', 'Felipe', 'Merlano', 'Dominguez', '2001-10-18', 1, 1, 1, 1, 1),
('12313', 'asd123', '', 'asdasd123', '', '2021-06-09', 2, 1, 3, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` tinyint(10) NOT NULL,
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
  `id_tipo_documento` tinyint(10) NOT NULL,
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
  `id_tipo_persona` tinyint(10) NOT NULL,
  `tipo_persona` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_persona`
--

INSERT INTO `tipo_persona` (`id_tipo_persona`, `tipo_persona`) VALUES
(1, 'Institucional'),
(2, 'Externo'),
(3, 'Estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` tinyint(10) NOT NULL,
  `correo_usuario` varchar(45) NOT NULL,
  `clave_usuario` varchar(100) NOT NULL,
  `pin_key` varchar(10) DEFAULT NULL,
  `rol_id_rol` tinyint(10) NOT NULL,
  `persona_num_documento` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `correo_usuario`, `clave_usuario`, `pin_key`, `rol_id_rol`, `persona_num_documento`) VALUES
(1, 'admin@gmail.com', '$2y$10$b9LPf8rEcVpMfdaed0rbkeatDmQ4gqIoP1XUm.Cx/9fyIya.B.Fy6', NULL, 1, '1000123123'),
(3, 'nelson@gmail.com', '$2y$10$0Tfymsr.yvYXbSVyB8Ab2ORVZPqQk8LtYKUXMM9GpkfMfiw.JbPv6', NULL, 1, '1193518889'),
(4, 'david@gmail.com', '$2y$10$1lJfXvzfg0hmxmHEi9QU4utDxeh2d5.vLxp1myz5ypcshRZi8K.7W', NULL, 3, '1000590174');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciculares`
--
ALTER TABLE `ciculares`
  ADD PRIMARY KEY (`id_cicular`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_estudiante`,`persona_num_documento`),
  ADD KEY `fk_estudiante_persona1_idx` (`persona_num_documento`),
  ADD KEY `fk_estudiante_jornada_academica1_idx` (`jornada_academica_id_jornada_academica`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

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
  ADD KEY `fk_persona_tipo_persona_idx` (`tipo_persona_id_tipo_persona`),
  ADD KEY `fk_persona_grupo_sanguineo1_idx` (`grupo_sanguineo_id_grupo_sanguineo`),
  ADD KEY `fk_persona_genero1_idx` (`genero_id_genero`),
  ADD KEY `fk_persona_estado1_idx` (`estado_id_estado`),
  ADD KEY `fk_persona_tipo_documento1_idx` (`tipo_documento_id_tipo_documento`);

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
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_estudiante` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `historial_ingreso`
--
ALTER TABLE `historial_ingreso`
  MODIFY `id_historial` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `fk_estudiante_jornada_academica1` FOREIGN KEY (`jornada_academica_id_jornada_academica`) REFERENCES `jornada_academica` (`id_jornada_academica`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estudiante_persona1` FOREIGN KEY (`persona_num_documento`) REFERENCES `persona` (`num_documento`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `historial_ingreso`
--
ALTER TABLE `historial_ingreso`
  ADD CONSTRAINT `fk_historial_ingreso_persona1` FOREIGN KEY (`persona_num_documento`) REFERENCES `persona` (`num_documento`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_persona_estado1` FOREIGN KEY (`estado_id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_persona_genero1` FOREIGN KEY (`genero_id_genero`) REFERENCES `genero` (`id_genero`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_persona_grupo_sanguineo1` FOREIGN KEY (`grupo_sanguineo_id_grupo_sanguineo`) REFERENCES `grupo_sanguineo` (`id_grupo_sanguineo`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_persona_tipo_documento1` FOREIGN KEY (`tipo_documento_id_tipo_documento`) REFERENCES `tipo_documento` (`id_tipo_documento`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_persona_tipo_persona` FOREIGN KEY (`tipo_persona_id_tipo_persona`) REFERENCES `tipo_persona` (`id_tipo_persona`) ON DELETE CASCADE ON UPDATE NO ACTION;

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
