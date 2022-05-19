-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2019 a las 15:12:22
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `icor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_rol` int(10) NOT NULL,
  `Nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_rol`, `Nombre`) VALUES
(1, 'Administrador'),
(2, 'Vendedor'),
(3, 'Empleado'),
(4, 'Usuario'),
(5, 'provedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_co` int(11) NOT NULL,
  `nombre_usu` varchar(100) NOT NULL,
  `comentario` varchar(200) NOT NULL,
  `respuesta` varchar(200) NOT NULL DEFAULT '-',
  `id_esta` int(10) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_co`, `nombre_usu`, `comentario`, `respuesta`, `id_esta`) VALUES
(21, 'estiben armero', 'como me registro', '-', 1),
(22, 'camilo gonzales', 'como compro', '-', 1),
(23, 'William peñalosa', ' Como envio mi inquietud', '-', 2),
(24, 'Pedro ', 'jejejjejjee', '-', 2),
(25, 'brayan', 'Como puedo  ser de su empresa', '-', 1),
(26, 'Pedro ', 'como compro', '-', 1),
(27, 'Pedro ', 'como compro', 'hola ', 2),
(28, 'peñalosa', 'cerrare su negocio', '-', 1),
(29, 'kevin', 'como compro', '-', 2),
(30, 'daladier', 'Como puedo eliminar mi usuario', '-', 1),
(32, 'camilo', '125478963', '-', 2),
(33, 'juan melo', 'hecho para ayudar', '-', 1),
(34, 'camilo', 'Que bien es esta Pagina', '-', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_esta` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_esta`, `nombre`) VALUES
(1, 'autorizado'),
(2, 'No autorizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `Id_factura` int(10) NOT NULL,
  `Nombre_producto` varchar(10) NOT NULL,
  `cantidad_producto` int(10) NOT NULL,
  `Precio_producto` int(10) NOT NULL,
  `Id_producto` int(10) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Sub_total` int(10) NOT NULL,
  `Total` int(10) NOT NULL,
  `id_regis` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `documento` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`Id_factura`, `Nombre_producto`, `cantidad_producto`, `Precio_producto`, `Id_producto`, `Fecha`, `Sub_total`, `Total`, `id_regis`, `nombre`, `documento`) VALUES
(1, 'AAA', 14, 14000, 1, '2018-12-05', 2000, 16000, 1, 'Pedro', 101010),
(5, 'sillas', 2, 456456, 1, '2019-12-06', 25, 3, 1, 'Laura de lopez', 1001025789);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `Id_inve` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Cantidad` int(10) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Ubicacion` varchar(200) NOT NULL,
  `observacion` varchar(255) NOT NULL DEFAULT 'No hay',
  `id_esta` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`Id_inve`, `Nombre`, `Cantidad`, `Fecha`, `Ubicacion`, `observacion`, `id_esta`) VALUES
(1, 'sillas', 109, '2019-11-28', 'en el colegio', 'esta dañada en la parte inferior', 1),
(5, 'computadores', 3, '2019-11-27', 'en secretaria', '', 2),
(9, 'canastas', 2, '2019-12-10', 'el almacen C5', 'estan pintadas', 1),
(10, '0000', 0, '2019-12-10', '0000000', 'No hay', 1),
(11, '0000', 0, '2019-12-10', '0000000', 'No hay', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_pedido`
--

CREATE TABLE `orden_pedido` (
  `Id_pedido` int(10) NOT NULL,
  `Fecha_orden` date NOT NULL,
  `Descripcion_pedido` varchar(50) NOT NULL,
  `Id_empleado` int(10) NOT NULL,
  `Id_provedor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `orden_pedido`
--

INSERT INTO `orden_pedido` (`Id_pedido`, `Fecha_orden`, `Descripcion_pedido`, `Id_empleado`, `Id_provedor`) VALUES
(2, '2019-06-02', 'yolo', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id_prod` int(10) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Cantidad` int(10) NOT NULL,
  `Ubicacion` varchar(20) NOT NULL,
  `Id_pro` int(10) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `observacion` varchar(255) NOT NULL DEFAULT 'No hay observacion',
  `id_esta` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id_prod`, `Nombre`, `Cantidad`, `Ubicacion`, `Id_pro`, `imagen`, `observacion`, `id_esta`) VALUES
(1, 'Sillas', 0, 'No ahi', 1, '', 'Esta dañado', 1),
(5, 'camisas', 30, 'casillero 25', 1, '', 'no se habastecera mas de este producto', 2),
(6, 'Sillas', 42, 'casillero 256', 1, '', 'No hay observacion', 1),
(7, 'canastas', 633, 'en el piso 3', 1, '', 'No hay observacion', 1),
(13, 'Sillas', 85, 'en el almacen', 1, 'assets/imagessilla.jpg', 'No hay observacion', 1),
(14, 'tirilla', 70, 'en elaboracion', 1, 'assets/imagestirilla.jpg', 'No hay observacion', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `important` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `user` varchar(50) NOT NULL,
  `id_user` int(10) NOT NULL,
  `Tipo` varchar(100) NOT NULL,
  `Fecha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `title`, `descripcion`, `important`, `image`, `user`, `id_user`, `Tipo`, `Fecha`) VALUES
(15, 'Acueducto', 'Se informa a todos los residentes del conjunto que el dia de mañana se suspendera por motivo de reparaciones el acueducto, pasado mañana ya estara en correcto funcionamiento.', 'miperro', 'assets/171752171719por-que-nos-parece-que-los-perros-sonrien-una-historia-de-30-000-anos.jpg', 'Laura', 3, 'Noticia', ''),
(18, 'Tapetes', 'Se han gastado un total de $239.000 en tapetes ubicados a la entrada de el conjunto. ', 'Thelife', 'assets/00050131341vida.jpg', 'Laura 1', 3, 'Gastos', ''),
(19, 'Reunion', 'Mañana se organizara una reunion en la terraza, donde todos estan invitados, daremos lechona :)', 'Reunion', 'assets/121203importancia-de-comer-en-familia-500x334.jpg', 'William', 3, 'Noticia', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_regis` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `celular` int(20) NOT NULL,
  `direccion` varchar(255) NOT NULL DEFAULT 'No aplica',
  `Id_cargo` int(10) NOT NULL DEFAULT '4',
  `Id_doc` int(10) NOT NULL DEFAULT '1',
  `documento` int(20) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `observacion` varchar(255) NOT NULL DEFAULT 'No hay observacion',
  `fecha_li` varchar(255) NOT NULL DEFAULT '0000/000/00',
  `fecha_in` varchar(255) NOT NULL DEFAULT '0000-00-0',
  `imagen` varchar(255) NOT NULL DEFAULT 'assets/registro/descarga.png',
  `contrasena` varchar(255) NOT NULL,
  `id_esta` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_regis`, `nombre`, `apellidos`, `celular`, `direccion`, `Id_cargo`, `Id_doc`, `documento`, `correo`, `observacion`, `fecha_li`, `fecha_in`, `imagen`, `contrasena`, `id_esta`) VALUES
(1, 'admin', 'admin', 3131, '', 1, 1, 1010, 'admin@algo.com', 'no hay observacion', '2019/02/20', '2019/02/20', 'assets/registro/descarga.png', '$2y$10$RpxLvqfVtxfi5pjRPoh6Nub7hvdphkMc8/3uVyfs6Pcu/fOvDiqwe', 2),
(3, 'camilo', 'aguilar', 1418, '', 2, 1, 125, 'cami@algo.com', '2019/02/20', '2019/02/20', '2019/02/20', 'assets/registro/descarga.png', '$2y$10$0YARowNSQJbWMB4euLnFKe7zQjb6BOtVXfslJp4nPOC4slrwGJCLq', 1),
(4, 'dala', 'aguilar', 1452, '', 4, 1, 1010, 'dala@algo.com', 'No hay observacion', '2019/02/20', '2019/02/20', 'assets/registro/descarga.png', '$2y$10$uk/Jzm139/kb6qTOq8l1meRNDJHV02z0.lt1d2njkGGf88SxsnsJu', 2),
(14, 'admin', 'admin', 25336, 'No aplica', 3, 1, 1010, 'admin@algo.com', 'No hay observacion', '0000/000/00', '2019-12-12', 'assets/registro/person-male.png', '$2y$10$HERIEmPYmXEA5vad/QOKs.tPHS1PXFDYCi2rOJpu9VN0kfyOzK9fy', 1),
(15, 'Laura de lopez', 'yolo', 321456978, 'No aplica', 4, 1, 1010010, 'lala@algo.com', 'No hay observacion', '0000/000/00', '0000-00-0', 'assets/registro/descarga.png', '$2y$10$4hll1Ye8QGzy4HEAyuR0n.SVgiQlLX21fJx35Fv.GztvOJm6s7loS', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_documento`
--

CREATE TABLE `tipo_de_documento` (
  `Id_doc` int(10) NOT NULL,
  `Nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_de_documento`
--

INSERT INTO `tipo_de_documento` (`Id_doc`, `Nombre`) VALUES
(1, 'C.C'),
(2, 'C.E.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_co`),
  ADD KEY `id_esta` (`id_esta`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_esta`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`Id_factura`),
  ADD KEY `Id_empleado` (`id_regis`),
  ADD KEY `Id_producto` (`Id_producto`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`Id_inve`),
  ADD KEY `id_esta` (`id_esta`);

--
-- Indices de la tabla `orden_pedido`
--
ALTER TABLE `orden_pedido`
  ADD PRIMARY KEY (`Id_pedido`),
  ADD KEY `Id_provedor` (`Id_provedor`),
  ADD KEY `Id_empleado` (`Id_empleado`),
  ADD KEY `Id_empleado_2` (`Id_empleado`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id_prod`),
  ADD KEY `Id_provedor` (`Id_pro`),
  ADD KEY `id_esta` (`id_esta`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rol` (`id_user`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_regis`),
  ADD KEY `Id_cargo` (`Id_cargo`,`Id_doc`,`id_esta`),
  ADD KEY `Id_doc` (`Id_doc`),
  ADD KEY `id_esta` (`id_esta`);

--
-- Indices de la tabla `tipo_de_documento`
--
ALTER TABLE `tipo_de_documento`
  ADD PRIMARY KEY (`Id_doc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_co` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `Id_factura` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `Id_inve` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `orden_pedido`
--
ALTER TABLE `orden_pedido`
  MODIFY `Id_pedido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id_prod` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_regis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tipo_de_documento`
--
ALTER TABLE `tipo_de_documento`
  MODIFY `Id_doc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_esta`) REFERENCES `estado` (`id_esta`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_3` FOREIGN KEY (`Id_producto`) REFERENCES `producto` (`Id_prod`),
  ADD CONSTRAINT `factura_ibfk_4` FOREIGN KEY (`id_regis`) REFERENCES `registro` (`id_regis`);

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`id_esta`) REFERENCES `estado` (`id_esta`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_esta`) REFERENCES `estado` (`id_esta`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`id_esta`) REFERENCES `estado` (`id_esta`),
  ADD CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`Id_doc`) REFERENCES `tipo_de_documento` (`Id_doc`),
  ADD CONSTRAINT `registro_ibfk_3` FOREIGN KEY (`Id_cargo`) REFERENCES `cargo` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
