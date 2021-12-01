-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2021 a las 02:03:58
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cereso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cocineros`
--

CREATE TABLE `cocineros` (
  `id_usuario` int(100) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Edad` varchar(50) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Fecha_Registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cocineros`
--

INSERT INTO `cocineros` (`id_usuario`, `Nombre`, `Apellido`, `Edad`, `Fecha_Nacimiento`, `Telefono`, `Fecha_Registro`) VALUES
(1, 'Evelyn Marisol', 'Estrada Gallegos ', '19', '2002-05-14', '656-164-8523', '2021-11-30 00:01:19'),
(5, 'Diego Andres', 'Ortiz Lopez', '20', '2002-07-15', '656-846-4236', '2021-11-30 07:39:17'),
(6, 'America', 'Holguin', '19', '2003-07-21', '6561446996', '2021-11-30 07:37:04'),
(7, 'Axel Martin', 'Soltero Galvan', '22', '1999-08-14', '656-258-1459', '2021-11-30 07:40:53'),
(8, 'Marisela Ivonee', 'Holguin Galvan', '35', '1986-02-19', '656-154-8963', '2021-12-01 00:42:58'),
(9, 'America', 'Holguin', '20', '2001-07-21', '6561446996\'', '2021-12-01 00:44:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guardia`
--

CREATE TABLE `guardia` (
  `id_usuario` int(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Edad` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Fecha_Registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `guardia`
--

INSERT INTO `guardia` (`id_usuario`, `Nombre`, `Apellido`, `Edad`, `Telefono`, `Fecha_Nacimiento`, `Fecha_Registro`) VALUES
(1, 'America Ivonne', 'Holguin Holguin', '19', '656-249-2537', '2002-07-21', '2021-11-17 05:28:45'),
(3, 'Jesus Samuel ', 'Holguin Hernandez ', '36', '656-146-7821', '1985-06-17', '2021-11-17 05:32:06'),
(4, 'America', 'Holguin', '20', '6561446996', '2001-07-21', '2021-12-01 00:50:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reo`
--

CREATE TABLE `reo` (
  `id_usuario` int(100) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Edad` varchar(50) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Delito` text NOT NULL,
  `Fecha_Registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reo`
--

INSERT INTO `reo` (`id_usuario`, `Nombre`, `Apellido`, `Edad`, `Fecha_Nacimiento`, `Delito`, `Fecha_Registro`) VALUES
(2, 'Pablo Emilio', 'Escobar Gaviria', '44', '1949-12-01', 'Narcotráfico, lavado de dinero, asesinato, terrorismo, soborno, contrabando, extorsión, corrupción política.', '2021-11-10 02:06:10'),
(3, 'Carlos Enrique', 'Lehder Rivas', '73', '1949-09-07', 'Narcotráfico de sustancias', '2021-11-30 08:02:21'),
(4, 'America', 'Holguin', '51', '1970-04-26', 'Extorcion', '2021-12-01 00:53:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE `visitas` (
  `id_usuario` int(100) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Hora` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Parentesco` varchar(50) NOT NULL,
  `Asunto` varchar(50) NOT NULL,
  `Fecha_Registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `visitas`
--

INSERT INTO `visitas` (`id_usuario`, `Nombre`, `Apellido`, `Hora`, `Telefono`, `Parentesco`, `Asunto`, `Fecha_Registro`) VALUES
(1, 'Diego Andres', 'Ortiz Lopez', '6:00 pm', '656-249-2537', 'Padre', 'Visita vespertina', '2021-11-29 23:33:11'),
(2, 'America Ivonne', 'Holguin Holguin', '9:00 am', '656-254-2987', 'Hija', 'Visita matutina', '2021-11-30 08:07:41'),
(3, 'Axel Martin', '', '5:30 pm', '656-157-5896', 'Hijo', 'Visita Vespertina', '2021-12-01 00:56:01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cocineros`
--
ALTER TABLE `cocineros`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `guardia`
--
ALTER TABLE `guardia`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `reo`
--
ALTER TABLE `reo`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cocineros`
--
ALTER TABLE `cocineros`
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `guardia`
--
ALTER TABLE `guardia`
  MODIFY `id_usuario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `reo`
--
ALTER TABLE `reo`
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `visitas`
--
ALTER TABLE `visitas`
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
