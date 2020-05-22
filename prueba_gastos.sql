-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2020 a las 01:56:11
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_gastos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `idCuentas` int(11) NOT NULL DEFAULT '1',
  `num_cuenta` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` text,
  `isActive` smallint(6) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `id_empleado_update` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `depar`
--

CREATE TABLE `depar` (
  `idDepartamento` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `id_jefe_area` int(11) DEFAULT NULL,
  `isActive` smallint(6) NOT NULL DEFAULT '1',
  `create_date` date NOT NULL,
  `update_date` date NOT NULL,
  `id_empleado_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `depar`
--

INSERT INTO `depar` (`idDepartamento`, `nombre`, `id_jefe_area`, `isActive`, `create_date`, `update_date`, `id_empleado_update`) VALUES
(1, 'Ventas', 2, 1, '0000-00-00', '0000-00-00', 0),
(2, 'Sistemas', NULL, 1, '0000-00-00', '0000-00-00', 0),
(3, 'Mantenimiento', NULL, 1, '0000-00-00', '0000-00-00', 0),
(4, 'Contabilidad', NULL, 1, '0000-00-00', '0000-00-00', 0),
(5, 'Finanzas', NULL, 1, '0000-00-00', '0000-00-00', 0),
(6, 'Logí­stica', NULL, 1, '0000-00-00', '0000-00-00', 0),
(7, 'Administración', NULL, 1, '0000-00-00', '0000-00-00', 0),
(8, 'Diseño', 3, 1, '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido_Pat` varchar(45) NOT NULL,
  `Apellido_Mat` varchar(45) DEFAULT NULL,
  `Email` varchar(45) NOT NULL,
  `RFC` varchar(13) NOT NULL,
  `id_jefe` int(11) DEFAULT NULL,
  `isJefe` smallint(6) DEFAULT '0',
  `id_departamento` int(11) DEFAULT NULL,
  `fecha_alta` date DEFAULT NULL,
  `fecha_baja` date DEFAULT NULL,
  `user` varchar(45) NOT NULL,
  `password` varchar(256) NOT NULL,
  `is_active` smallint(6) DEFAULT '1',
  `createDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `Nombre`, `Apellido_Pat`, `Apellido_Mat`, `Email`, `RFC`, `id_jefe`, `isJefe`, `id_departamento`, `fecha_alta`, `fecha_baja`, `user`, `password`, `is_active`, `createDate`) VALUES
(1, 'Rodolfo', 'Diaz', 'Amezcua', 'rodo@gmail.com', '1234567890123', NULL, 0, 2, NULL, NULL, '', '', 1, NULL),
(2, 'Adiel', 'Sanginez', 'Jimenez', 'alizzwao@hotmail.com', '1234567890123', NULL, 1, 5, NULL, NULL, 'Adiel', '12345', 1, NULL),
(3, 'Haydeé', 'Lara', 'Pineda', 'hay@gmail.com', '123456789453', NULL, 0, 6, NULL, NULL, 'Hay97', '78635', 1, NULL),
(6, 'Nadia', 'Velasquez', 'Rivera', 'naid@gmai.com', '123456789453', NULL, 0, 4, NULL, NULL, 'nadia', '78635', 1, NULL),
(7, 'Drácula', 'Sanginez', 'Amezcua', 'rodolfo.amezdi@gmail.com', '1234567890123', NULL, 0, 2, NULL, NULL, 'Rodo', '12345', 1, NULL),
(8, 'Kevin', 'Sanginez', 'Narvarez', 'naid@gmai.com', '1234567890123', NULL, 0, 1, NULL, NULL, 'Kevin', 'admin', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefes`
--

CREATE TABLE `jefes` (
  `idJefe` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido_Pat` varchar(45) NOT NULL,
  `Apellido_Mat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(3) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_bin NOT NULL,
  `usuario` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  `tipo_acceso` varchar(14) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `usuario`, `password`, `tipo_acceso`) VALUES
(1, 'Adiel Jimenez', 'adiel-4', '12345', 'normal'),
(2, 'Nadia Rivera', 'nadia-05', '12345', 'autorizado'),
(3, 'Rodolfo Amezcua', 'Rodo-06', '12345', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`idCuentas`);

--
-- Indices de la tabla `depar`
--
ALTER TABLE `depar`
  ADD PRIMARY KEY (`idDepartamento`),
  ADD KEY `id_jefe_area` (`id_jefe_area`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `id_departamento` (`id_departamento`);

--
-- Indices de la tabla `jefes`
--
ALTER TABLE `jefes`
  ADD PRIMARY KEY (`idJefe`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `depar`
--
ALTER TABLE `depar`
  MODIFY `idDepartamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `jefes`
--
ALTER TABLE `jefes`
  MODIFY `idJefe` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `depar`
--
ALTER TABLE `depar`
  ADD CONSTRAINT `depar_ibfk_1` FOREIGN KEY (`id_jefe_area`) REFERENCES `empleados` (`id_empleado`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`id_departamento`) REFERENCES `depar` (`idDepartamento`);

--
-- Filtros para la tabla `jefes`
--
ALTER TABLE `jefes`
  ADD CONSTRAINT `jefes_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
