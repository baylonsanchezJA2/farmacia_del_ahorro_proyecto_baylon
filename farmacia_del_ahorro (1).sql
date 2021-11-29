-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2021 a las 04:44:18
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `farmacia_del ahorro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `IDarticulo` int(11) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Precio` varchar(40) NOT NULL,
  `Cantidad` varchar(45) NOT NULL,
  `Fecha_vendido` date NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Tiempo_entrega` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`IDarticulo`, `Nombre`, `Precio`, `Cantidad`, `Fecha_vendido`, `Descripcion`, `Tiempo_entrega`) VALUES
(1, 'tucol d', '$20', '1', '2021-11-08', 'el cliente se llevo 1 tucol-d de $20 y fue vendido en 2021-11-08', '20min'),
(2, 'aspirina', '$40', '2', '2021-11-09', 'El cliente se llevara 2 aspirinas que cuestan 40 pesos', '20min'),
(3, 'aspirina', '$40', '1', '2021-11-10', 'El cliente se llevara una aspirina de 40 pesos', '22min'),
(4, 'tucol d', '$20', '2', '2021-11-12', 'El cliente se llevara 2 tucol d de 20 pesos', '20min'),
(5, 'aspirina', '$40', '1', '2021-11-13', 'el cliente se llevara una aspirina de 40 pesos', '25min');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `IDcliente` int(11) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Domicilio` varchar(50) NOT NULL,
  `Numero_tel` varchar(30) NOT NULL,
  `E-mail` varchar(45) NOT NULL,
  `Fecha_pedido` date NOT NULL,
  `Medicamento` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`IDcliente`, `Nombre`, `Domicilio`, `Numero_tel`, `E-mail`, `Fecha_pedido`, `Medicamento`) VALUES
(2, 'Andres', 'tupolev pte.2402', '4849793', 'andresrosales@gmail.com', '2021-11-08', 'tucol d'),
(3, 'Pedro', 'tupolev pte.2406', '3605773', 'pedro@gmail.com', '2021-11-09', 'aspirina'),
(4, 'Roberto', 'tupolev pte.2407', '6577281', 'roberto@gmail.com', '2021-11-10', 'aspirina'),
(5, 'Max', 'tupolev pte.2408', '2133933', 'max@gmail.com', '2021-11-12', 'tucol d'),
(6, 'Luis', 'tupolev pte.2409', '6577289', 'luis@gmail.com', '2021-11-13', 'aspirina'),
(7, 'Oscar', 'tupolev pte.2410', '3605798', 'oscar@gmail.com', '2021-11-14', 'tucol d');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `IDempleado` int(11) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Apellido` varchar(40) NOT NULL,
  `Numero_tel` varchar(30) NOT NULL,
  `Fecha_nacimiento` date NOT NULL,
  `E-mail` varchar(45) NOT NULL,
  `Domicilio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`IDempleado`, `Nombre`, `Apellido`, `Numero_tel`, `Fecha_nacimiento`, `E-mail`, `Domicilio`) VALUES
(1, 'Jorge ', 'Baylon', '3605793', '2004-07-21', 'jabaylonsanchez@gmail.com', 'tupolev pte.2401'),
(2, 'Ricardo', 'Ramirez', '2133952', '2004-07-21', 'ricardoramirez@gmail.com', 'tupolev pte.2403'),
(3, 'Irving', 'Guerrero', '6577271', '2002-09-02', 'irvinguerrero@gmail.com', 'tupolev pte.2405'),
(4, 'Jesus', 'Rosales', '2133952', '2004-07-21', 'jesus@gmail.com', 'tupolev pte.2404'),
(5, 'Yahir', 'Pineda', '6577271', '2002-09-02', 'yahirpineda@gmail.com', 'tupolev pte.2406'),
(6, 'jorge', 'baylon', '3605793', '2004-07-21', 'jabaylonsanchez@gmail.com', ''),
(7, 'jorge', 'baylon', '3605793', '2004-07-21', 'jabaylonsanchez@gmail.com', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `IDventa` int(11) NOT NULL,
  `Producto` varchar(40) NOT NULL,
  `Domicilio` varchar(40) NOT NULL,
  `Categoria` varchar(45) NOT NULL,
  `Precio` varchar(45) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Costo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`IDventa`, `Producto`, `Domicilio`, `Categoria`, `Precio`, `Descripcion`, `Costo`) VALUES
(1, 'tucol d', 'tupolev pte.2402', 'medicamentos', '$20', 'el cliente compro un tucol d de 20 pesos de la categoria medicamentos', '$20'),
(2, 'aspirina', 'tupolev pte.2406', 'medicamentos', '$40', 'el cliente se llevara 2 aspirinas de 40 pesos', '$80'),
(3, 'aspirina', 'tupolev pte.2407', 'medicamentos', '$40', 'el cliente se llevara una aspirina de 40 pesos', '$40'),
(4, 'tucol d', 'tupolev pte.2408', 'medicamentos', '$20', 'el cliente se llevara 2 tucol d de 20 pesos', '$40'),
(5, 'aspirina', 'tupolev pte.2409', 'medicamentos', '$40', 'el cliente se llevara una aspirina de 20 pesos', '$20'),
(6, 'Tucol D', 'tupolev pte.2410', 'medicamentos', '$20', 'el cliente se llevara un tucol d de 20 pesos', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`IDarticulo`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`IDcliente`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`IDempleado`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`IDventa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `IDarticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `IDcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `IDempleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `IDventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
