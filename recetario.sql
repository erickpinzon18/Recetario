-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2020 a las 08:17:49
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `recetario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carta`
--

CREATE TABLE `carta` (
  `id_carta` int(11) NOT NULL,
  `id_platillo` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carta`
--

INSERT INTO `carta` (`id_carta`, `id_platillo`, `descripcion`, `precio`) VALUES
(1, 1, 'Rico Sandwich de Jamon con Mayonesa, envuelto entre dos capas de pan y cada pan tostado por 2 minutos teniendo una consistencia perfecta para su buen disfrute', 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes`
--

CREATE TABLE `ingredientes` (
  `id_ingredientes` int(11) NOT NULL,
  `ingrediente` varchar(30) NOT NULL,
  `caloria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ingredientes`
--

INSERT INTO `ingredientes` (`id_ingredientes`, `ingrediente`, `caloria`) VALUES
(0, 'Ninguno', 0),
(1, 'Pan', 23),
(2, 'Mayonesa', 57),
(3, 'Jamon', 36),
(4, 'Aguacate', 36),
(5, 'Jitomate', 10),
(6, 'Salchicha', 86),
(7, 'Cereal', 100),
(8, 'Leche', 42),
(9, 'Fideos', 138),
(10, 'Agua', 0),
(11, 'Ketchup', 113),
(12, 'Avena', 70);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paso`
--

CREATE TABLE `paso` (
  `id_paso` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `tiempo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paso`
--

INSERT INTO `paso` (`id_paso`, `descripcion`, `tiempo`) VALUES
(0, 'Ninguno', '0 minutos'),
(1, 'Tostar', '2 minutos'),
(2, 'Untar', '1 minuto'),
(3, 'Armar', '1 minuto'),
(4, 'Servir', '2 minutos'),
(5, 'Cortar', '2 minutos'),
(6, 'Hervir', '30'),
(7, 'Freir', '5 minutos'),
(8, 'Agregar', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillo`
--

CREATE TABLE `platillo` (
  `id_platillo` int(11) NOT NULL,
  `id_receta` int(10) NOT NULL,
  `tipo_presentacion` int(11) NOT NULL,
  `fuente` varchar(50) NOT NULL,
  `contenido` varchar(50) NOT NULL,
  `ing_principal` varchar(50) NOT NULL,
  `comentarios` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `platillo`
--

INSERT INTO `platillo` (`id_platillo`, `id_receta`, `tipo_presentacion`, `fuente`, `contenido`, `ing_principal`, `comentarios`) VALUES
(1, 5, 1, 'Madre', 'Sandwich', 'Jamon', 'Delicioso Sandwich de Jamon con Mayonesa envuelto entre dos capas de pan'),
(2, 20, 2, 'Madre', 'Torta', '6', 'Rica torta de salchicha crujiente preparada y tostada en un comal dandole ese toque exquisito'),
(3, 25, 3, 'Internet', 'Cereal', '7', 'Rico cereal chocokrispis con leche'),
(4, 27, 2, 'Madre', 'Sopa', '9', 'Rica sopa de fideos hecha para disfrutar en familia'),
(5, 30, 1, 'TV', 'Hot Dog', '6', 'Rico Hot Dog para disfrutar con jitomate'),
(6, 36, 3, 'Libro', 'Avena', '12', 'Rica avena para cenar ligero y poder dormir a gusto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `id_receta` int(10) NOT NULL,
  `nombre_receta` varchar(30) NOT NULL,
  `id_paso` int(11) NOT NULL,
  `id_utensilio` int(11) DEFAULT NULL,
  `id_ingredientes` int(11) DEFAULT NULL,
  `cantidad_ingredientes` int(11) DEFAULT NULL,
  `contador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `receta`
--

INSERT INTO `receta` (`id_receta`, `nombre_receta`, `id_paso`, `id_utensilio`, `id_ingredientes`, `cantidad_ingredientes`, `contador`) VALUES
(1, 'Sandwich', 1, 1, 1, 2, 5),
(1, 'Sandwich', 2, 2, 2, 1, 6),
(1, 'Sandwich', 3, 0, 3, 1, 7),
(1, 'Sandwich', 2, 2, 0, 1, 8),
(2, 'Torta', 1, 5, 1, 2, 20),
(2, 'Torta', 2, 2, 2, 1, 21),
(2, 'Torta', 3, 0, 6, 4, 22),
(2, 'Torta', 4, 3, 1, 1, 23),
(3, 'Cereal', 4, 3, 8, 1, 25),
(3, 'Cereal', 4, 3, 8, 1, 26),
(4, 'Sopa', 6, 6, 10, 1, 27),
(4, 'Sopa', 4, 6, 9, 1, 28),
(4, 'Sopa', 4, 3, 9, 1, 29),
(5, 'Hot Dog', 1, 5, 1, 1, 30),
(5, 'Hot Dog', 7, 7, 6, 1, 31),
(5, 'Hot Dog', 2, 2, 2, 1, 32),
(5, 'Hot Dog', 3, 0, 6, 1, 33),
(5, 'Hot Dog', 8, 0, 11, 1, 34),
(5, 'Hot Dog', 4, 3, 1, 1, 35),
(6, 'Avena', 6, 6, 10, 1, 36),
(6, 'Avena', 4, 3, 12, 1, 37),
(6, 'Avena', 4, 3, 10, 1, 38);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `utensilio`
--

CREATE TABLE `utensilio` (
  `id_utensilio` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `ubicacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `utensilio`
--

INSERT INTO `utensilio` (`id_utensilio`, `nombre`, `ubicacion`) VALUES
(0, 'Ninguno', ''),
(1, 'Tostadora', 'Anaquel 1'),
(2, 'Pala', 'Cajon 1'),
(3, 'Plato', 'Anaquel 2'),
(4, 'Batidora', 'Anaquel 1'),
(5, 'Comal', 'Anaquel 1'),
(6, 'Cacerola', 'Anaquel 2'),
(7, 'Sarten', 'Anaquel 2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carta`
--
ALTER TABLE `carta`
  ADD PRIMARY KEY (`id_carta`),
  ADD KEY `fk_platillo` (`id_platillo`);

--
-- Indices de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`id_ingredientes`);

--
-- Indices de la tabla `paso`
--
ALTER TABLE `paso`
  ADD PRIMARY KEY (`id_paso`);

--
-- Indices de la tabla `platillo`
--
ALTER TABLE `platillo`
  ADD PRIMARY KEY (`id_platillo`),
  ADD KEY `fk_receta_platillo` (`id_receta`);

--
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`contador`),
  ADD KEY `fk_paso` (`id_paso`),
  ADD KEY `fk_receta_utensilio` (`id_utensilio`),
  ADD KEY `fk_receta_ingredientes` (`id_ingredientes`);

--
-- Indices de la tabla `utensilio`
--
ALTER TABLE `utensilio`
  ADD PRIMARY KEY (`id_utensilio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `receta`
--
ALTER TABLE `receta`
  MODIFY `contador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carta`
--
ALTER TABLE `carta`
  ADD CONSTRAINT `fk_platillo` FOREIGN KEY (`id_platillo`) REFERENCES `platillo` (`id_platillo`);

--
-- Filtros para la tabla `platillo`
--
ALTER TABLE `platillo`
  ADD CONSTRAINT `fk_receta_platillo` FOREIGN KEY (`id_receta`) REFERENCES `receta` (`contador`);

--
-- Filtros para la tabla `receta`
--
ALTER TABLE `receta`
  ADD CONSTRAINT `fk_paso` FOREIGN KEY (`id_paso`) REFERENCES `paso` (`id_paso`),
  ADD CONSTRAINT `fk_receta_ingredientes` FOREIGN KEY (`id_ingredientes`) REFERENCES `ingredientes` (`id_ingredientes`),
  ADD CONSTRAINT `fk_receta_utensilio` FOREIGN KEY (`id_utensilio`) REFERENCES `utensilio` (`id_utensilio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
