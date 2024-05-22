-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-04-2024 a las 22:07:39
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `5b_informatica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas_academicas`
--

CREATE TABLE `asignaturas_academicas` (
  `id_asignatura_aca` int(11) NOT NULL,
  `nombre_asignatura` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asignaturas_academicas`
--

INSERT INTO `asignaturas_academicas` (`id_asignatura_aca`, `nombre_asignatura`) VALUES
(1, 'lengua española'),
(2, 'Matemáticas'),
(3, 'Ciencias Sociales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones_academicas`
--

CREATE TABLE `calificaciones_academicas` (
  `id_calificaciones_aca` int(11) NOT NULL,
  `id_asignatura` varchar(255) NOT NULL,
  `Estudiante` varchar(255) NOT NULL,
  `p1` smallint(6) NOT NULL,
  `p2` smallint(6) NOT NULL,
  `p3` smallint(6) NOT NULL,
  `p4` smallint(6) NOT NULL,
  `cf` smallint(6) NOT NULL,
  `pa` smallint(6) NOT NULL,
  `cf_50` smallint(6) NOT NULL,
  `cpc` smallint(6) NOT NULL,
  `cpc_50` smallint(6) NOT NULL,
  `cc` smallint(6) NOT NULL,
  `cf_30` smallint(6) NOT NULL,
  `cp_ex` smallint(6) NOT NULL,
  `xp_ex_70` smallint(6) NOT NULL,
  `cex` smallint(6) NOT NULL,
  `situacion_final` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `calificaciones_academicas`
--

INSERT INTO `calificaciones_academicas` (`id_calificaciones_aca`, `id_asignatura`, `Estudiante`, `p1`, `p2`, `p3`, `p4`, `cf`, `pa`, `cf_50`, `cpc`, `cpc_50`, `cc`, `cf_30`, `cp_ex`, `xp_ex_70`, `cex`, `situacion_final`) VALUES
(20, '0', '', 77, 77, 77, 77, 77, 0, 39, 0, 0, 0, 23, 0, 0, 0, ''),
(21, '1', '5', 100, 99, 88, 77, 91, 0, 46, 0, 0, 0, 27, 0, 0, 0, '5'),
(22, '--', '5', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '5'),
(23, '--', '5', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '5'),
(24, '--', '5', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '5'),
(25, '--', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(26, '--', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(27, '--', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(28, '--', '', 95, 85, 75, 98, 88, 0, 44, 0, 0, 0, 26, 0, 0, 0, ''),
(29, '2', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(30, '1', '5', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones_mfs`
--

CREATE TABLE `calificaciones_mfs` (
  `id_calificaciones_mfs` int(11) NOT NULL,
  `PRA1` varchar(10) NOT NULL,
  `PRA2` varchar(10) NOT NULL,
  `PRA3` varchar(10) NOT NULL,
  `PRA4` varchar(10) NOT NULL,
  `PRA5` varchar(10) NOT NULL,
  `RA1` varchar(10) NOT NULL,
  `RA2` varchar(10) NOT NULL,
  `RA3` varchar(10) NOT NULL,
  `RA4` varchar(10) NOT NULL,
  `RA5` varchar(10) NOT NULL,
  `total_mf` smallint(6) NOT NULL,
  `situacion_final` varchar(2) NOT NULL,
  `id_estudiante` int(255) NOT NULL,
  `id_modulo_formativo` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `calificaciones_mfs`
--

INSERT INTO `calificaciones_mfs` (`id_calificaciones_mfs`, `PRA1`, `PRA2`, `PRA3`, `PRA4`, `PRA5`, `RA1`, `RA2`, `RA3`, `RA4`, `RA5`, `total_mf`, `situacion_final`, `id_estudiante`, `id_modulo_formativo`) VALUES
(12, '', '', '', '', '', '', '', '', '', '', 0, '', 0, 0),
(13, '', '', '', '', '', '', '', '', '', '', 0, '', 0, 0),
(14, '15', '15', '15', '15', '15', '15', '15', '15', '', '14', 72, '', 0, 0),
(15, '15', '15', '15', '15', '15', '15', '15', '15', '', '14', 72, '', 0, 0),
(16, '15', '15', '15', '15', '15', '15', '15', '15', '', '14', 72, '', 0, 0),
(17, '', '', '', '', '', '', '', '', '', '', 0, '', 0, 0),
(18, '', '', '', '', '', '', '', '', '', '', 0, '', 0, 0),
(19, '', '', '', '', '', '', '', '', '', '', 0, '', 0, 0),
(20, '', '', '', '', '', '', '', '', '', '', 0, '', 0, 0),
(21, '', '', '', '', '', '', '', '', '', '', 0, '', 0, 0),
(22, '15', '15', '15', '15', '15', '15', '15', '15', '', '15', 75, '', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id_docentes` int(11) NOT NULL,
  `primer_nombre` varchar(20) NOT NULL,
  `segundo_nombre` varchar(20) NOT NULL,
  `primer_apellido` varchar(20) NOT NULL,
  `segundo_apellido` varchar(20) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` varchar(4) NOT NULL,
  `genero` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id_docentes`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `direccion`, `telefono`, `email`, `fecha_nacimiento`, `edad`, `genero`) VALUES
(1, 'LIS', 'MARY', 'Rodríguez', 'Rodríguez', 'los salado', '809-545-6876', 'yandelrodriguez1629@gmail.com', '2006-11-08', '17', 'M'),
(2, 'MARIA', 'MARY', 'Rodríguez', 'Rodríguez', 'los salado', '809-980-9796', 'yandelrodriguez1629@gmail.com', '0000-00-00', '17', 'M'),
(3, 'Yandel', 'jesus', 'Rodríguez', 'Rodríguez', 'los salado', '809-555-6867', 'yandelrodriguez1629@gmail.com', '2006-11-08', '17', 'F'),
(4, 'YEO', 'DEREK', 'Rodríguez', 'Rodríguez', 'los salado', '809-111-9796', 'yandelrodriguez1629@gmail.com', '2006-11-08', '17', 'F'),
(5, 'MIGUEL', 'DEREK', 'Rodríguez', 'Rodríguez', 'los salado', '809-655-8676', 'yandelrodriguez1629@gmail.com', '2023-11-08', '17', 'F');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id_estudiantes` int(11) NOT NULL,
  `primer_nombre` varchar(20) NOT NULL,
  `segundo_nombre` varchar(20) NOT NULL,
  `primer_apellido` varchar(20) NOT NULL,
  `segundo_apellido` varchar(20) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` varchar(3) NOT NULL,
  `genero` varchar(2) NOT NULL,
  `patologia` varchar(20) NOT NULL,
  `iduser` int(255) NOT NULL,
  `id_grupo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id_estudiantes`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `direccion`, `email`, `telefono`, `fecha_nacimiento`, `edad`, `genero`, `patologia`, `iduser`, `id_grupo`) VALUES
(1, 'Yandel', 'jesus', 'Rodríguez', 'Rodríguez', 'los salado', 'yandelrodriguez1629@gmail.com', '809-545-6867', '2006-11-08', '5', 'F', 'NIGUNA', 5, '2'),
(2, 'ELIAS', 'DEREK', 'Rodríguez', 'Rodríguez', 'los salado', 'yandelrodriguez1629@gmail.com', '', '2006-11-08', '17', 'F', 'NIGUNA', 4, '3'),
(3, 'MIGUEL', 'DEREK', 'Rodríguez', 'Rodríguez', 'los salado', 'yandelrodriguez1629@gmail.com', '', '2023-11-08', '17', 'F', 'NIGUNA', 1, '4'),
(4, 'BENJAMIN', 'JESUS', 'Rodríguez', 'Rodríguez', 'los salado', 'yandelrodriguez1629@gmail.com', '', '2006-11-08', '17', 'F', 'NIGUNA', 3, '5'),
(5, 'DANEL', 'DEREK', 'Rodríguez', 'Rodríguez', 'los salado', 'yandelrodriguez1629@gmail.com', '809-786-8989', '2023-11-05', '17', 'F', 'NIGUNA', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

CREATE TABLE `grados` (
  `id_grado` int(11) NOT NULL,
  `nombre_grado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grados`
--

INSERT INTO `grados` (`id_grado`, `nombre_grado`) VALUES
(1, '4to'),
(2, '5to'),
(3, '6to'),
(4, '7to'),
(5, '8to');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(11) NOT NULL,
  `id_seccion` int(255) NOT NULL,
  `id_tituloformativo` int(255) NOT NULL,
  `id_docente` int(255) NOT NULL,
  `id_psicologo` int(255) NOT NULL,
  `grupos` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id_grupo`, `id_seccion`, `id_tituloformativo`, `id_docente`, `id_psicologo`, `grupos`) VALUES
(1, 2, 5, 4, 4, '6A'),
(2, 4, 1, 1, 4, '5B'),
(3, 4, 2, 4, 3, '5A'),
(4, 3, 2, 3, 5, '5C'),
(5, 2, 4, 2, 4, '4F');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos_formativos`
--

CREATE TABLE `modulos_formativos` (
  `id_modulos_formativos` int(11) NOT NULL,
  `nombre_modulo` varchar(200) NOT NULL,
  `cant_ra` smallint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `modulos_formativos`
--

INSERT INTO `modulos_formativos` (`id_modulos_formativos`, `nombre_modulo`, `cant_ra`) VALUES
(1, 'desarrollo de aplicaciones y sistemas de información', 30),
(2, 'administración de base de datos ', 30),
(3, 'análisis y diseño', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `psicologos`
--

CREATE TABLE `psicologos` (
  `id_psicologos` int(11) NOT NULL,
  `primer_nombre` varchar(20) NOT NULL,
  `segundo_nombre` varchar(20) NOT NULL,
  `primer_apellido` varchar(20) NOT NULL,
  `segundo_apellido` varchar(20) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` varchar(4) NOT NULL,
  `genero` varchar(2) NOT NULL,
  `especialidad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `psicologos`
--

INSERT INTO `psicologos` (`id_psicologos`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `direccion`, `telefono`, `email`, `fecha_nacimiento`, `edad`, `genero`, `especialidad`) VALUES
(1, 'jose', 'jesus', 'Rodríguez', 'Rodríguez', 'los salado', '809-545-7777', 'yandelrodriguez1629@gmail.com', '2006-11-08', '17', 'F', 'nada'),
(2, 'raul', 'DEREK', 'Rodríguez', 'Rodríguez', 'los salado', '809-111-8888', 'yandelrodriguez1629@gmail.com', '2006-11-08', '17', 'F', 'nada'),
(3, 'piquillo', 'DEREK', 'Rodríguez', 'Rodríguez', 'los salado', '809-655-8999', 'yandelrodriguez1629@gmail.com', '2023-11-08', '17', 'F', 'nada'),
(4, 'josas', 'JESUS', 'Rodríguez', 'Rodríguez', 'los salado', '809-675-5446', 'yandelrodriguez1629@gmail.com', '2006-11-08', '17', 'F', 'nada'),
(5, 'reglio', 'jesus', 'Rodríguez', 'Rodríguez', 'los salado', '809-786-8666', 'yandelrodriguez1629@gmail.com', '2023-11-05', '17', 'F', 'nada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE `rols` (
  `id_rols` int(11) NOT NULL,
  `nombre_rol` varchar(20) NOT NULL,
  `nivel` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rols`
--

INSERT INTO `rols` (`id_rols`, `nombre_rol`, `nivel`) VALUES
(1, 'administrado', 2),
(2, 'administrado', 3),
(3, 'administrado', 5),
(4, 'administrado', 4),
(5, 'administrado', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccions`
--

CREATE TABLE `seccions` (
  `id_secciones` int(11) NOT NULL,
  `nombre_seccion` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `seccions`
--

INSERT INTO `seccions` (`id_secciones`, `nombre_seccion`) VALUES
(1, 'info'),
(2, 'info'),
(3, 'info'),
(4, 'info'),
(5, 'info');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulosformativos`
--

CREATE TABLE `titulosformativos` (
  `id_titulosformativos` int(11) NOT NULL,
  `nombre_titulo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `titulosformativos`
--

INSERT INTO `titulosformativos` (`id_titulosformativos`, `nombre_titulo`) VALUES
(1, 'base de datos'),
(2, 'desarrollo de aplicación y información de informát'),
(3, 'desarrollo de aplicación y información de informát'),
(4, 'desarrollo de aplicación y información de informát'),
(5, 'desarrollo de aplicación y información de informát');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutors`
--

CREATE TABLE `tutors` (
  `id_tutor` int(11) NOT NULL,
  `primer_nombre` varchar(20) NOT NULL,
  `segundo_nombre` varchar(20) NOT NULL,
  `primer_apellido` varchar(20) NOT NULL,
  `segundo_apellido` varchar(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `parentesco` varchar(20) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `escueladepadres` varchar(2) NOT NULL,
  `comitedecursop` varchar(2) NOT NULL,
  `apmae` varchar(2) NOT NULL,
  `rolescueladepadres` varchar(20) NOT NULL,
  `rolcomitedecurso` varchar(20) NOT NULL,
  `rolapmae` varchar(20) NOT NULL,
  `id_estudiante` int(255) NOT NULL,
  `id_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tutors`
--

INSERT INTO `tutors` (`id_tutor`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `direccion`, `telefono`, `email`, `parentesco`, `genero`, `escueladepadres`, `comitedecursop`, `apmae`, `rolescueladepadres`, `rolcomitedecurso`, `rolapmae`, `id_estudiante`, `id_user`) VALUES
(1, 'Yandel', 'jesus', 'Rodríguez', 'Rodríguez', 'los salado', '809-545-6888', 'yandelrodriguez1629@gmail.com', 'hijo', 'F', 'it', 'si', 'si', 'si', 'si', 'si', 1, 1),
(2, 'LIS', 'MARY', 'Rodríguez', 'Rodríguez', 'los salado', '809-908-8900', 'yandelrodriguez1629@gmail.com', 'hijo', 'M', 'it', 'si', 'si', 'si', 'si', 'si', 4, 2),
(3, 'YEO', 'DEREK', 'Rodríguez', 'Rodríguez', 'los salado', '809-908-8900', 'yandelrodriguez1629@gmail.com', 'si', 'F', 'si', 'si', 'si', 'si', 'si', 'si', 5, 3),
(4, 'MIGUEL', 'DEREK', 'Rodríguez', 'Rodríguez', 'los salado', '809-908-8900', 'yandelrodriguez1629@gmail.com', 'si', 'F', 'si', 'si', 'si', 'si', 'si', 'si', 4, 5),
(5, 'BENJAMIN', 'JESUS', 'Rodríguez', 'Rodríguez', 'los salado', '809-908-8900', 'yandelrodriguez1629@gmail.com', 'si', 'F', 'si', 'si', 'si', 'si', 'si', 'si', 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `usuario`, `email`, `email_verified_at`, `contrasena`) VALUES
(1, 'yandell', 'yandelrodriguez162920@gmail.com', '2024-02-23 17:00:11', '161615'),
(2, 'eliass', 'yandelrodriguez162920@gmail.com', '2024-02-23 17:00:11', '161614'),
(3, 'miguell', 'yandelrodriguez162920@gmail.com', '2024-02-23 17:00:11', '161619'),
(4, 'benjamin', 'yandelrodriguez162920@gmail.com', '2024-02-23 17:00:11', '161616'),
(5, 'danel', 'yandelrodriguez162920@gmail.com   ', '2024-02-23 17:00:11', '161612');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignaturas_academicas`
--
ALTER TABLE `asignaturas_academicas`
  ADD PRIMARY KEY (`id_asignatura_aca`);

--
-- Indices de la tabla `calificaciones_academicas`
--
ALTER TABLE `calificaciones_academicas`
  ADD PRIMARY KEY (`id_calificaciones_aca`),
  ADD KEY `idasignatura` (`id_asignatura`);

--
-- Indices de la tabla `calificaciones_mfs`
--
ALTER TABLE `calificaciones_mfs`
  ADD PRIMARY KEY (`id_calificaciones_mfs`),
  ADD KEY `idestudiante` (`id_estudiante`,`id_modulo_formativo`),
  ADD KEY `id_modulo_formativo` (`id_modulo_formativo`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id_docentes`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_estudiantes`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `id_grupo` (`id_grupo`);

--
-- Indices de la tabla `grados`
--
ALTER TABLE `grados`
  ADD PRIMARY KEY (`id_grado`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`),
  ADD KEY `idgrupo` (`id_seccion`,`id_tituloformativo`,`id_docente`,`id_psicologo`),
  ADD KEY `id_docente` (`id_docente`),
  ADD KEY `id_psicologo` (`id_psicologo`),
  ADD KEY `id_tituloformativo` (`id_tituloformativo`);

--
-- Indices de la tabla `modulos_formativos`
--
ALTER TABLE `modulos_formativos`
  ADD PRIMARY KEY (`id_modulos_formativos`);

--
-- Indices de la tabla `psicologos`
--
ALTER TABLE `psicologos`
  ADD PRIMARY KEY (`id_psicologos`);

--
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id_rols`);

--
-- Indices de la tabla `seccions`
--
ALTER TABLE `seccions`
  ADD PRIMARY KEY (`id_secciones`);

--
-- Indices de la tabla `titulosformativos`
--
ALTER TABLE `titulosformativos`
  ADD PRIMARY KEY (`id_titulosformativos`);

--
-- Indices de la tabla `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`id_tutor`),
  ADD KEY `idestudiante` (`id_estudiante`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignaturas_academicas`
--
ALTER TABLE `asignaturas_academicas`
  MODIFY `id_asignatura_aca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `calificaciones_academicas`
--
ALTER TABLE `calificaciones_academicas`
  MODIFY `id_calificaciones_aca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `calificaciones_mfs`
--
ALTER TABLE `calificaciones_mfs`
  MODIFY `id_calificaciones_mfs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id_docentes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id_estudiantes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1617;

--
-- AUTO_INCREMENT de la tabla `grados`
--
ALTER TABLE `grados`
  MODIFY `id_grado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `modulos_formativos`
--
ALTER TABLE `modulos_formativos`
  MODIFY `id_modulos_formativos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `psicologos`
--
ALTER TABLE `psicologos`
  MODIFY `id_psicologos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rols`
--
ALTER TABLE `rols`
  MODIFY `id_rols` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `seccions`
--
ALTER TABLE `seccions`
  MODIFY `id_secciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `titulosformativos`
--
ALTER TABLE `titulosformativos`
  MODIFY `id_titulosformativos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id_tutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`id_seccion`) REFERENCES `seccions` (`id_secciones`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grupos_ibfk_2` FOREIGN KEY (`id_docente`) REFERENCES `docentes` (`id_docentes`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grupos_ibfk_3` FOREIGN KEY (`id_psicologo`) REFERENCES `psicologos` (`id_psicologos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grupos_ibfk_4` FOREIGN KEY (`id_grupo`) REFERENCES `grados` (`id_grado`),
  ADD CONSTRAINT `grupos_ibfk_5` FOREIGN KEY (`id_tituloformativo`) REFERENCES `titulosformativos` (`id_titulosformativos`);

--
-- Filtros para la tabla `tutors`
--
ALTER TABLE `tutors`
  ADD CONSTRAINT `tutors_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tutors_ibfk_2` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiantes`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
