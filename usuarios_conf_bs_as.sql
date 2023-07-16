-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2023 a las 00:22:46
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
-- Base de datos: `usuarios_conf_bs_as`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status-usuarios`
--

CREATE TABLE `status-usuarios` (
  `status` int(11) NOT NULL,
  `Estudiante` varchar(25) NOT NULL,
  `Trainee` varchar(25) NOT NULL,
  `Junior` varchar(25) NOT NULL,
  `Admin` varchar(25) NOT NULL,
  `Presentador` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(25) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Apellido` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `Nombre`, `Apellido`, `Email`, `Status`) VALUES
(2, 'Norma', 'Aleandro', 'norale@yahoo.it', 'Estudiante'),
(3, 'Javier', 'Morales', 'moraja@lalal.net', 'Admin'),
(27, 'jogelina', 'andrade', 'jorgeand@kaka.com', 'Presentador'),
(42, 'marianomercevich@gmail.co', 'mercevich', 'marianomercevich@gmail.co', ' Trainee'),
(96, 'marianomercevich@gmail.co', 'mercevich', 'marianomercevich@gmail.co', 'Admin'),
(97, 'marianomercevich@gmail.co', 'mercevich', 'marianomercevich@gmail.co', 'Admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `status-usuarios`
--
ALTER TABLE `status-usuarios`
  ADD PRIMARY KEY (`status`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`),
  ADD KEY `Status` (`Status`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `status-usuarios`
--
ALTER TABLE `status-usuarios`
  ADD CONSTRAINT `status-usuarios_ibfk_1` FOREIGN KEY (`status`) REFERENCES `usuarios` (`id_usuarios`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
