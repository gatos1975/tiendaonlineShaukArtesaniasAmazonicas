-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-08-2023 a las 20:35:39
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bisuteriakn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artesanos`
--

CREATE TABLE `artesanos` (
  `art_id` int(11) NOT NULL,
  `art_cedula` varchar(10) DEFAULT NULL,
  `art_nombres` varchar(60) DEFAULT NULL,
  `art_celular` varchar(13) DEFAULT NULL,
  `art_direccion` varchar(100) DEFAULT NULL,
  `art_email` varchar(100) DEFAULT NULL,
  `artesanoscol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artesanos_productos`
--

CREATE TABLE `artesanos_productos` (
  `artprod_id` int(11) NOT NULL,
  `artprod_idartesanos` int(11) DEFAULT NULL,
  `artprod_idproductos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `cat_id` int(11) NOT NULL,
  `cat_nombre` varchar(100) DEFAULT NULL,
  `cat_imagen` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`cat_id`, `cat_nombre`, `cat_imagen`) VALUES
(1, 'Collares', './assets/img/productos/collar2.jpg'),
(2, 'Pulseras', './assets/img/productos/pulseras.jpg'),
(3, 'Aretes', './assets/img/productos/aretes2.jpg'),
(4, 'Coronas', './assets/img/productos/cintillos.jpg'),
(5, 'Cinturones', './assets/img/productos/cinturones.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `cli_id` int(11) NOT NULL,
  `cli_cedula` varchar(15) NOT NULL,
  `cli_nombres` varchar(60) NOT NULL,
  `cli_email` varchar(100) NOT NULL,
  `cli_telefono` varchar(15) NOT NULL,
  `cli_clave` varchar(100) DEFAULT NULL,
  `cli_perfil` varchar(100) DEFAULT 'default.png',
  `cli_direccion` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`cli_id`, `cli_cedula`, `cli_nombres`, `cli_email`, `cli_telefono`, `cli_clave`, `cli_perfil`, `cli_direccion`) VALUES
(1, '1400373583', 'AYUY AGUANANCHI ANTONIO WILMER', 'wilmerayuy@gmail.com', '0999122053', '123', 'default.png', 'Parroquia Sevilla Don Bosco Barrio Centro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `detped_id` int(11) NOT NULL,
  `detped_pedidoid` int(11) DEFAULT NULL,
  `detped_prodid` int(11) DEFAULT NULL,
  `detped_cantidad` int(11) DEFAULT NULL,
  `detped_precioU` decimal(10,2) DEFAULT NULL,
  `detped_subtotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `ped_id` int(11) NOT NULL,
  `ped_idtransaccion` varchar(80) NOT NULL,
  `ped_fecha` datetime DEFAULT NULL,
  `ped_estado` varchar(45) DEFAULT NULL,
  `ped_clienteid` int(11) DEFAULT NULL,
  `ped_monto` decimal(10,2) DEFAULT NULL,
  `ped_proceso` enum('1','2','3','') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `pro_id` int(11) NOT NULL,
  `pro_nombre` varchar(100) DEFAULT NULL,
  `pro_descripcion` varchar(100) DEFAULT NULL,
  `pro_precio` float DEFAULT NULL,
  `pro_catid` int(11) DEFAULT NULL,
  `pro_imagen` varchar(150) NOT NULL,
  `pro_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`pro_id`, `pro_nombre`, `pro_descripcion`, `pro_precio`, `pro_catid`, `pro_imagen`, `pro_stock`) VALUES
(1, 'collar de semillas de mujer', 'varios modelos y colores', 35, 1, '../assets/img/productos/collar3.jpg', 10),
(2, 'Arete de mullos varios colores', 'diseños varios', 15, 3, './assets/img/productos/aretes1.jpg', 20),
(3, 'Cintillos para mujer', 'Diseño en mullos', 25, 4, './assets/img/productos/cintillos.jpg', 50),
(4, 'Pulsera de mullos', 'Diseños varios, para hombre o mujer.', 10.55, 2, './assets/img/productos/pulsera01.jpg', 22),
(5, 'Collar de mullos', 'Varios estilos y colores', 31.3, 1, './assets/img/productos/collar04.jpg', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Usu_id` int(11) NOT NULL,
  `usu_nombres` varchar(100) NOT NULL,
  `usu_apellidos` varchar(100) NOT NULL,
  `usu_correo` varchar(100) NOT NULL,
  `usu_clave` varchar(100) NOT NULL,
  `usu_perfil` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Usu_id`, `usu_nombres`, `usu_apellidos`, `usu_correo`, `usu_clave`, `usu_perfil`) VALUES
(1, 'Wilmer', 'Ayuy', 'wilmerayuy@gmail.com', '$2y$10$1VfVI/wChdYLAnrzG9C8y.B4f2ib0XK0QOY41/CFGwKmpIjot0eui', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artesanos`
--
ALTER TABLE `artesanos`
  ADD PRIMARY KEY (`art_id`),
  ADD UNIQUE KEY `prod_id_UNIQUE` (`art_id`);

--
-- Indices de la tabla `artesanos_productos`
--
ALTER TABLE `artesanos_productos`
  ADD PRIMARY KEY (`artprod_id`),
  ADD KEY `idart_idx_idx` (`artprod_idartesanos`),
  ADD KEY `idprod_idx_idx` (`artprod_idproductos`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `idcategoria_UNIQUE` (`cat_id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cli_id`),
  ADD UNIQUE KEY `cli_cedula_UNIQUE` (`cli_cedula`);

--
-- Indices de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD PRIMARY KEY (`detped_id`),
  ADD UNIQUE KEY `detped_id_UNIQUE` (`detped_id`),
  ADD KEY `detpedidoid_idx_idx` (`detped_pedidoid`),
  ADD KEY `detpedidoidprod_idx_idx` (`detped_prodid`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`ped_id`),
  ADD UNIQUE KEY `ped_id_UNIQUE` (`ped_id`),
  ADD KEY `clienteId_idx_idx` (`ped_clienteid`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`pro_id`),
  ADD UNIQUE KEY `pro_id_UNIQUE` (`pro_id`),
  ADD KEY `procatid_idx_idx` (`pro_catid`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artesanos`
--
ALTER TABLE `artesanos`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `artesanos_productos`
--
ALTER TABLE `artesanos_productos`
  MODIFY `artprod_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  MODIFY `detped_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `ped_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `artesanos_productos`
--
ALTER TABLE `artesanos_productos`
  ADD CONSTRAINT `idart_idx` FOREIGN KEY (`artprod_idartesanos`) REFERENCES `artesanos` (`art_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idprod_idx` FOREIGN KEY (`artprod_idproductos`) REFERENCES `productos` (`pro_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD CONSTRAINT `detpedidoid_idx` FOREIGN KEY (`detped_pedidoid`) REFERENCES `pedidos` (`ped_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detpedidoidprod_idx` FOREIGN KEY (`detped_prodid`) REFERENCES `productos` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `clienteId_idx` FOREIGN KEY (`ped_clienteid`) REFERENCES `clientes` (`cli_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`pro_catid`) REFERENCES `categorias` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
