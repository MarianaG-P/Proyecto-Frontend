-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2023 a las 07:27:12
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `categoria`, `precio`, `imagen`) VALUES
(1, 'Banano', 'Frutas', '1000', 'img/banano.png'),
(3, 'Manzana', 'Frutas', '500', 'img/manzana_roja.png'),
(7, 'Cebolla', 'Verduras', '600', 'img/cebolla.png'),
(8, 'Arroz', 'Otros', '2500', 'img/arroz.png'),
(9, 'Avena', 'Otros', '4000', 'img/avena.png'),
(10, 'Brocoli', 'Verduras', '2000', 'img/brocoli.png'),
(11, 'Champiñones', 'Verduras', '3500', 'img/champiñones.png'),
(12, 'Tomate', 'Verduras', '500', 'img/tomate.png'),
(13, 'Pimentón', 'Verduras', '600', 'img/pimenton.png'),
(14, 'Repollo', 'Verduras', '1500', 'img/repollo.png'),
(15, 'Cafe', 'Otros', '8000', 'img/cafe.png'),
(16, 'Mani', 'Otros', '5000', 'img/mani.png'),
(17, 'Nueces', 'Otros', '9500', 'img/nueces.png'),
(18, 'Naranja', 'Frutas', '600', 'img/naranja.png'),
(20, 'Piña', 'Frutas', '600', 'img/pina.png'),
(21, 'Durazno', 'Frutas', '600', 'img/durazno.png'),
(22, 'Fresa', 'Frutas', '600', 'img/fresa.png'),
(23, 'Kiwi', 'Frutas', '600', 'img/kiwi.png'),
(24, 'Manzana Verde', 'Frutas', '1500', 'img/manzana_verde.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `clave`) VALUES
(37, 'Mariana ', 'mariana.garcia.pab@gmail.com', 'MTIz'),
(38, 'Julia', 'julia@gmail.com', 'MTIz');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
