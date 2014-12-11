-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-12-2014 a las 23:30:42
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `medico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrosmed`
--

CREATE TABLE IF NOT EXISTS `registrosmed` (
`id_med` int(11) NOT NULL,
  `num_carnnet` varchar(9) NOT NULL,
  `afil_cual` varchar(20) DEFAULT NULL,
  `tel_con` int(10) DEFAULT NULL,
  `temperatura` float DEFAULT NULL,
  `presion_art` int(3) DEFAULT NULL,
  `cual_suero` varchar(50) DEFAULT NULL,
  `cual_alimento` varchar(50) DEFAULT NULL,
  `otros` varchar(50) DEFAULT NULL,
  `rec_alerg` varchar(50) DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `registrosmed`
--

INSERT INTO `registrosmed` (`id_med`, `num_carnnet`, `afil_cual`, `tel_con`, `temperatura`, `presion_art`, `cual_suero`, `cual_alimento`, `otros`, `rec_alerg`, `fecha`) VALUES
(1, '0', 'asdafsfa', 0, 0, 0, 'asdafsfa', 'asdafsfa', 'asdasd', '', '2014-11-28'),
(2, '0', 'fsd', 324234, 0, 111, 'asdsad', 'asdas', 'dasdasd', '', '2014-11-28'),
(3, '0', 'asdasd', 0, 234, 234, 'sd', 'asd', 'asd', 'asd', '2014-11-28'),
(4, '0', 'sfs', 0, 23, 32, 'sdfs', 'sdf', 'sdf', 'sdf', '2014-11-28'),
(5, '', 'sdfsdf', 323434, 123, 23, 'sd', 'asdasd', 'asdsd', 'asdasd', '2014-11-28'),
(6, '', 'sdfsdf', 323434, 123, 23, 'sd', 'asdasd', 'asdsd', 'asdasd', '2014-11-28'),
(13, '144514769', 'asdasdasd', 0, 100, 150, 'asdasda', 'sdasdasd', 'asdasdas', 'dasd', '2014-12-04'),
(8, '', 'sdfsdf', 324234, 123, 32, 'sd', 'asd', 'asdsd', 'sdf', '2014-11-28'),
(9, '', 'sdfsdf', 324234, 123, 32, 'sd', 'asd', 'asdsd', 'sdf', '2014-11-28'),
(10, '', 'fsd', 323434, 123, 111, 'sd', 'asdasd', 'asdsd', 'asdasd', '2014-11-28'),
(12, '144514769', 'dasd', 0, 125, 120, 'asdasd', 'asdasd', 'asdasd', 'asdasd', '2014-12-04'),
(14, '144514769', 'asdas', 0, 85, 38, 'asdasdasd', 'asda', 'asdasd', 'aasdas', '2014-12-04'),
(15, '144514769', 'asdasd', 0, 65, 89, 'asdasd', 'asdasd', 'asdasd', 'asdasd', '2014-12-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id` int(6) NOT NULL,
  `Nombre` char(30) NOT NULL,
  `Apellidos` char(30) NOT NULL,
  `Ciudad` char(20) NOT NULL,
  `Telefonodecontacto` decimal(8,0) NOT NULL,
  `Rut` varchar(9) NOT NULL,
  `bloodtipe` varchar(3) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `Nombre`, `Apellidos`, `Ciudad`, `Telefonodecontacto`, `Rut`, `bloodtipe`) VALUES
(8, 'karin', 'hartmann', 'putaendo', '88535584', '180742417', 'a++'),
(9, 'manu lee', 'fin', 'wachino', '99999999', '18074241', 'a+');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registrosmed`
--
ALTER TABLE `registrosmed`
 ADD PRIMARY KEY (`id_med`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `Rut` (`Rut`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registrosmed`
--
ALTER TABLE `registrosmed`
MODIFY `id_med` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
