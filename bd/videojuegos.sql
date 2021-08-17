-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2021 a las 02:11:12
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `videojuegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `tituloevento` varchar(100) NOT NULL,
  `fechaevento` datetime NOT NULL,
  `plataformas` varchar(250) NOT NULL,
  `region` varchar(50) NOT NULL,
  `descevento` text NOT NULL,
  `categoriaevento` varchar(50) NOT NULL,
  `nombreimgevento` varchar(100) NOT NULL,
  `rutaevento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `tituloevento`, `fechaevento`, `plataformas`, `region`, `descevento`, `categoriaevento`, `nombreimgevento`, `rutaevento`) VALUES
(4, 'PLAYVS HIGH SCHOOL', '2021-03-17 17:47:00', 'Todas', 'COSTA ESTE DE EE. UU.', 'Este es un torneo para estudiantes registrados a través de PlayVS.', 'Fortnite', 'Capturaf.PNG', 'imagenes/eventos/Capturaf.PNG'),
(5, 'Evento de Aniversario(Cubo Mágico)', '2021-08-24 20:00:00', 'Móviles', 'EE.UU y Sudamérica', 'Sabemos que estas muy emocionado por el evento de aniversario de Free Fire; por ello queremos darte una pequeña guía de preguntas y respuestas que podrías tener respecto al evento', 'Free Fire', 'Capturaff.PNG', 'imagenes/eventos/Capturaff.PNG'),
(6, 'CALL OF DUTY®: WEEKLY BRIEFING', '2021-03-15 17:59:00', 'Móviles', 'EE.UU ', 'Stockpile and Knife Fight 3v3 debutan en MP en Black Ops Cold War, Call of Duty League comienza la Etapa II de la temporada 2021, ¡y el nuevo merchandising de Warzone!', 'Call Of Duty', 'CapturaC.PNG', 'imagenes/eventos/CapturaC.PNG'),
(7, 'PMGC Finals Day 4 PUBG MOBILE ', '2021-03-23 19:00:00', 'Pc', 'México ', 'Los 16 mejores equipos de todo el mundo lucharán entre sí por la gloria, la fama y el premio acumulado.', 'Pubg', 'Capturap.PNG', 'imagenes/eventos/Capturap.PNG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `fecha` datetime NOT NULL,
  `desc_post` text NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `nombreimg` varchar(100) NOT NULL,
  `ruta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `titulo`, `fecha`, `desc_post`, `usuario`, `categoria`, `nombreimg`, `ruta`) VALUES
(6, 'ACTUALIZACIÓN DEL MODO CREATIVO: VERSIÓN 16.00', '2021-03-15 17:37:00', '¡Saludos, creadores de Fortnite!\r\n\r\nLa actualización versión 16.00 trae un dispositivo barrera mejorado. ¡Echad un vistazo a los detalles a continuación!', 'piya', 'Fortnite', 'Capturaf.PNG', 'imagenes/publicaciones/Capturaf.PNG'),
(7, '¡Feliz día de San Patricio!', '2021-03-18 17:39:00', 'Celebra iniciando sesión en Free Fire y obtén gratis la Tabla de Palmeras ?, el Maquillaje de Camuflaje y 50 Tokens de Trébol para intercambiar', 'piya', 'Free Fire', 'Capturaff.PNG', 'imagenes/publicaciones/Capturaff.PNG'),
(8, 'JUEGA GRATIS EN MÓVILES', '2021-03-15 06:42:00', 'Partidas en alta definición con calidad de consola en tu teléfono, controles personalizables, chat de texto y de voz, e impresionantes sonidos y gráficos en 3D.', 'piya', 'Call Of Duty', 'Capturac.PNG', 'imagenes/publicaciones/Capturac.PNG'),
(9, 'ACTUALIZACIÓN 10.3 PARA PC', '2021-03-15 17:44:00', 'La Actualización 10.3 ya ha llegado y trae un surtido de nuevas funcionalidades y mejoras de rendimiento.', 'piya', 'Pubg', 'CapturaP.PNG', 'imagenes/publicaciones/CapturaP.PNG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'admin'),
(2, 'colaborador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `descuser` text NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `fechaR` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `rol_id`, `nombre`, `correo`, `descuser`, `sexo`, `fechaR`) VALUES
(9, 'nuevo', '81dc9bdb52d04dc20036dbd8313ed055', 2, 'nuevoprueba', 'carlos@prueba', 'fff', 'Hombre', '2021-03-17 23:20:32'),
(10, 'piya', '3d1bb5be9161e2bc098e9584019109b2', 1, 'Carlos García', 'carlos@garcia.com', 'Soy admin ', 'Hombre', '2021-03-17 00:32:30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarios_ibfk_1` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
