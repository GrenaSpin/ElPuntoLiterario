-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-01-2022 a las 06:35:25
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `punto_literario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(10) NOT NULL,
  `img_URL` varchar(200) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `author` varchar(100) DEFAULT NULL,
  `editorial` varchar(100) DEFAULT NULL,
  `precio` float NOT NULL,
  `fecha_publicacion` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `img_URL`, `titulo`, `author`, `editorial`, `precio`, `fecha_publicacion`) VALUES
(1, 'https://res.cloudinary.com/doz4ln6wb/image/upload/v1642050093/ni7hptlziiimtxk5ivzn.png', 'La Batalla del 5 de Mayo', 'German List Arzubide', 'Ediciones Margen', 300, 1962),
(2, 'https://res.cloudinary.com/doz4ln6wb/image/upload/v1642049684/owhfeahdiaacy54b9jsp.jpg', 'Augurios y Abusiones', 'Alfredo López Austin,\r\nUniversidad Nacional Autónoma de México,\r\nInstituto de Investigaciones Histór', 'Textos de los informantes de Sahagún', 300, 1969),
(3, 'https://res.cloudinary.com/doz4ln6wb/image/upload/v1642049659/hejkauwkmijw7hwbuuq4.jpg', 'La Idea del Descubrimiento de América', 'Edmundo O\'Gorman', 'Ediciones del IV Centenario de la Universidad de México,\r\nCentro de Estudios Filosóficos', 350, 1951),
(6, 'https://res.cloudinary.com/doz4ln6wb/image/upload/v1641890848/lpmg3hnew5xgliurxtqy.jpg', 'La Idea del Descubrimiento de América', 'Edmundo O\'Gorman', 'Ediciones del IV Centenario de la Universidad de México,\r\nCentro de Estudios Filosóficos', 320.5, 1951),
(7, 'https://res.cloudinary.com/doz4ln6wb/image/upload/v1641857969/cld-sample.jpg', 'Andanzas Mexicanas', 'Lionel Vasse,\r\nAlfonso Reyes', '', 400, 1948),
(8, 'https://res.cloudinary.com/doz4ln6wb/image/upload/v1641857946/sample.jpg', 'Andanzas de Hernán Cortés', 'Artemio de Valle-Arizpe ', 'Biblioteca Nueva \r\nMadrid', 350, 1940),
(9, 'https://res.cloudinary.com/doz4ln6wb/image/upload/v1642057934/ico_vchnfa.png', 'Ofrendas Mexicas en el Museo Nacional de Antropolo', 'Noemí Castillo,\r\nFelipe Solís', 'Union Académique Internationale', 500, 1975),
(10, 'https://res.cloudinary.com/doz4ln6wb/image/upload/v1642057986/logo2_png_xtiabj.png', 'Platillos Populares Mexicanos', 'Josefina Velázquez de León', 'Grupo Editorial de la Compañía Nacional de Subsistencias Populares\r\nMéxico', 500, 1971);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
