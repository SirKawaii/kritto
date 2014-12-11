-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-12-2014 a las 23:30:55
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `carnet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE IF NOT EXISTS `datos` (
  `rut` varchar(12) DEFAULT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `ap_paterno` varchar(30) DEFAULT NULL,
  `ap_materno` varchar(30) DEFAULT NULL,
  `fc_nac` varchar(10) DEFAULT NULL,
  `pais_nac` varchar(10) DEFAULT NULL,
  `ciudad` varchar(10) DEFAULT NULL,
  `fech_ems` varchar(10) DEFAULT NULL,
  `fech_venc` varchar(10) DEFAULT NULL,
  `sexo` varchar(2) DEFAULT NULL,
  `imagen` varchar(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`rut`, `nombres`, `ap_paterno`, `ap_materno`, `fc_nac`, `pais_nac`, `ciudad`, `fech_ems`, `fech_venc`, `sexo`, `imagen`) VALUES
('87654', 'caro', 'pato', 'alvares', 'nunca', 'taiwanesa', 'nunca jama', 'invencible', 'eterna', 'M', 'temp/c.jpg'),
('87654', 'caro', 'pato', 'alvares', 'nunca', 'taiwanesa', 'nunca jama', 'invencible', 'eterna', 'M', 'temp/c.jpg'),
('87654', 'caro', 'pato', 'alvares', 'nunca', 'taiwanesa', 'nunca jama', 'invencible', 'eterna', 'M', 'temp/c.jpg'),
('87654', 'caro', 'pato', 'alvares', 'nunca', 'taiwanesa', 'nunca jama', 'invencible', 'eterna', 'M', 'temp/c.jpg'),
('87654', 'caro', 'pato', 'alvares', 'nunca', 'taiwanesa', 'nunca jama', 'invencible', 'eterna', 'M', 'temp/c.jpg'),
('17690048-2', 'caroline tamara ', 'gallinato', 'rodriguez', 'nunca naci', 'alguna', 'quien sabe', 'ayer', 'mañana', 'M', 'temp/amazing'),
('7368268272', 'jsdkhksajdh', 'ajshdjasj', 'jasdhj,sad', '7324683724', 'mdnfj,dfh', 'e', '', '', 'M', 'temp/003.JPG'),
('144514768', 'karin', 'hartmann', 'winkelmann', '10/10/40', 'alemana', 'putaendo', '10/10/10', '11/11/11', 'F', 'temp/AGROFRU'),
('123456789', 'karin', 'hartmann', 'winkelmann', '10/10/40', 'alemana', 'putaendo', '10/10/10', '11/11/11', 'F', 'temp/scc.png'),
('123456789', 'karin', 'hartmann', 'winkelmann', '10/10/40', 'alemana', 'putaendo', '10/10/10', '11/11/11', 'F', 'temp/scc.png'),
('123456789', 'karin', 'hartmann', 'winkelmann', '10/10/40', 'alemana', 'putaendo', '10/10/10', '11/11/11', 'F', 'temp/scc.png'),
('123456789', 'karin', 'hartmann', 'winkelmann', '10/10/40', 'alemana', 'putaendo', '10/10/10', '11/11/11', 'F', 'temp/scc.png'),
('123456789', 'karin', 'hartmann', 'winkelmann', '10/10/40', 'alemana', 'putaendo', '10/10/10', '11/11/11', 'F', 'temp/scc.png'),
('144514769', 'karin', 'hartmann', 'winkelmann', '10/10/40', 'alemana', 'putaendo', '10/10/10', '11/11/11', 'F', 'temp/scc.png'),
('martin', 'tenia', 'un', 'violin', '12-24-3456', 'cuba', 'nad', '21-14-534', 'a la miemr', 'M', 'temp/DCS-930'),
('180742417', 'karin', 'hartmann', 'winkelmann', '10/10/40', 'alemana', 'putaendo', '10/10/10', '11/11/11', 'F', 'temp/Warfram'),
('18074241', 'manu lee', 'fin', 'fon', '18/01/97', 'peruano', 'wachino', '10/10/10', '11/11/11', 'M', 'temp/AGROFRU'),
('18074241', 'manu lee', 'fin', 'fon', '18/01/97', 'peruano', 'wachino', '10/10/10', '11/11/11', 'M', 'temp/AGROFRU'),
('18074241', 'manu lee', 'fin', 'fon', '18/01/97', 'peruano', 'wachino', '10/10/10', '11/11/11', 'M', 'temp/AGROFRU'),
('18074241', 'manu lee', 'fin', 'fon', '18/01/97', 'peruano', 'wachino', '10/10/10', '11/11/11', 'M', 'temp/AGROFRU'),
('18074241', 'manu lee', 'fin', 'fon', '18/01/97', 'peruano', 'wachino', '10/10/10', '11/11/11', 'M', 'temp/AGROFRU');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(45) NOT NULL,
  `contraUsuario` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombreUsuario`, `contraUsuario`) VALUES
(1, 'caroline', 'kritto');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
