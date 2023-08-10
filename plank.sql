-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2023 a las 23:30:57
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plank`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `ID_cliente` int(11) NOT NULL,
  `nombre_completo_cliente` varchar(50) NOT NULL,
  `celular_cliente` int(11) NOT NULL,
  `correo_cliente` varchar(100) NOT NULL,
  `pass_cliente` varchar(50) NOT NULL,
  `nickname_cliente` varchar(50) DEFAULT NULL,
  `cantidad_reparacion` int(11) NOT NULL,
  `cantidad_instalacion` int(11) NOT NULL,
  `cantidad_desarrollo_web` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `ID_plank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ID_cliente`, `nombre_completo_cliente`, `celular_cliente`, `correo_cliente`, `pass_cliente`, `nickname_cliente`, `cantidad_reparacion`, `cantidad_instalacion`, `cantidad_desarrollo_web`, `fecha_registro`, `ID_plank`) VALUES
(1, 'juan Perez inga', 123456789, 'juan@gmail.com', '123456789', 'pancho', 1, 1, 1, '2023-07-20', 1),
(2, 'Diego Ponce Aguirre', 123456789, 'Diego@gmail.com', '123456789', 'Dieguelas', 0, 0, 0, '2023-07-20', 1),
(3, 'Miller Pablo Inga', 147258369, 'miller@gmail.com', '159487263', 'Lotso', 0, 0, 0, '2023-07-20', 1),
(4, 'Eme Toledo Lopez', 154789125, 'eme@gmail.com', '159487623', 'Emerzon', 0, 0, 0, '2023-07-21', 1),
(5, 'Kevin Arteaga Cabra', 2147483647, 'chino@gmail.com', '123456789', 'chino', 0, 0, 0, '2023-07-21', 1),
(6, 'Kevin Arteaga Cabra', 1234567897, 'chino@gmail.com', '1556156156365', 'chino', 0, 0, 0, '2023-07-21', 1),
(7, 'Antony Carrillo Pino', 614269875, 'antony@gmail.com', '15654654645646546', 'tony', 0, 0, 0, '2023-07-21', 1),
(10, 'Piero Jacinto Jara', 149756248, 'piero@gmail.com', 'sddfsdfsd45654654', 'piepie', 0, 0, 0, '2023-07-21', 1),
(11, 'Manuel Tito Figueredo', 2147483647, 'titomanu@gmail.com', '456sd54f6ds5f4s56d', 'titos123', 0, 0, 0, '2023-07-21', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_reparacion`
--

CREATE TABLE `comentarios_reparacion` (
  `ID_comentario_reparacion` int(11) NOT NULL,
  `comentario_comentario_reparacion` text,
  `cantidad_comentario_reparacion` int(11) DEFAULT NULL,
  `disponible_comentario_reparacion` int(11) DEFAULT NULL,
  `fecha-comentario-reparacion` date NOT NULL,
  `ID_cliente` int(11) NOT NULL,
  `ID_reparacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios_reparacion`
--

INSERT INTO `comentarios_reparacion` (`ID_comentario_reparacion`, `comentario_comentario_reparacion`, `cantidad_comentario_reparacion`, `disponible_comentario_reparacion`, `fecha-comentario-reparacion`, `ID_cliente`, `ID_reparacion`) VALUES
(1, 'trabajo eficiente ', 1, 0, '2023-08-01', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario_desarrollo_web`
--

CREATE TABLE `comentario_desarrollo_web` (
  `ID_comentario_desarrollo_web` int(11) NOT NULL,
  `comentario_comentario_desarrollo_web` text NOT NULL,
  `cantidad_comentario_desarrollo_web` int(11) DEFAULT NULL,
  `disponible_comentario_desarrollo_web` int(11) DEFAULT NULL,
  `fecha-comentario-desarrollo-web` date NOT NULL,
  `ID_desarrollo_web` int(11) NOT NULL,
  `ID_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario_desarrollo_web`
--

INSERT INTO `comentario_desarrollo_web` (`ID_comentario_desarrollo_web`, `comentario_comentario_desarrollo_web`, `cantidad_comentario_desarrollo_web`, `disponible_comentario_desarrollo_web`, `fecha-comentario-desarrollo-web`, `ID_desarrollo_web`, `ID_cliente`) VALUES
(1, 'buen trabajo', 1, 0, '2023-08-01', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario_instalacion`
--

CREATE TABLE `comentario_instalacion` (
  `ID_instalacion_reparacion` int(11) NOT NULL,
  `comentario_comentario_instalacion` text NOT NULL,
  `cantidad_comentario_instalacion` int(11) DEFAULT NULL,
  `disponible_comentario_instalacion` int(11) DEFAULT NULL,
  `fecha-comentario-instalacion` date NOT NULL,
  `ID_instalacion` int(11) NOT NULL,
  `ID_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario_instalacion`
--

INSERT INTO `comentario_instalacion` (`ID_instalacion_reparacion`, `comentario_comentario_instalacion`, `cantidad_comentario_instalacion`, `disponible_comentario_instalacion`, `fecha-comentario-instalacion`, `ID_instalacion`, `ID_cliente`) VALUES
(1, '', 0, 1, '2023-08-01', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desarrollo_web`
--

CREATE TABLE `desarrollo_web` (
  `ID_desarrollo_web` int(11) NOT NULL,
  `nombre_empresa_desarrollo_web` varchar(50) NOT NULL,
  `descripcion_empresa_desarrollo_web` varchar(1000) NOT NULL,
  `objetivos_desarrollo_web` text,
  `publico_desarrollo_web` text,
  `calificacion_desarrollo_web` int(11) NOT NULL,
  `fecha-desarrollo-web` date NOT NULL,
  `estado-desarrollo-web` tinyint(1) NOT NULL,
  `ID_cliente` int(11) NOT NULL,
  `ID_paquetes_escogidos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `desarrollo_web`
--

INSERT INTO `desarrollo_web` (`ID_desarrollo_web`, `nombre_empresa_desarrollo_web`, `descripcion_empresa_desarrollo_web`, `objetivos_desarrollo_web`, `publico_desarrollo_web`, `calificacion_desarrollo_web`, `fecha-desarrollo-web`, `estado-desarrollo-web`, `ID_cliente`, `ID_paquetes_escogidos`) VALUES
(1, 'Abarrotes perez', 'venta de abarrotes', 'tienda online', 'cualquier persona que quiera comprar ', 5, '2023-07-20', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escojer_paquetes`
--

CREATE TABLE `escojer_paquetes` (
  `ID_paquetes_escogidos` int(11) NOT NULL,
  `diseno_web` tinyint(1) NOT NULL,
  `desarrollo_web_programacion` tinyint(1) NOT NULL,
  `diseno_responsivo` tinyint(1) NOT NULL,
  `integracion_cms` tinyint(1) NOT NULL,
  `optimizacion` tinyint(1) NOT NULL,
  `seguridad` tinyint(1) NOT NULL,
  `integracion_comercio_eleectronico` tinyint(1) NOT NULL,
  `seo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `escojer_paquetes`
--

INSERT INTO `escojer_paquetes` (`ID_paquetes_escogidos`, `diseno_web`, `desarrollo_web_programacion`, `diseno_responsivo`, `integracion_cms`, `optimizacion`, `seguridad`, `integracion_comercio_eleectronico`, `seo`) VALUES
(1, 1, 1, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_reparacion`
--

CREATE TABLE `estado_reparacion` (
  `ID_estado_reparacion` int(11) NOT NULL,
  `nombre_estado_reparacion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado_reparacion`
--

INSERT INTO `estado_reparacion` (`ID_estado_reparacion`, `nombre_estado_reparacion`) VALUES
(1, 'solicitud enviada'),
(2, 'reparación iniciada'),
(3, 'reparación en proceso'),
(4, 'reparación finalizada'),
(5, 'equipo en camino'),
(6, 'entregado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instalacion`
--

CREATE TABLE `instalacion` (
  `ID_instalacion` int(11) NOT NULL,
  `direccion_instalacion` varchar(100) DEFAULT NULL,
  `equipo_programa_instalacion` varchar(100) NOT NULL,
  `marca_modelo_instalacion` varchar(100) DEFAULT NULL,
  `descripcion_instalacion` text NOT NULL,
  `metodo_pago_instalacion` varchar(50) NOT NULL,
  `calificacion_instalacion` float DEFAULT NULL,
  `fecha-instalacion` date NOT NULL,
  `estado-instalacion` tinyint(1) NOT NULL,
  `ID_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `instalacion`
--

INSERT INTO `instalacion` (`ID_instalacion`, `direccion_instalacion`, `equipo_programa_instalacion`, `marca_modelo_instalacion`, `descripcion_instalacion`, `metodo_pago_instalacion`, `calificacion_instalacion`, `fecha-instalacion`, `estado-instalacion`, `ID_cliente`) VALUES
(1, 'Jr. Damaso Beraun 128', 'cámaras de seguridad', 'security', 'intalar camaras de seguridad en mi tienda de abarrotes', 'transferencia bancaria', 4, '2023-07-20', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plank`
--

CREATE TABLE `plank` (
  `ID_plank` int(11) NOT NULL,
  `correo_plank` varchar(100) NOT NULL,
  `direccion_plak` varchar(100) NOT NULL,
  `celular_uno_plank` int(11) NOT NULL,
  `celular_dos_plak` int(11) NOT NULL,
  `fb_plank` varchar(50) NOT NULL,
  `ig_plank` varchar(50) NOT NULL,
  `in_plank` varchar(50) NOT NULL,
  `tw_plank` varchar(50) NOT NULL,
  `mision` text,
  `vision` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plank`
--

INSERT INTO `plank` (`ID_plank`, `correo_plank`, `direccion_plak`, `celular_uno_plank`, `celular_dos_plak`, `fb_plank`, `ig_plank`, `in_plank`, `tw_plank`, `mision`, `vision`) VALUES
(1, 'plakservice@gmail.com', 'Av. Universitaria', 912841899, 926556315, 'facebook', 'instagram', 'linkeding', 'twtter', 'dar un servicio de calidad', 'ser los mejores en nuestro ambito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparacion`
--

CREATE TABLE `reparacion` (
  `ID_reparacion` int(11) NOT NULL,
  `direccion_reparacion` varchar(100) DEFAULT NULL,
  `equipo_reparacion` varchar(100) NOT NULL,
  `marca_modelo_reparacion` varchar(100) DEFAULT NULL,
  `descripcion_reparacion` text NOT NULL,
  `metodo_pago_reparacion` varchar(50) NOT NULL,
  `calificacion_reparacion` float DEFAULT NULL,
  `fecha-reparacion` date NOT NULL,
  `ID_cliente` int(11) NOT NULL,
  `ID_estado_reparacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reparacion`
--

INSERT INTO `reparacion` (`ID_reparacion`, `direccion_reparacion`, `equipo_reparacion`, `marca_modelo_reparacion`, `descripcion_reparacion`, `metodo_pago_reparacion`, `calificacion_reparacion`, `fecha-reparacion`, `ID_cliente`, `ID_estado_reparacion`) VALUES
(1, 'Jr. Leoncio Prado 125', 'laptop', 'HP', 'pantalla azul con cofigo de error 0xc0000001', 'pago en persona', 5, '2023-07-19', 1, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `DNI_usuario` int(11) NOT NULL,
  `nombres_usuario` varchar(50) NOT NULL,
  `apellidos_usuario` varchar(50) NOT NULL,
  `celular_usuario` int(11) NOT NULL,
  `correo_usuario` varchar(100) NOT NULL,
  `pass_usuario` varchar(50) NOT NULL,
  `direccion_usuario` varchar(100) NOT NULL,
  `fecha-registro-usuario` date NOT NULL,
  `ID_plank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`DNI_usuario`, `nombres_usuario`, `apellidos_usuario`, `celular_usuario`, `correo_usuario`, `pass_usuario`, `direccion_usuario`, `fecha-registro-usuario`, `ID_plank`) VALUES
(73991573, 'josh Grajam', 'falcon cabra', 914069125, 'jgcarwayfc@gmail.com', '123456789', 'Urb. El bosque Mz. C Lt. 4', '2023-07-06', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_cliente`),
  ADD KEY `ID_plank` (`ID_plank`);

--
-- Indices de la tabla `comentarios_reparacion`
--
ALTER TABLE `comentarios_reparacion`
  ADD PRIMARY KEY (`ID_comentario_reparacion`),
  ADD KEY `ID_cliente` (`ID_cliente`),
  ADD KEY `ID_reparacion` (`ID_reparacion`);

--
-- Indices de la tabla `comentario_desarrollo_web`
--
ALTER TABLE `comentario_desarrollo_web`
  ADD PRIMARY KEY (`ID_comentario_desarrollo_web`),
  ADD KEY `ID_desarrollo_web` (`ID_desarrollo_web`),
  ADD KEY `ID_cliente` (`ID_cliente`);

--
-- Indices de la tabla `comentario_instalacion`
--
ALTER TABLE `comentario_instalacion`
  ADD PRIMARY KEY (`ID_instalacion_reparacion`),
  ADD KEY `ID_instalacion` (`ID_instalacion`),
  ADD KEY `ID_cliente` (`ID_cliente`);

--
-- Indices de la tabla `desarrollo_web`
--
ALTER TABLE `desarrollo_web`
  ADD PRIMARY KEY (`ID_desarrollo_web`),
  ADD KEY `ID_cliente` (`ID_cliente`),
  ADD KEY `ID_paquetes_escogidos` (`ID_paquetes_escogidos`);

--
-- Indices de la tabla `escojer_paquetes`
--
ALTER TABLE `escojer_paquetes`
  ADD PRIMARY KEY (`ID_paquetes_escogidos`);

--
-- Indices de la tabla `estado_reparacion`
--
ALTER TABLE `estado_reparacion`
  ADD PRIMARY KEY (`ID_estado_reparacion`);

--
-- Indices de la tabla `instalacion`
--
ALTER TABLE `instalacion`
  ADD PRIMARY KEY (`ID_instalacion`),
  ADD KEY `ID_cliente` (`ID_cliente`);

--
-- Indices de la tabla `plank`
--
ALTER TABLE `plank`
  ADD PRIMARY KEY (`ID_plank`);

--
-- Indices de la tabla `reparacion`
--
ALTER TABLE `reparacion`
  ADD PRIMARY KEY (`ID_reparacion`),
  ADD KEY `ID_cliente` (`ID_cliente`),
  ADD KEY `ID_estado_reparacion` (`ID_estado_reparacion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`DNI_usuario`),
  ADD KEY `ID_plank` (`ID_plank`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `comentarios_reparacion`
--
ALTER TABLE `comentarios_reparacion`
  MODIFY `ID_comentario_reparacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comentario_desarrollo_web`
--
ALTER TABLE `comentario_desarrollo_web`
  MODIFY `ID_comentario_desarrollo_web` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comentario_instalacion`
--
ALTER TABLE `comentario_instalacion`
  MODIFY `ID_instalacion_reparacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `desarrollo_web`
--
ALTER TABLE `desarrollo_web`
  MODIFY `ID_desarrollo_web` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `escojer_paquetes`
--
ALTER TABLE `escojer_paquetes`
  MODIFY `ID_paquetes_escogidos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `instalacion`
--
ALTER TABLE `instalacion`
  MODIFY `ID_instalacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reparacion`
--
ALTER TABLE `reparacion`
  MODIFY `ID_reparacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`ID_plank`) REFERENCES `plank` (`ID_plank`);

--
-- Filtros para la tabla `comentarios_reparacion`
--
ALTER TABLE `comentarios_reparacion`
  ADD CONSTRAINT `comentarios_reparacion_ibfk_1` FOREIGN KEY (`ID_cliente`) REFERENCES `cliente` (`ID_cliente`),
  ADD CONSTRAINT `comentarios_reparacion_ibfk_2` FOREIGN KEY (`ID_reparacion`) REFERENCES `reparacion` (`ID_reparacion`);

--
-- Filtros para la tabla `comentario_desarrollo_web`
--
ALTER TABLE `comentario_desarrollo_web`
  ADD CONSTRAINT `comentario_desarrollo_web_ibfk_1` FOREIGN KEY (`ID_desarrollo_web`) REFERENCES `desarrollo_web` (`ID_desarrollo_web`),
  ADD CONSTRAINT `comentario_desarrollo_web_ibfk_2` FOREIGN KEY (`ID_cliente`) REFERENCES `cliente` (`ID_cliente`);

--
-- Filtros para la tabla `comentario_instalacion`
--
ALTER TABLE `comentario_instalacion`
  ADD CONSTRAINT `comentario_instalacion_ibfk_1` FOREIGN KEY (`ID_instalacion`) REFERENCES `instalacion` (`ID_instalacion`),
  ADD CONSTRAINT `comentario_instalacion_ibfk_2` FOREIGN KEY (`ID_cliente`) REFERENCES `cliente` (`ID_cliente`);

--
-- Filtros para la tabla `desarrollo_web`
--
ALTER TABLE `desarrollo_web`
  ADD CONSTRAINT `desarrollo_web_ibfk_1` FOREIGN KEY (`ID_cliente`) REFERENCES `cliente` (`ID_cliente`),
  ADD CONSTRAINT `desarrollo_web_ibfk_2` FOREIGN KEY (`ID_paquetes_escogidos`) REFERENCES `escojer_paquetes` (`ID_paquetes_escogidos`);

--
-- Filtros para la tabla `instalacion`
--
ALTER TABLE `instalacion`
  ADD CONSTRAINT `instalacion_ibfk_1` FOREIGN KEY (`ID_cliente`) REFERENCES `cliente` (`ID_cliente`);

--
-- Filtros para la tabla `reparacion`
--
ALTER TABLE `reparacion`
  ADD CONSTRAINT `reparacion_ibfk_1` FOREIGN KEY (`ID_cliente`) REFERENCES `cliente` (`ID_cliente`),
  ADD CONSTRAINT `reparacion_ibfk_2` FOREIGN KEY (`ID_estado_reparacion`) REFERENCES `estado_reparacion` (`ID_estado_reparacion`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`ID_plank`) REFERENCES `plank` (`ID_plank`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
