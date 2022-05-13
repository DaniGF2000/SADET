-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220512.d0c37da63d
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2022 a las 19:36:12
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdsadet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avanzado`
--

CREATE TABLE `avanzado` (
  `avanzadoID` int(11) NOT NULL,
  `acta` varchar(200) CHARACTER SET latin1 NOT NULL,
  `curp` varchar(200) CHARACTER SET latin1 NOT NULL,
  `foto` varchar(200) CHARACTER SET latin1 NOT NULL,
  `certificado` varchar(200) CHARACTER SET latin1 NOT NULL,
  `reganv` varchar(200) CHARACTER SET latin1 NOT NULL,
  `regrev` varchar(200) CHARACTER SET latin1 NOT NULL,
  `idusuario` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicial`
--

CREATE TABLE `inicial` (
  `inicialid` int(11) NOT NULL,
  `acta` varchar(200) NOT NULL,
  `curp` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `boleta` varchar(200) NOT NULL,
  `reganv` varchar(200) NOT NULL,
  `regrev` varchar(200) NOT NULL,
  `idusuario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intermedio`
--

CREATE TABLE `intermedio` (
  `intermedioID` int(11) NOT NULL,
  `acta` varchar(200) CHARACTER SET latin1 NOT NULL,
  `curp` varchar(200) CHARACTER SET latin1 NOT NULL,
  `foto` varchar(200) CHARACTER SET latin1 NOT NULL,
  `boleta` varchar(200) CHARACTER SET latin1 NOT NULL,
  `reganv` varchar(200) CHARACTER SET latin1 NOT NULL,
  `regrev` varchar(200) CHARACTER SET latin1 NOT NULL,
  `idusuario` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intermedio10_14`
--

CREATE TABLE `intermedio10_14` (
  `intermedio10-14ID` int(11) NOT NULL,
  `acta` varchar(200) CHARACTER SET latin1 NOT NULL,
  `curp` varchar(200) CHARACTER SET latin1 NOT NULL,
  `foto` varchar(200) CHARACTER SET latin1 NOT NULL,
  `boleta` varchar(200) CHARACTER SET latin1 NOT NULL,
  `reganv` varchar(200) CHARACTER SET latin1 NOT NULL,
  `regrev` varchar(200) CHARACTER SET latin1 NOT NULL,
  `idusuario` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Contra` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `Usuario`, `Contra`) VALUES
(1, 'Admin', 'Admin123'),
(2, 'HERNANDEZ MORA MAURICIO', 'HEMM13.51');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avanzado`
--
ALTER TABLE `avanzado`
  ADD PRIMARY KEY (`avanzadoID`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `inicial`
--
ALTER TABLE `inicial`
  ADD PRIMARY KEY (`inicialid`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `intermedio`
--
ALTER TABLE `intermedio`
  ADD PRIMARY KEY (`intermedioID`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `intermedio10_14`
--
ALTER TABLE `intermedio10_14`
  ADD PRIMARY KEY (`intermedio10-14ID`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avanzado`
--
ALTER TABLE `avanzado`
  MODIFY `avanzadoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inicial`
--
ALTER TABLE `inicial`
  MODIFY `inicialid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `intermedio`
--
ALTER TABLE `intermedio`
  MODIFY `intermedioID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `intermedio10_14`
--
ALTER TABLE `intermedio10_14`
  MODIFY `intermedio10-14ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



