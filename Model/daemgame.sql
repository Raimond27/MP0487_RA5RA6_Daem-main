-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-05-2024 a las 00:14:47
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
-- Base de datos: `daemgame`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritocompra`
--

CREATE TABLE `carritocompra` (
  `IdCarrito` int(11) NOT NULL,
  `EstadoCarrito` varchar(20) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Precio` int(11) DEFAULT NULL,
  `Contrasenya` int(11) DEFAULT NULL,
  `IdUsuario` int(11) NOT NULL,
  `IdProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `carritocompra`
--

INSERT INTO `carritocompra` (`IdCarrito`, `EstadoCarrito`, `Cantidad`, `Precio`, `Contrasenya`, `IdUsuario`, `IdProducto`) VALUES
(1, 'En proceso', 2, 80, 12345, 1, 1),
(2, 'En proceso', 1, 55, 67890, 2, 2),
(3, 'Entregado', 3, 90, 54321, 3, 3),
(4, 'En camino', 1, 300, 98765, 4, 4),
(5, 'Entregado', 2, 30, 13579, 5, 5),
(6, 'En camino', 1, 50, 24680, 6, 6),
(7, 'En proceso', 2, 100, 11223, 7, 7),
(8, 'En proceso', 1, 45, 33445, 8, 8),
(9, 'Entregado', 3, 75, 55667, 9, 9),
(10, 'En camino', 2, 70, 77889, 10, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosenvio`
--

CREATE TABLE `datosenvio` (
  `IdEnvio` int(11) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `EstadoEnvio` varchar(20) DEFAULT NULL,
  `FechaEnvio` int(11) DEFAULT NULL,
  `Provincia` varchar(20) DEFAULT NULL,
  `Ciudad` varchar(20) DEFAULT NULL,
  `Direccion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datosenvio`
--

INSERT INTO `datosenvio` (`IdEnvio`, `Nombre`, `EstadoEnvio`, `FechaEnvio`, `Provincia`, `Ciudad`, `Direccion`) VALUES
(1, 'Envío 1', 'En proceso', 20240101, 'Madrid', 'Madrid', 'Calle A'),
(2, 'Envío 2', 'En camino', 20240102, 'Barcelona', 'Barcelona', 'Calle B'),
(3, 'Envío 3', 'Entregado', 20240103, 'Sevilla', 'Sevilla', 'Calle C'),
(4, 'Envío 4', 'En proceso', 20240104, 'Valencia', 'Valencia', 'Calle D'),
(5, 'Envío 5', 'En camino', 20240105, 'Zaragoza', 'Zaragoza', 'Calle E'),
(6, 'Envío 6', 'Entregado', 20240106, 'Málaga', 'Málaga', 'Calle F'),
(7, 'Envío 7', 'En proceso', 20240107, 'Alicante', 'Alicante', 'Calle G'),
(8, 'Envío 8', 'En camino', 20240108, 'Murcia', 'Murcia', 'Calle H'),
(9, 'Envío 9', 'Entregado', 20240109, 'Bilbao', 'Bilbao', 'Calle I'),
(10, 'Envío 10', 'En proceso', 20240110, 'Granada', 'Granada', 'Calle J');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `IdFormulario` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`IdFormulario`, `Nombre`, `Apellido`, `Email`) VALUES
(1, 'Juan', 'Pérez', 'juan.perez@email.com'),
(2, 'Ana', 'Gómez', 'ana.gomez@email.com'),
(3, 'Carlos', 'Martínez', 'carlos.martinez@email.com'),
(4, 'Sofía', 'López', 'sofia.lopez@email.com'),
(5, 'Daniel', 'Ramírez', 'daniel.ramirez@email.com'),
(6, 'María', 'Hernández', 'maria.hernandez@email.com'),
(7, 'Javier', 'Díaz', 'javier.diaz@email.com'),
(8, 'Laura', 'García', 'laura.garcia@email.com'),
(9, 'Pedro', 'Sánchez', 'pedro.sanchez@email.com'),
(10, 'Elena', 'Fernández', 'elena.fernandez@email.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodopago`
--

CREATE TABLE `metodopago` (
  `NombreTitular` varchar(20) DEFAULT NULL,
  `NumeroTarjeta` int(11) NOT NULL,
  `CVV` int(11) DEFAULT NULL,
  `FechaCaducidad` int(11) DEFAULT NULL,
  `IdUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `metodopago`
--

INSERT INTO `metodopago` (`NombreTitular`, `NumeroTarjeta`, `CVV`, `FechaCaducidad`, `IdUsuario`) VALUES
('Juan', 1, 123, 122025, 1),
('Ana', 2, 234, 52028, 2),
('Carlos', 3, 345, 92024, 3),
('Sofía', 4, 456, 72027, 4),
('Daniel', 5, 567, 112023, 5),
('María', 6, 678, 32026, 6),
('Javier', 7, 789, 82025, 7),
('Laura', 8, 890, 42028, 8),
('Pedro', 9, 901, 12024, 9),
('Elena', 10, 12, 62027, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plataforma`
--

CREATE TABLE `plataforma` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `plataforma`
--

INSERT INTO `plataforma` (`id`, `nombre`) VALUES
(1, 'Pc'),
(2, 'Playstation'),
(3, 'Xbox'),
(4, 'Nintendo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `IdProducto` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Stock` int(11) DEFAULT NULL,
  `Oferta` int(11) DEFAULT NULL,
  `Precio` decimal(11,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`IdProducto`, `Nombre`, `Descripcion`, `Stock`, `Oferta`, `Precio`) VALUES
(1, 'The Legend of Zelda:Breath of the wild', 'Un juego de aventuras y accion que sigue al heroe Link en su mision para derrotar al malvado Calamity Ganon', 50, 24, 16.20),
(2, 'Grand Theft Auto V', 'Un juego de mundo abierto que sigue la historia de tres criminales en la ficticia ciudad de Los Santos.', 30, 10, 55.00),
(3, 'Overwatch', 'Un shooter en primera persona multijugador donde los jugadores eligen entre una variedad de heroes con habilidades unicas', 20, 5, 30.00),
(4, 'Minecraft', 'Un juego de construccion y aventuras que permite a los jugadores explorar mundos generados aleatoriamente', 12, 2, 35.98),
(5, 'Red Dead Redemption ', 'Un juego de accion y aventuras en un mundo abierto ambientado en el salvaje oeste.', 100, 0, 15.99),
(6, 'Cyberpunk 2077', 'Un juego de rol de accion que se desarrolla en un futuro distopico en la ciudad de Night City.', 40, 0, 50.00),
(7, 'Super Mario Odyssey', 'n juego de plataformas en 3D donde los jugadores acompanyan a Mario en una aventura para rescatar a la Princesa Peach del malvado Bowser.', 5, 20, 500.00),
(8, 'Call of Duty: Warzon', 'Un juego de battle royale basado en la franquicia Call of Duty, donde los jugadores compiten en equipos para ser los ultimos en pie.', 25, 0, 45.00),
(9, 'Assassin\'s Creed Val', 'Un juego de accion y aventuras que transporta a los jugadores a la epoca de los vikingos, siguiendo la historia de Eivor.', 80, 0, 25.00),
(10, 'The Witcher 3: Wild ', 'Un juego de rol de accion ambientado en un mundo de fantasia abierto. Los jugadores asumen el papel de Geralt de Rivia, un cazador de monstruos mutado.', 35, 0, 35.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_plataforma`
--

CREATE TABLE `producto_plataforma` (
  `id_producto` int(10) NOT NULL,
  `id_plataforma` int(10) NOT NULL,
  `Imagen` varchar(50) NOT NULL,
  `Tendencia` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto_plataforma`
--

INSERT INTO `producto_plataforma` (`id_producto`, `id_plataforma`, `Imagen`, `Tendencia`) VALUES
(1, 4, '../View/img/products/nintendo/zeldaBreath.jpg', 1),
(2, 1, '../View/img/products/pc/grandTheautoV.jpg', 0),
(2, 2, '../View/img/products/playstation/grandTheautoV.jpg', 0),
(2, 3, '../View/img/products/xbox/grandTheautoV.jpg', 0),
(3, 1, '../View/img/products/pc/Overwatch.jpg', 0),
(3, 2, '../View/img/products/playstation/Overwatch.jpg', 0),
(3, 3, '../View/img/products/xbox/Overwatch.jpg', 0),
(3, 4, '../View/img/products/nintendo/Overwatch.jpg', 0),
(4, 1, '../View/img/products/pc/minecraft.jpeg', 1),
(4, 2, '../View/img/products/playstation/minecraft.jpg', 0),
(4, 3, '../View/img/products/xbox/minecraft.jpg', 0),
(4, 4, '../View/img/products/nintendo/minecraft.jpg', 0),
(5, 1, '../View/img/products/pc/reddead.jpg', 0),
(5, 2, '../View/img/products/playstation/reddead.jpg', 0),
(5, 3, '../View/img/products/xbox/reddead.jpeg', 1),
(6, 1, '../View/img/products/pc/cyber.jpg', 0),
(6, 2, '../View/img/products/playstation/cyber.jpg', 1),
(6, 3, '../View/img/products/xbox/cyber.jpg', 0),
(7, 4, '../View/img/products/nintendo/mario.jpg', 0),
(9, 1, '../View/img/products/pc/assasin\'s.png', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Contrasenya` varchar(50) NOT NULL,
  `Imagen` varchar(50) DEFAULT NULL,
  `Administrador` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `Nombre`, `Apellido`, `Email`, `Contrasenya`, `Imagen`, `Administrador`) VALUES
(1, 'Juan', 'Pérez', 'juan.perez@email.com', '12345', NULL, 0),
(2, 'Ana', 'Gómez', 'ana.gomez@email.com', '54321', NULL, 0),
(3, 'Carlos', 'Martínez', 'carlos.martinez@email.com', '1234wasd', NULL, 0),
(4, 'Sofía', 'López', 'sofia.lopez@email.com', 'Wasd1234', NULL, 0),
(5, 'Daniel', 'Ramírez', 'daniel.ramirez@email.com', 'dsaw4321', NULL, 0),
(6, 'María', 'Hernández', 'maria.hernandez@email.com', '4321Dsaw', NULL, 0),
(7, 'Javier', 'Díaz', 'javier.diaz@email.com', 'fdjdmw34', NULL, 0),
(8, 'Laura', 'García', 'laura.garcia@email.com', 'fi30scr5', NULL, 0),
(9, 'Pedro', 'Sánchez', 'pedro.sanchez@email.com', 'ksufe788', NULL, 0),
(10, 'Elena', 'Fernández', 'elena.fernandez@email.com', 'aldjwn23-5', NULL, 0),
(11, 'Pedro', 'Piquer', 'pedro1@gmail.com', 'pedr12345', NULL, 1),
(13, 'Prueba', 'prueba', 'aa@a.com', '1', '../View/img/profile-icon/1000946.png', 1),
(14, 'pedrito', 'palote', 'pe@pe.com', '1asdfghj', '', 1),
(15, 'ppp', 'pppp', 'pep@pep.com', 'pep12345', '../View/img/profile-icon/1000946.png', 1),
(16, 'rrr', 'rrr', 'r@r.com', 'rew12345', '../View/img/profile-icon/1000946.png', 1),
(17, 'Poksy', 'Carrera', 'pau.carrera@gmail.com', 'Pauxavier12345', '', 0),
(18, 'cambio', 'prueba', 'prueba@gmail.com', '2qwertyui', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioformulariohacer`
--

CREATE TABLE `usuarioformulariohacer` (
  `IdUsuario` int(11) NOT NULL,
  `IdFormulario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariometodopago`
--

CREATE TABLE `usuariometodopago` (
  `IdUsuario` int(11) DEFAULT NULL,
  `idMetodoPago` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioproductocomprar`
--

CREATE TABLE `usuarioproductocomprar` (
  `IdUsuario` int(11) NOT NULL,
  `IdProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarioproductocomprar`
--

INSERT INTO `usuarioproductocomprar` (`IdUsuario`, `IdProducto`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioproductovender`
--

CREATE TABLE `usuarioproductovender` (
  `IdUsuario` int(11) NOT NULL,
  `IdProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carritocompra`
--
ALTER TABLE `carritocompra`
  ADD PRIMARY KEY (`IdCarrito`),
  ADD KEY `IdUsuario` (`IdUsuario`),
  ADD KEY `IdProducto` (`IdProducto`);

--
-- Indices de la tabla `datosenvio`
--
ALTER TABLE `datosenvio`
  ADD PRIMARY KEY (`IdEnvio`);

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`IdFormulario`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indices de la tabla `metodopago`
--
ALTER TABLE `metodopago`
  ADD PRIMARY KEY (`NumeroTarjeta`),
  ADD KEY `IdUsuario` (`IdUsuario`);

--
-- Indices de la tabla `plataforma`
--
ALTER TABLE `plataforma`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`IdProducto`);

--
-- Indices de la tabla `producto_plataforma`
--
ALTER TABLE `producto_plataforma`
  ADD PRIMARY KEY (`id_producto`,`id_plataforma`),
  ADD KEY `id_plataforma` (`id_plataforma`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indices de la tabla `usuarioformulariohacer`
--
ALTER TABLE `usuarioformulariohacer`
  ADD KEY `IdUsuario` (`IdUsuario`),
  ADD KEY `IdFormulario` (`IdFormulario`);

--
-- Indices de la tabla `usuariometodopago`
--
ALTER TABLE `usuariometodopago`
  ADD KEY `IdUsuario` (`IdUsuario`),
  ADD KEY `idMetodoPago` (`idMetodoPago`);

--
-- Indices de la tabla `usuarioproductocomprar`
--
ALTER TABLE `usuarioproductocomprar`
  ADD KEY `IdUsuario` (`IdUsuario`),
  ADD KEY `IdProducto` (`IdProducto`);

--
-- Indices de la tabla `usuarioproductovender`
--
ALTER TABLE `usuarioproductovender`
  ADD KEY `IdUsuario` (`IdUsuario`),
  ADD KEY `IdProducto` (`IdProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carritocompra`
--
ALTER TABLE `carritocompra`
  MODIFY `IdCarrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `datosenvio`
--
ALTER TABLE `datosenvio`
  MODIFY `IdEnvio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `IdFormulario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `plataforma`
--
ALTER TABLE `plataforma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `IdProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carritocompra`
--
ALTER TABLE `carritocompra`
  ADD CONSTRAINT `carritocompra_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`),
  ADD CONSTRAINT `carritocompra_ibfk_2` FOREIGN KEY (`IdProducto`) REFERENCES `producto` (`IdProducto`);

--
-- Filtros para la tabla `metodopago`
--
ALTER TABLE `metodopago`
  ADD CONSTRAINT `metodopago_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`);

--
-- Filtros para la tabla `producto_plataforma`
--
ALTER TABLE `producto_plataforma`
  ADD CONSTRAINT `producto_plataforma_ibfk_1` FOREIGN KEY (`id_plataforma`) REFERENCES `plataforma` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_plataforma_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`IdProducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarioformulariohacer`
--
ALTER TABLE `usuarioformulariohacer`
  ADD CONSTRAINT `usuarioformulariohacer_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`),
  ADD CONSTRAINT `usuarioformulariohacer_ibfk_2` FOREIGN KEY (`IdFormulario`) REFERENCES `formulario` (`IdFormulario`);

--
-- Filtros para la tabla `usuariometodopago`
--
ALTER TABLE `usuariometodopago`
  ADD CONSTRAINT `usuariometodopago_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`),
  ADD CONSTRAINT `usuariometodopago_ibfk_2` FOREIGN KEY (`idMetodoPago`) REFERENCES `metodopago` (`NumeroTarjeta`);

--
-- Filtros para la tabla `usuarioproductocomprar`
--
ALTER TABLE `usuarioproductocomprar`
  ADD CONSTRAINT `usuarioproductocomprar_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`),
  ADD CONSTRAINT `usuarioproductocomprar_ibfk_2` FOREIGN KEY (`IdProducto`) REFERENCES `producto` (`IdProducto`);

--
-- Filtros para la tabla `usuarioproductovender`
--
ALTER TABLE `usuarioproductovender`
  ADD CONSTRAINT `usuarioproductovender_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`),
  ADD CONSTRAINT `usuarioproductovender_ibfk_2` FOREIGN KEY (`IdProducto`) REFERENCES `producto` (`IdProducto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
