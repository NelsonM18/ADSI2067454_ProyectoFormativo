-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-12-2021 a las 21:38:33
-- Versión del servidor: 10.5.12-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id18010578_sgi_ceb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `circulares`
--

CREATE TABLE `circulares` (
  `id_circular` tinyint(10) NOT NULL,
  `nombre_circular` varchar(60) NOT NULL,
  `fecha_circular` date NOT NULL,
  `comentario` varchar(60) NOT NULL,
  `tipo` varchar(60) NOT NULL,
  `ruta` varchar(200) NOT NULL,
  `size` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `circulares`
--

INSERT INTO `circulares` (`id_circular`, `nombre_circular`, `fecha_circular`, `comentario`, `tipo`, `ruta`, `size`) VALUES
(50, 'Circular de ejemplo', '2021-01-21', 'Esta es una prueba de una circular.', 'application/pdf', 'Circular_de_ejemplo.pdf', 6463),
(51, 'Circular Ejemplo', '2021-01-21', 'Ejemplo de comentario.', 'application/pdf', 'Circular_de_ejemplo2.pdf', 6463),
(65, 'akjhjlihj', '2003-12-21', 'aaa', 'application/pdf', 'Circular_de_ejemplo3.pdf', 6463);

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
(11, '2021-06-19', '19:00:48', 'Ejemplo', '1000590174'),
(12, '2021-06-19', '19:08:25', 'asdasd', '1000590174'),
(23, '2021-06-29', '08:10:20', '', '1000111111'),
(25, '2021-09-23', '17:28:43', 'Ejemplo3', '1000111111'),
(26, '2021-09-23', '17:28:52', 'Ejemplo 5\r\n', '1000111111'),
(28, '2021-09-23', '17:38:07', '', '1000111111'),
(29, '2021-09-23', '17:38:27', 'este historial creado por profesor.', '1000111111'),
(30, '2021-11-17', '12:45:24', 'a', '1000111111'),
(31, '2021-11-17', '12:45:38', 'a', '3000590174'),
(32, '2021-11-17', '12:46:17', 'a', '2000590174'),
(34, '2021-11-17', '16:25:16', 'a', '1000590174'),
(37, '2021-11-17', '16:34:36', 'a', '1000590174'),
(38, '2021-11-17', '16:36:39', 'a', '1000590174'),
(39, '2021-11-17', '16:36:50', 'a', '2000590174'),
(40, '2021-11-17', '16:37:08', 'esto es con el scaner', '3000590174'),
(41, '2021-11-17', '16:37:31', 'esto es con el scaner', '2000590174'),
(42, '2021-11-17', '16:37:52', 'scaner', '1000590174'),
(44, '2021-11-17', '16:39:24', 'este si es un admin scaner', '1000123123'),
(45, '2021-11-17', '16:46:00', '', '1000590174'),
(46, '2021-11-18', '11:04:38', 'ao tajhsdkff', '1000590174'),
(47, '2021-11-18', '11:04:45', '', '1000590174'),
(48, '2021-11-19', '21:54:17', '', '1000590174'),
(49, '2021-11-25', '23:14:58', '', '1000590174'),
(50, '2021-11-25', '23:15:27', 'Este fue desde el celular', '1000590174'),
(52, '2021-12-03', '17:53:05', '', '1000590174'),
(53, '2021-12-03', '17:53:21', 'este es desde el adminaaaaaa', '1000590174'),
(54, '2021-12-03', '17:59:14', 'asdasd', '1000590174'),
(55, '2021-12-03', '19:41:27', '', '2000590174'),
(56, '2021-12-03', '21:10:41', '', '1000111111'),
(57, '2021-12-03', '21:24:32', '', '1000590174'),
(58, '2021-12-03', '21:27:49', '', '1000111111'),
(59, '2021-12-03', '21:29:26', '', '1000111111');

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
('1000590170', 'daviduno', '', 'asdasd', '', '2021-11-12', 2, 1, 3, 1, 1),
('1000590174', 'David', 'Fernando', 'Gonzalez', 'Garcia', '2001-09-13', 1, 1, 7, 1, 1),
('1193518889', 'Nelson', 'Felipe', 'Merlano', 'Dominguez', '2001-10-18', 1, 1, 1, 1, 1),
('2000590174', 'Personal', '', 'Administrativo', '', '2021-11-18', 1, 1, 1, 1, 1),
('3000590174', 'Vigilante', '', 'Colegio', '', '2021-11-09', 1, 1, 1, 1, 1);

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
(1, 'admin@gmail.com', '$2y$10$b9LPf8rEcVpMfdaed0rbkeatDmQ4gqIoP1XUm.Cx/9fyIya.B.Fy6', '47691', 1, '1000123123'),
(3, 'nelson@gmail.com', '$2y$10$0Tfymsr.yvYXbSVyB8Ab2ORVZPqQk8LtYKUXMM9GpkfMfiw.JbPv6', NULL, 1, '1193518889'),
(4, 'david@gmail.com', '$2y$10$1lJfXvzfg0hmxmHEi9QU4utDxeh2d5.vLxp1myz5ypcshRZi8K.7W', '65332', 3, '1000590174'),
(15, 'personal@gmail.com', '$2y$10$s4iJfM82jTdGguUoqZwPOOF56.usfS4l0FuCEhMAiZempqyl6uPDW', '75924', 4, '2000590174'),
(16, 'vigilante@gmail.com', '$2y$10$ZoeFQZKSWsot2ToU6WtqyuXzgx8B.v6gmhqoAec4MNuqCEaEXovXW', NULL, 2, '3000590174');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `circulares`
--
ALTER TABLE `circulares`
  ADD PRIMARY KEY (`id_circular`);

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
-- AUTO_INCREMENT de la tabla `circulares`
--
ALTER TABLE `circulares`
  MODIFY `id_circular` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_estudiante` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `historial_ingreso`
--
ALTER TABLE `historial_ingreso`
  MODIFY `id_historial` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
