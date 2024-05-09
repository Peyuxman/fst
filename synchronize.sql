-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2024 a las 05:37:57
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `synchronize`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fst_ambientes`
--

CREATE TABLE `fst_ambientes` (
  `fst_ida` int(11) NOT NULL,
  `fst_nom` varchar(100) DEFAULT NULL,
  `fst_nom_torre` varchar(100) DEFAULT NULL,
  `fst_capacidad` int(11) DEFAULT NULL,
  `fst_estado` varchar(50) DEFAULT NULL,
  `fst_especialidad` int(11) DEFAULT NULL,
  `fst_franja` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fst_ambientes`
--

INSERT INTO `fst_ambientes` (`fst_ida`, `fst_nom`, `fst_nom_torre`, `fst_capacidad`, `fst_estado`, `fst_especialidad`, `fst_franja`) VALUES
(1, '315', 'Oriental', 30, NULL, 1, 1),
(2, '317', 'Oriental', 15, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fst_competencias`
--

CREATE TABLE `fst_competencias` (
  `fst_idc` int(11) NOT NULL,
  `fst_nom` varchar(100) DEFAULT NULL,
  `fst_codigo_compe` int(11) NOT NULL,
  `fst_programa` int(11) DEFAULT NULL,
  `fst_tipo` varchar(50) DEFAULT NULL,
  `fst_fase_proyecto` varchar(50) DEFAULT NULL,
  `fst_horas` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fst_competencias`
--

INSERT INTO `fst_competencias` (`fst_idc`, `fst_nom`, `fst_codigo_compe`, `fst_programa`, `fst_tipo`, `fst_fase_proyecto`, `fst_horas`) VALUES
(13, 'competencia 1', 1, 2, 'Tecnica', 'fase analisis', 12),
(14, 'competencia 2', 2, 2, 'transversal', 'fase diseno', 23),
(15, 'competencia 3', 3, 2, 'Tecnica', 'fase analisis', 34);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fst_detalle_mallas`
--

CREATE TABLE `fst_detalle_mallas` (
  `fst_idmt` int(11) NOT NULL,
  `fst_resultado` int(11) DEFAULT NULL,
  `fst_malla` int(11) DEFAULT NULL,
  `fst_trimestre` int(11) DEFAULT NULL,
  `fst_competencias` int(11) DEFAULT NULL,
  `fst_entregables` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fst_detalle_prog`
--

CREATE TABLE `fst_detalle_prog` (
  `fst_iddp` int(11) NOT NULL,
  `fst_ficha` int(11) DEFAULT NULL,
  `fst_det_malla` int(11) DEFAULT NULL,
  `fst_instruc` int(11) DEFAULT NULL,
  `fst_ambiente` int(11) DEFAULT NULL,
  `fst_hora_inicio` int(11) DEFAULT NULL,
  `fst_hora_final` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fst_espec_instructores`
--

CREATE TABLE `fst_espec_instructores` (
  `fst_ide` int(11) NOT NULL,
  `fst_competencia` int(11) DEFAULT NULL,
  `fst_instructor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fst_fichas`
--

CREATE TABLE `fst_fichas` (
  `fst_codigo` int(11) NOT NULL,
  `fst_franja` int(11) DEFAULT NULL,
  `fst_programa` int(11) DEFAULT NULL,
  `fst_horas_semanales` int(11) DEFAULT NULL,
  `fst_tri_actual` int(11) DEFAULT NULL,
  `fst_inicio_lectiva` date DEFAULT NULL,
  `fst_fin_lectiva` date DEFAULT NULL,
  `fst_aprendices_actu` int(11) DEFAULT NULL,
  `fst_doc_vocero` bigint(20) DEFAULT NULL,
  `fst_nom_vocero` varchar(100) DEFAULT NULL,
  `fst_correo_vocero` varchar(200) DEFAULT NULL,
  `fst_tel_vocero` int(20) DEFAULT NULL,
  `fst_doc_subvocero` bigint(20) DEFAULT NULL,
  `fst_nom_subvocero` varchar(100) DEFAULT NULL,
  `fst_correo_subvocero` varchar(200) DEFAULT NULL,
  `fst_tel_subvocero` int(20) DEFAULT NULL,
  `fst_estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fst_fichas`
--

INSERT INTO `fst_fichas` (`fst_codigo`, `fst_franja`, `fst_programa`, `fst_horas_semanales`, `fst_tri_actual`, `fst_inicio_lectiva`, `fst_fin_lectiva`, `fst_aprendices_actu`, `fst_doc_vocero`, `fst_nom_vocero`, `fst_correo_vocero`, `fst_tel_vocero`, `fst_doc_subvocero`, `fst_nom_subvocero`, `fst_correo_subvocero`, `fst_tel_subvocero`, `fst_estado`) VALUES
(2670710, 1, 1, 30, 6, '2023-01-23', '2024-10-27', 26, 1234567890, 'Donal Medina', 'ronal@gmail.com', 2147483647, 987654321, 'Santiago Gerrillo Pulgarin', 'santiago@gmail.com', 2147483647, 'Activo'),
(1234567890, 1, 1, 30, 7, '2024-05-10', '2024-05-20', 1234567890, 1234567890, 'Judas Inscariote', 'traidor@gmail.com', 2147483647, 123456789, 'Jesus de Nazareth', 'jesus@gmail.com', 2147483647, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fst_fran_ambientes`
--

CREATE TABLE `fst_fran_ambientes` (
  `fst_idfa` int(11) NOT NULL,
  `fst_dia` varchar(20) DEFAULT NULL,
  `fst_rango_horas` int(11) DEFAULT NULL,
  `fst_rango_horas_fin` int(11) DEFAULT NULL,
  `fst_jornada` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fst_fran_ambientes`
--

INSERT INTO `fst_fran_ambientes` (`fst_idfa`, `fst_dia`, `fst_rango_horas`, `fst_rango_horas_fin`, `fst_jornada`) VALUES
(1, 'Lunes', 6, 12, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fst_fran_fichas`
--

CREATE TABLE `fst_fran_fichas` (
  `fst_idff` int(11) NOT NULL,
  `fst_dia` varchar(20) DEFAULT NULL,
  `fst_rango_horas` int(11) DEFAULT NULL,
  `fst_rango_horas_fin` int(11) DEFAULT NULL,
  `fst_jornada` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fst_fran_fichas`
--

INSERT INTO `fst_fran_fichas` (`fst_idff`, `fst_dia`, `fst_rango_horas`, `fst_rango_horas_fin`, `fst_jornada`) VALUES
(1, 'Lunes', 6, 12, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fst_fran_instructores`
--

CREATE TABLE `fst_fran_instructores` (
  `fst_idfi` int(11) NOT NULL,
  `fst_dia` varchar(20) DEFAULT NULL,
  `fst_rango_horas` int(11) DEFAULT NULL,
  `fst_rango_horas_fin` int(11) DEFAULT NULL,
  `fst_jornada` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fst_fran_instructores`
--

INSERT INTO `fst_fran_instructores` (`fst_idfi`, `fst_dia`, `fst_rango_horas`, `fst_rango_horas_fin`, `fst_jornada`) VALUES
(1, 'Lunes', 6, 12, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fst_horas_funcionales`
--

CREATE TABLE `fst_horas_funcionales` (
  `fst_idhf` int(11) NOT NULL,
  `fst_dia` varchar(20) DEFAULT NULL,
  `fst_hora` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fst_instructores`
--

CREATE TABLE `fst_instructores` (
  `fst_idi` int(11) NOT NULL,
  `fst_programa` int(11) DEFAULT NULL,
  `fst_nom` varchar(100) DEFAULT NULL,
  `fst_apell` varchar(100) DEFAULT NULL,
  `fst_tipo_doc` varchar(50) DEFAULT NULL,
  `fst_doc` bigint(20) DEFAULT NULL,
  `fst_tel` varchar(20) DEFAULT NULL,
  `fst_correo` varchar(200) DEFAULT NULL,
  `fst_tipo_formacion` varchar(20) DEFAULT NULL,
  `fst_tipo_contrato` varchar(20) DEFAULT NULL,
  `fst_franja` int(11) DEFAULT NULL,
  `fst_estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fst_instructores`
--

INSERT INTO `fst_instructores` (`fst_idi`, `fst_programa`, `fst_nom`, `fst_apell`, `fst_tipo_doc`, `fst_doc`, `fst_tel`, `fst_correo`, `fst_tipo_formacion`, `fst_tipo_contrato`, `fst_franja`, `fst_estado`) VALUES
(1, 1, 'William', 'Mayorca', 'CC', 1234567890, '1236547899', 'mazorcada@gmail.com', 'tecnica', 'planta', 1, NULL),
(2, 1, 'Luis Felipe', 'Restrepo', 'CC', 1234567890, '3214569877', 'correoinstructor1@gmail.com', 'tecnica', 'tipo_Contra 2', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fst_jornadas`
--

CREATE TABLE `fst_jornadas` (
  `fst_idj` int(11) NOT NULL,
  `fst_nom` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fst_jornadas`
--

INSERT INTO `fst_jornadas` (`fst_idj`, `fst_nom`) VALUES
(1, 'Diurna'),
(2, 'Mixta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fst_mallas`
--

CREATE TABLE `fst_mallas` (
  `fst_idm` int(11) NOT NULL,
  `fst_programa` int(11) DEFAULT NULL,
  `fst_trim_anio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fst_programas`
--

CREATE TABLE `fst_programas` (
  `fst_idp` int(11) NOT NULL,
  `fst_nom` varchar(100) DEFAULT NULL,
  `fst_red_tecn` varchar(100) DEFAULT NULL,
  `fst_tipo_formacion` varchar(100) DEFAULT NULL,
  `fst_duracionHoras` int(6) NOT NULL,
  `fst_duracionTrimestres` int(6) DEFAULT NULL,
  `fst_abreviacion` varchar(50) NOT NULL,
  `fst_numero_compet` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fst_programas`
--

INSERT INTO `fst_programas` (`fst_idp`, `fst_nom`, `fst_red_tecn`, `fst_tipo_formacion`, `fst_duracionHoras`, `fst_duracionTrimestres`, `fst_abreviacion`, `fst_numero_compet`) VALUES
(1, 'Analisis y Desarrollo de Software', 'TECNOLOGÍAS DE LA INFORMACIÓN, DISEÑO Y DESARROLLO DE SOFTWARE', 'Tecnólogo', 3984, 24, 'ADSO', 50),
(2, 'Diseño Industrial', 'Diseño e implementación para la industria', 'Tecnólogo', 1900, 8, 'DI', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fst_prog_ambientes`
--

CREATE TABLE `fst_prog_ambientes` (
  `fst_idpa` int(11) NOT NULL,
  `fst_detalle_prog` int(11) DEFAULT NULL,
  `fst_novedades` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fst_prog_fichas`
--

CREATE TABLE `fst_prog_fichas` (
  `fst_idpf` int(11) NOT NULL,
  `fst_fecha` date DEFAULT NULL,
  `fst_usuario` int(11) DEFAULT NULL,
  `fst_detalle_prog` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fst_prog_instructores`
--

CREATE TABLE `fst_prog_instructores` (
  `fst_idpi` int(11) NOT NULL,
  `fst_detalle_prog` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fst_resultados`
--

CREATE TABLE `fst_resultados` (
  `fst_idre` int(11) NOT NULL,
  `fst_entregables` varchar(200) DEFAULT NULL,
  `fst_nom` varchar(200) DEFAULT NULL,
  `fst_competencia` int(11) DEFAULT NULL,
  `fst_horas_pres` int(11) DEFAULT NULL,
  `fst_horas_auto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fst_resultados`
--

INSERT INTO `fst_resultados` (`fst_idre`, `fst_entregables`, `fst_nom`, `fst_competencia`, `fst_horas_pres`, `fst_horas_auto`) VALUES
(1, 'Entregable 1', 'resultado 1', 13, 12, 12),
(2, 'Entregable 2', 'resultado 2', 13, 5, 12),
(3, 'Entregable 3', 'resultado 3', 13, 4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fst_roles`
--

CREATE TABLE `fst_roles` (
  `fst_idr` int(11) NOT NULL,
  `fst_nom` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fst_roles`
--

INSERT INTO `fst_roles` (`fst_idr`, `fst_nom`) VALUES
(1, 'Admin'),
(2, 'Consultor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fst_trimestres_anio`
--

CREATE TABLE `fst_trimestres_anio` (
  `fst_idta` int(11) NOT NULL,
  `fst_numero_tri` int(11) DEFAULT NULL,
  `fst_fecha_in` date DEFAULT NULL,
  `fst_fecha_fn` date DEFAULT NULL,
  `fst_anio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fst_usuarios`
--

CREATE TABLE `fst_usuarios` (
  `fst_idu` int(11) NOT NULL,
  `fst_rol` int(11) DEFAULT NULL,
  `fst_nom` varchar(100) DEFAULT NULL,
  `fst_apell` varchar(100) DEFAULT NULL,
  `fst_tipo_doc` varchar(50) DEFAULT NULL,
  `fst_doc` bigint(20) DEFAULT NULL,
  `fst_tel` varchar(20) DEFAULT NULL,
  `fst_correo` varchar(200) DEFAULT NULL,
  `fst_contra` varchar(255) DEFAULT NULL,
  `fst_estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fst_usuarios`
--

INSERT INTO `fst_usuarios` (`fst_idu`, `fst_rol`, `fst_nom`, `fst_apell`, `fst_tipo_doc`, `fst_doc`, `fst_tel`, `fst_correo`, `fst_contra`, `fst_estado`) VALUES
(1, 1, 'Ian', 'Contreras', 'cc', 1234567890, '319 2414075', 'iancontreras1610@gmail.com', '202cb962ac59075b964b07152d234b70', 'Activo'),
(2, 1, 'Andriely', 'Casallas', 'TI', 1234567890, '3112284689', 'casallas17032007@gmail.com', '202cb962ac59075b964b07152d234b70', 'Activo'),
(3, 1, 'Darwin', 'Gomez', 'CC', 1234567890, '318 8374231', 'darwingomeztique@gmail.com', '202cb962ac59075b964b07152d234b70', 'Activo'),
(4, 1, 'Luis Felipe', 'Restrepo', 'CC', 1234567890, '321 2439492', 'lfrestrepo004@gmail.com', '202cb962ac59075b964b07152d234b70', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fst_ambientes`
--
ALTER TABLE `fst_ambientes`
  ADD PRIMARY KEY (`fst_ida`),
  ADD KEY `fst_franja` (`fst_franja`),
  ADD KEY `fst_especialidad` (`fst_especialidad`);

--
-- Indices de la tabla `fst_competencias`
--
ALTER TABLE `fst_competencias`
  ADD PRIMARY KEY (`fst_idc`),
  ADD KEY `fst_programa` (`fst_programa`);

--
-- Indices de la tabla `fst_detalle_mallas`
--
ALTER TABLE `fst_detalle_mallas`
  ADD PRIMARY KEY (`fst_idmt`),
  ADD KEY `fst_malla` (`fst_malla`),
  ADD KEY `fst_resultado` (`fst_resultado`),
  ADD KEY `fst_competencias` (`fst_competencias`);

--
-- Indices de la tabla `fst_detalle_prog`
--
ALTER TABLE `fst_detalle_prog`
  ADD PRIMARY KEY (`fst_iddp`),
  ADD KEY `fst_ficha` (`fst_ficha`),
  ADD KEY `fst_det_malla` (`fst_det_malla`),
  ADD KEY `fst_instruc` (`fst_instruc`),
  ADD KEY `fst_ambiente` (`fst_ambiente`),
  ADD KEY `fst_hora_inicio` (`fst_hora_inicio`),
  ADD KEY `fst_hora_final` (`fst_hora_final`);

--
-- Indices de la tabla `fst_espec_instructores`
--
ALTER TABLE `fst_espec_instructores`
  ADD PRIMARY KEY (`fst_ide`),
  ADD KEY `fst_competencia` (`fst_competencia`),
  ADD KEY `fst_instructor` (`fst_instructor`);

--
-- Indices de la tabla `fst_fichas`
--
ALTER TABLE `fst_fichas`
  ADD PRIMARY KEY (`fst_codigo`),
  ADD KEY `fst_franja` (`fst_franja`),
  ADD KEY `fst_programa` (`fst_programa`);

--
-- Indices de la tabla `fst_fran_ambientes`
--
ALTER TABLE `fst_fran_ambientes`
  ADD PRIMARY KEY (`fst_idfa`),
  ADD KEY `fst_jornada` (`fst_jornada`);

--
-- Indices de la tabla `fst_fran_fichas`
--
ALTER TABLE `fst_fran_fichas`
  ADD PRIMARY KEY (`fst_idff`),
  ADD KEY `fst_jornada` (`fst_jornada`);

--
-- Indices de la tabla `fst_fran_instructores`
--
ALTER TABLE `fst_fran_instructores`
  ADD PRIMARY KEY (`fst_idfi`),
  ADD KEY `fst_jornada` (`fst_jornada`);

--
-- Indices de la tabla `fst_horas_funcionales`
--
ALTER TABLE `fst_horas_funcionales`
  ADD PRIMARY KEY (`fst_idhf`);

--
-- Indices de la tabla `fst_instructores`
--
ALTER TABLE `fst_instructores`
  ADD PRIMARY KEY (`fst_idi`),
  ADD KEY `fst_programa` (`fst_programa`),
  ADD KEY `fst_franja` (`fst_franja`);

--
-- Indices de la tabla `fst_jornadas`
--
ALTER TABLE `fst_jornadas`
  ADD PRIMARY KEY (`fst_idj`);

--
-- Indices de la tabla `fst_mallas`
--
ALTER TABLE `fst_mallas`
  ADD PRIMARY KEY (`fst_idm`),
  ADD KEY `fst_programa` (`fst_programa`),
  ADD KEY `fst_trim_anio` (`fst_trim_anio`);

--
-- Indices de la tabla `fst_programas`
--
ALTER TABLE `fst_programas`
  ADD PRIMARY KEY (`fst_idp`);

--
-- Indices de la tabla `fst_prog_ambientes`
--
ALTER TABLE `fst_prog_ambientes`
  ADD PRIMARY KEY (`fst_idpa`),
  ADD KEY `fst_detalle_prog` (`fst_detalle_prog`);

--
-- Indices de la tabla `fst_prog_fichas`
--
ALTER TABLE `fst_prog_fichas`
  ADD PRIMARY KEY (`fst_idpf`),
  ADD KEY `fst_detalle_prog` (`fst_detalle_prog`),
  ADD KEY `fst_usuario` (`fst_usuario`);

--
-- Indices de la tabla `fst_prog_instructores`
--
ALTER TABLE `fst_prog_instructores`
  ADD PRIMARY KEY (`fst_idpi`),
  ADD KEY `fst_detalle_prog` (`fst_detalle_prog`);

--
-- Indices de la tabla `fst_resultados`
--
ALTER TABLE `fst_resultados`
  ADD PRIMARY KEY (`fst_idre`),
  ADD KEY `fst_competencia` (`fst_competencia`);

--
-- Indices de la tabla `fst_roles`
--
ALTER TABLE `fst_roles`
  ADD PRIMARY KEY (`fst_idr`);

--
-- Indices de la tabla `fst_trimestres_anio`
--
ALTER TABLE `fst_trimestres_anio`
  ADD PRIMARY KEY (`fst_idta`);

--
-- Indices de la tabla `fst_usuarios`
--
ALTER TABLE `fst_usuarios`
  ADD PRIMARY KEY (`fst_idu`),
  ADD KEY `fst_rol` (`fst_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fst_ambientes`
--
ALTER TABLE `fst_ambientes`
  MODIFY `fst_ida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `fst_competencias`
--
ALTER TABLE `fst_competencias`
  MODIFY `fst_idc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `fst_detalle_mallas`
--
ALTER TABLE `fst_detalle_mallas`
  MODIFY `fst_idmt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fst_detalle_prog`
--
ALTER TABLE `fst_detalle_prog`
  MODIFY `fst_iddp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fst_espec_instructores`
--
ALTER TABLE `fst_espec_instructores`
  MODIFY `fst_ide` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fst_fran_ambientes`
--
ALTER TABLE `fst_fran_ambientes`
  MODIFY `fst_idfa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `fst_fran_fichas`
--
ALTER TABLE `fst_fran_fichas`
  MODIFY `fst_idff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `fst_fran_instructores`
--
ALTER TABLE `fst_fran_instructores`
  MODIFY `fst_idfi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `fst_horas_funcionales`
--
ALTER TABLE `fst_horas_funcionales`
  MODIFY `fst_idhf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fst_instructores`
--
ALTER TABLE `fst_instructores`
  MODIFY `fst_idi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `fst_jornadas`
--
ALTER TABLE `fst_jornadas`
  MODIFY `fst_idj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `fst_mallas`
--
ALTER TABLE `fst_mallas`
  MODIFY `fst_idm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fst_programas`
--
ALTER TABLE `fst_programas`
  MODIFY `fst_idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `fst_prog_ambientes`
--
ALTER TABLE `fst_prog_ambientes`
  MODIFY `fst_idpa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fst_prog_fichas`
--
ALTER TABLE `fst_prog_fichas`
  MODIFY `fst_idpf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fst_prog_instructores`
--
ALTER TABLE `fst_prog_instructores`
  MODIFY `fst_idpi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fst_resultados`
--
ALTER TABLE `fst_resultados`
  MODIFY `fst_idre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `fst_roles`
--
ALTER TABLE `fst_roles`
  MODIFY `fst_idr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `fst_trimestres_anio`
--
ALTER TABLE `fst_trimestres_anio`
  MODIFY `fst_idta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fst_usuarios`
--
ALTER TABLE `fst_usuarios`
  MODIFY `fst_idu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fst_ambientes`
--
ALTER TABLE `fst_ambientes`
  ADD CONSTRAINT `fst_ambientes_ibfk_1` FOREIGN KEY (`fst_franja`) REFERENCES `fst_fran_ambientes` (`fst_idfa`),
  ADD CONSTRAINT `fst_ambientes_ibfk_2` FOREIGN KEY (`fst_especialidad`) REFERENCES `fst_programas` (`fst_idp`);

--
-- Filtros para la tabla `fst_competencias`
--
ALTER TABLE `fst_competencias`
  ADD CONSTRAINT `fst_competencias_ibfk_1` FOREIGN KEY (`fst_programa`) REFERENCES `fst_programas` (`fst_idp`);

--
-- Filtros para la tabla `fst_detalle_mallas`
--
ALTER TABLE `fst_detalle_mallas`
  ADD CONSTRAINT `fst_detalle_mallas_ibfk_1` FOREIGN KEY (`fst_malla`) REFERENCES `fst_mallas` (`fst_idm`),
  ADD CONSTRAINT `fst_detalle_mallas_ibfk_2` FOREIGN KEY (`fst_resultado`) REFERENCES `fst_resultados` (`fst_idre`),
  ADD CONSTRAINT `fst_detalle_mallas_ibfk_3` FOREIGN KEY (`fst_competencias`) REFERENCES `fst_competencias` (`fst_idc`);

--
-- Filtros para la tabla `fst_detalle_prog`
--
ALTER TABLE `fst_detalle_prog`
  ADD CONSTRAINT `fst_detalle_prog_ibfk_1` FOREIGN KEY (`fst_ficha`) REFERENCES `fst_fichas` (`fst_codigo`),
  ADD CONSTRAINT `fst_detalle_prog_ibfk_2` FOREIGN KEY (`fst_det_malla`) REFERENCES `fst_detalle_mallas` (`fst_idmt`),
  ADD CONSTRAINT `fst_detalle_prog_ibfk_3` FOREIGN KEY (`fst_instruc`) REFERENCES `fst_instructores` (`fst_idi`),
  ADD CONSTRAINT `fst_detalle_prog_ibfk_4` FOREIGN KEY (`fst_ambiente`) REFERENCES `fst_ambientes` (`fst_ida`),
  ADD CONSTRAINT `fst_detalle_prog_ibfk_5` FOREIGN KEY (`fst_hora_inicio`) REFERENCES `fst_horas_funcionales` (`fst_idhf`),
  ADD CONSTRAINT `fst_detalle_prog_ibfk_6` FOREIGN KEY (`fst_hora_final`) REFERENCES `fst_horas_funcionales` (`fst_idhf`);

--
-- Filtros para la tabla `fst_espec_instructores`
--
ALTER TABLE `fst_espec_instructores`
  ADD CONSTRAINT `fst_espec_instructores_ibfk_1` FOREIGN KEY (`fst_competencia`) REFERENCES `fst_competencias` (`fst_idc`),
  ADD CONSTRAINT `fst_espec_instructores_ibfk_2` FOREIGN KEY (`fst_instructor`) REFERENCES `fst_instructores` (`fst_idi`);

--
-- Filtros para la tabla `fst_fichas`
--
ALTER TABLE `fst_fichas`
  ADD CONSTRAINT `fst_fichas_ibfk_1` FOREIGN KEY (`fst_franja`) REFERENCES `fst_fran_fichas` (`fst_idff`),
  ADD CONSTRAINT `fst_fichas_ibfk_2` FOREIGN KEY (`fst_programa`) REFERENCES `fst_programas` (`fst_idp`);

--
-- Filtros para la tabla `fst_fran_ambientes`
--
ALTER TABLE `fst_fran_ambientes`
  ADD CONSTRAINT `fst_fran_ambientes_ibfk_1` FOREIGN KEY (`fst_jornada`) REFERENCES `fst_jornadas` (`fst_idj`);

--
-- Filtros para la tabla `fst_fran_fichas`
--
ALTER TABLE `fst_fran_fichas`
  ADD CONSTRAINT `fst_fran_fichas_ibfk_1` FOREIGN KEY (`fst_jornada`) REFERENCES `fst_jornadas` (`fst_idj`);

--
-- Filtros para la tabla `fst_fran_instructores`
--
ALTER TABLE `fst_fran_instructores`
  ADD CONSTRAINT `fst_fran_instructores_ibfk_1` FOREIGN KEY (`fst_jornada`) REFERENCES `fst_jornadas` (`fst_idj`);

--
-- Filtros para la tabla `fst_instructores`
--
ALTER TABLE `fst_instructores`
  ADD CONSTRAINT `fst_instructores_ibfk_1` FOREIGN KEY (`fst_programa`) REFERENCES `fst_programas` (`fst_idp`),
  ADD CONSTRAINT `fst_instructores_ibfk_2` FOREIGN KEY (`fst_franja`) REFERENCES `fst_fran_instructores` (`fst_idfi`);

--
-- Filtros para la tabla `fst_mallas`
--
ALTER TABLE `fst_mallas`
  ADD CONSTRAINT `fst_mallas_ibfk_1` FOREIGN KEY (`fst_programa`) REFERENCES `fst_programas` (`fst_idp`),
  ADD CONSTRAINT `fst_mallas_ibfk_2` FOREIGN KEY (`fst_trim_anio`) REFERENCES `fst_trimestres_anio` (`fst_idta`);

--
-- Filtros para la tabla `fst_prog_ambientes`
--
ALTER TABLE `fst_prog_ambientes`
  ADD CONSTRAINT `fst_prog_ambientes_ibfk_1` FOREIGN KEY (`fst_detalle_prog`) REFERENCES `fst_detalle_prog` (`fst_iddp`);

--
-- Filtros para la tabla `fst_prog_fichas`
--
ALTER TABLE `fst_prog_fichas`
  ADD CONSTRAINT `fst_prog_fichas_ibfk_1` FOREIGN KEY (`fst_detalle_prog`) REFERENCES `fst_detalle_prog` (`fst_iddp`),
  ADD CONSTRAINT `fst_prog_fichas_ibfk_2` FOREIGN KEY (`fst_usuario`) REFERENCES `fst_usuarios` (`fst_idu`);

--
-- Filtros para la tabla `fst_prog_instructores`
--
ALTER TABLE `fst_prog_instructores`
  ADD CONSTRAINT `fst_prog_instructores_ibfk_1` FOREIGN KEY (`fst_detalle_prog`) REFERENCES `fst_detalle_prog` (`fst_iddp`);

--
-- Filtros para la tabla `fst_resultados`
--
ALTER TABLE `fst_resultados`
  ADD CONSTRAINT `fst_resultados_ibfk_1` FOREIGN KEY (`fst_competencia`) REFERENCES `fst_competencias` (`fst_idc`);

--
-- Filtros para la tabla `fst_usuarios`
--
ALTER TABLE `fst_usuarios`
  ADD CONSTRAINT `fst_usuarios_ibfk_1` FOREIGN KEY (`fst_rol`) REFERENCES `fst_roles` (`fst_idr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
