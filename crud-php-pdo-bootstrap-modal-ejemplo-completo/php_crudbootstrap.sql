-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2018 a las 22:46:04
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `php_crudbootstrap`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuegos`
--

CREATE TABLE IF NOT EXISTS `videojuegos` (
`id_pro` int(10) primary key,
  `nombre_pro` varchar(50) DEFAULT NULL,
  ` genero_pro` varchar(50) DEFAULT NULL,
  `plataforma_pro`varchar(50) DEFAULT NULL,
  `precio_pro` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='Tabla videojuegos';



--
-- Volcado de datos para la tabla `videojuegos`
--

INSERT INTO `videojuegos` (`id_pro`, `nombre_pro`, `genero_pro`, `plataforma_pro`, `precio_pro`) VALUES
(1,'Gears Of War','guerra','Xbox','2500'),
(2,'Fifa 17','deportes','PlayStation', 'Xbox','2500'),
(3,'Mortal Kombat','pelea','PlayStation', 'nintendo wii','3000'),
(4,'Mario Car','carreras','PlayStation', 'Xbox','2500'),





-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `videojuegos`
 ADD PRIMARY KEY (`id_pro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
MODIFY `idEmp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
