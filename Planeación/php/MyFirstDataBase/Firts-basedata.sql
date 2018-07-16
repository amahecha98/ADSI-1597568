-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-06-2018 a las 18:26:08
-- Versión del servidor: 5.6.38
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `First_Base`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_data`
--

CREATE TABLE `user_data` (
  `ID` int(16) NOT NULL,
  `User` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user_data`
--

INSERT INTO `user_data` (`ID`, `User`, `Name`, `LastName`, `Phone`, `Password`) VALUES
(1, 'admino', 'Cesar Adrian', 'Mahecha  Marin', '3113711331', '79003246'),
(2, '2222', '222', '222', '22', '22'),
(3, 'hello', '666', '770', '666', 'como vas'),
(4, 'hola ', 'cesar', 'adrian', '311367', '3123456'),
(11, '1', 'cesar', 'mahecha', '311356', '678'),
(12, '66', '6777', '8888', '311371131', '345'),
(13, '66', '6777', '8888', '311371131', '345'),
(14, '222222', '4444444', '5555', '8888', '2222'),
(15, '222222', '333', '555', '55', '2222'),
(16, 'HOLA', '44', 'LLLL', '3112', '4666'),
(17, '222222', '55', '55', '555', '2222'),
(18, 'HOLA COMO VAS', 'HOLA', 'COMO ', '77888', '666'),
(22, 'dolly', 'dolly', 'marin', '3113711331', '1345678'),
(23, 'mahecha', 'cesar', 'adrian', '444', '123456'),
(24, '222222', '', '', '', '2222');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user_data`
--
ALTER TABLE `user_data`
  MODIFY `ID` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;