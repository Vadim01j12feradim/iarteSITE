-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 02-06-2023 a las 22:52:13
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `convocatoria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

DROP TABLE IF EXISTS `registro`;
CREATE TABLE IF NOT EXISTS `registro` (
  `id_registro` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `telefono` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `edad` int NOT NULL,
  `estado` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `municipio` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `colonia` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `ocupacion` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `nacionalidad` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `identificacion` text COLLATE utf8mb4_general_ci NOT NULL,
  `comprobante` text COLLATE utf8mb4_general_ci NOT NULL,
  `imagen1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `cadena1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `imagen2` text COLLATE utf8mb4_general_ci,
  `cadena2` text COLLATE utf8mb4_general_ci,
  `imagen3` text COLLATE utf8mb4_general_ci,
  `cadena3` text COLLATE utf8mb4_general_ci,
  `imagen4` text COLLATE utf8mb4_general_ci,
  `cadena4` text COLLATE utf8mb4_general_ci,
  `manifiesto` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_registro`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_registro`, `nombre`, `telefono`, `correo`, `edad`, `estado`, `municipio`, `colonia`, `ocupacion`, `nacionalidad`, `identificacion`, `comprobante`, `imagen1`, `cadena1`, `imagen2`, `cadena2`, `imagen3`, `cadena3`, `imagen4`, `cadena4`, `manifiesto`) VALUES
(2, 'Hector', '3325458778', 'acher@luthier.com', 1, 'Ebriedad', 'Municipal', 'Sanborns', 'NINI', '', 'identificacion.pdf', 'comprobante.pdf', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'manifiesto.pdf'),
(3, 'Hector', '3325458778', 'acher@luthier.com', 1, 'Ebriedad', 'Municipal', 'Sanborns', 'NINI', '', 'identificacion.pdf', 'comprobante.pdf', 'imagenes/', '', 'imagenes/', '', 'imagenes/', '', 'imagenes/descarga.jfif', 'hasgfasgf', 'manifiesto.pdf'),
(4, 'Hector', '3325458778', 'acher@luthier.com', 1, 'Ebriedad', 'Municipal', 'Sanborns', 'NINI', '', 'archivos/identificacion.pdf', 'archivos/comprobante.pdf', 'imagenes/', '', 'imagenes/', '', 'imagenes/', '', 'imagenes/descarga.jfif', 'hasgfasgf', 'archivos/manifiesto.pdf'),
(5, 'Hector', '3325458778', 'acher@luthier.com', 1, 'Ebriedad', 'Municipal', 'Sanborns', 'NINI', '', 'archivos/identificacion.pdf', 'archivos/comprobante.pdf', 'imagenes/', '', 'imagenes/', '', 'imagenes/', '', 'imagenes/descarga.jfif', 'hasgfasgf', 'archivos/manifiesto.pdf'),
(6, 'Hector', '3325458778', 'acher@luthier.com', 1, 'Ebriedad', 'Municipal', 'Sanborns', 'NINI', '', 'archivos/identificacion.pdf', 'archivos/comprobante.pdf', '', '', 'imagenes/', '', 'imagenes/', '', 'imagenes/descarga.jfif', 'hasgfasgf', 'archivos/manifiesto.pdf'),
(7, 'Hector', '3325458778', 'acher@luthier.com', 18, 'Ebriedad', 'Municipal', 'Sanborns', 'NINI', '', 'archivos/identificacion.pdf', 'archivos/comprobante.pdf', 'imagenes/descarga.jfif', 'jhfhgfhjfgd454654bjhghhg', '', '', '', '', '', '', 'archivos/manifiesto.pdf'),
(8, 'Ernesto Acher', '332014587', 'acher@luthier.com', 68, 'Banania', 'Macondo', 'Banania 2', 'Músico', '', 'archivos/identificacion.pdf', 'archivos/comprobante.pdf', 'imagenes/descarga.jfif', 'ghjghjgfvvb  gdythj gfgsrrsfg f4', '', '', 'imagenes/descarga.jfif', 'bfhg hgfv ytf 65 64', '', '', 'archivos/manifiesto.pdf'),
(9, 'jhghjgh', '121365165', 'nmmn@correo.com', 52, 'Ebriedad', 'kghb', 'aas', 'nini', '', 'archivos/identificacion.pdf', 'archivos/comprobante.pdf', '', '', '', '', '', '', 'imagenes/descarga.jfif', 'fhgft  ghff ', 'archivos/manifiesto.pdf'),
(10, 'Jorge Maronna', '3352147870', 'maronna@luthier.com', 58, 'La Plata', 'Ajijic', 'Sanborns', 'Luthier', '', 'archivos/identificacion.pdf3352147870', 'archivos/comprobante.pdf3352147870', 'imagenes/descarga.jfif3352147870', 'Imagen chida', '', '', '', '', '', '', 'archivos/manifiesto.pdf3352147870'),
(11, 'Jorge Maronna', '3352147870', 'maronna@luthier.com', 58, 'La Plata', 'Ajijic', 'Sanborns', 'Luthier', '', 'archivos/3352147870identificacion.pdf', 'archivos/3352147870comprobante.pdf', 'imagenes/3352147870descarga.jfif', 'Imagen chida', '', '', '', '', '', '', 'archivos/3352147870manifiesto.pdf'),
(12, 'Héctor Nomar González Flores', '3335547879', 'hector.gonzalez4197@alumnos.udg.mx', 24, 'Jalisco', 'Guadalajara', 'Villas de Guadalupe', 'Estudiante', '', 'archivos/3335547879identificacion.pdf', 'archivos/3335547879comprobante.pdf', 'imagenes/3335547879descarga.jfif', 'Imagen de Les luthiers', '', '', '', '', '', '', 'archivos/3335547879manifiesto.pdf'),
(13, 'Héctor Nomar González Flores', '3335547879', 'hector.gonzalez4197@alumnos.udg.mx', 24, 'Jalisco', 'Guadalajara', 'Villas de Guadalupe', 'Estudiante', '', 'archivos/3335547879identificacion.pdf', 'archivos/3335547879comprobante.pdf', 'imagenes/3335547879descarga.jfif', 'Imagen de Les luthiers', '', '', '', '', '', '', 'archivos/3335547879manifiesto.pdf'),
(14, 'Héctor Nomar González Flores', '3335547879', 'hector.gonzalez4197@alumnos.udg.mx', 24, 'Jalisco', 'Guadalajara', 'Villas de Guadalupe', 'Estudiante', '', 'archivos/3335547879identificacion.pdf', 'archivos/3335547879comprobante.pdf', 'imagenes/3335547879descarga.jfif', 'Imagen de Les luthiers', '', '', '', '', '', '', 'archivos/3335547879manifiesto.pdf'),
(15, 'Carlos López Puccio', '3325413970', 'puccio@luthier.com', 65, 'Buenos Aires', 'Banania', 'La Plata', 'Músico', '', 'archivos/3325413970identificacion.pdf', 'archivos/3325413970comprobante.pdf', 'imagenes/3325413970descarga.jfif', 'Les luthiers, imagen perrona', '', '', '', '', '', '', 'archivos/3325413970manifiesto.pdf'),
(16, 'Carlos López Puccio', '3325413970', 'puccio@luthier.com', 65, 'Buenos Aires', 'Banania', 'La Plata', 'Músico', '', 'archivos/3325413970identificacion.pdf', 'archivos/3325413970comprobante.pdf', 'imagenes/3325413970descarga.jfif', 'Les luthiers, imagen perrona', '', '', '', '', '', '', 'archivos/3325413970manifiesto.pdf'),
(17, 'Carlos López Puccio', '3325413970', 'puccio@luthier.com', 65, 'Buenos Aires', 'Banania', 'La Plata', 'Músico', '', 'archivos/3325413970identificacion.pdf', 'archivos/3325413970comprobante.pdf', 'imagenes/3325413970descarga.jfif', 'Les luthiers, imagen perrona', '', '', '', '', '', '', 'archivos/3325413970manifiesto.pdf'),
(18, 'José Maximialo', '3320154850', 'acher@luthier.com', 25, 'Jalisco', 'Ajijic', 'snajfbajsf', 'Nini', '', 'archivos/3320154850identificacion.pdf', 'archivos/3320154850comprobante.pdf', 'imagenes/3320154850descarga.jfif', 'Des', '', '', '', '', '', '', 'archivos/3320154850manifiesto.pdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
