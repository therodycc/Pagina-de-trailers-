-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2021 a las 23:53:00
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trailers`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `trailer_ID` int(11) NOT NULL,
  `Titulo` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Año` varchar(1000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Genero` varchar(1000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `LinkVideo` varchar(1000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `LinkPortada` varchar(2000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Descripcion` text COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MRG_MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelis`
--

CREATE TABLE `pelis` (
  `Id` int(11) NOT NULL,
  `titulo` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `year` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `genero` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_portada` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pelis`
--

INSERT INTO `pelis` (`Id`, `titulo`, `year`, `genero`, `link`, `link_portada`, `descripcion`) VALUES
(3, 'Avengers', '2015', 'ficcion', 'eOrNdBpGMv8', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcT4prgaAFROC5b20TABhsgF4eSeehjvRjJC7uud7yQ9QdkNU4sR', 'El director de la Agencia SHIELD decide reclutar a un equipo para salvar al mundo de un desastre casi seguro cuando un enemigo inesperado surge como una gran amenaza para la seguridad mundial.'),
(8, 'Point brake', '2015', 'Aventura', 'ncvFAm4kYCo', 'https://i.pinimg.com/564x/f5/85/9d/f5859d825cb2896a32e977d992ba35dc.jpg', 'Un agente del FBI se infiltra en una banda de deportistas de Ã©lite, practicantes de surf, de quienes se sospecha roban dinero y joyas que luego reparten entre los pobres. Sus superiores empiezan a pensar que el agente estÃ¡ involucrÃ¡ndose demasiado con sus nuevos amigos y temen que su lealtad al FBI peligre.'),
(11, ' Proyecto Power', '2020 ', 'Accion ', 'cdkDxCr4MDI', 'https://upload.wikimedia.org/wikipedia/en/thumb/b/b3/Project_Power_poster.jpeg/220px-Project_Power_poster.jpeg ', 'Un exsoldado se une a un policÃ­a para encontrar la fuente detrÃ¡s de una pÃ­ldora peligrosa que proporciona superpoderes temporales.'),
(12, 'Proyecto geminis', '2019', 'Accion', '6OONW4k1izs', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ5LgkCRNm45cY4I9O2o--x7CWggsM7Rt28vREOqJsHtEDq-1se', 'Henry Bogan, un asesino a sueldo, pretende retirarse porque se siente viejo. Sin embargo, hay alguien que no estÃ¡ dispuesto a permitÃ­rselo porque tiene la misiÃ³n de matarlo: un clon suyo mÃ¡s joven, mÃ¡s rÃ¡pido y mÃ¡s fuerte.'),
(15, 'Deadpool', '2016', 'Comedia', '0JnRdfiUMa8', 'https://i.pinimg.com/originals/93/8d/18/938d18240531d88614a306b8daba1934.jpg', 'Un exmercenario quien, tras haber sido sometido a un cruel experimento, adquiere el superpoder de sanar rÃ¡pidamente y pretende vengarse del hombre que destrozÃ³ su vida.'),
(25, ' Rapido y Furiosos 9', '2020', 'Accion ', 't3DpuQrBivU', 'https://mx.web.img3.acsta.net/pictures/20/01/30/19/25/2262982.jpg ', 'Dom Toretto tiene una vida tranquila fuera del radar, con Letty y su hijo, el pequeÃ±o Brian, pero saben que el peligro siempre acecha en su horizonte pacÃ­fico. Esta vez, esa amenaza obligarÃ¡ a Dom a confrontar los pecados de su pasado si va a salvar a los que mÃ¡s ama.'),
(26, 'After', '2019', 'Romance', 'n1tsEQ7-U7o', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSI_2LVEauGP9_Cs6V2KnFz8jliDnSXWwnA2RnZJTUtMaT7HNb6', 'After: aquí empieza todo/Sinopsis de la película\r\nTessa Young acaba de llegar a la universidad, y su estable y ordenada vida da un giro busco al conocer al misterioso Hardin Scott, cuyo pasado es algo oscuro. Aunque de entrada se odian, estos polos opuestos se unirán y nada volverá a ser como antes. Tendrán que enfrentarse amultiples pruebas como la inocencia y el descubrimiento sexual, para poder estar juntos.'),
(27, 'Titanes del Pacífico', '2013 ', 'Accion', '7buW4hfNT3c', 'https://www.hacerselacritica.com/wp-content/uploads/2013/07/pacific_rim_poster11.jpg', 'Hace mucho tiempo, legiones de criaturas monstruosas llamados Kaiju surgen del mar, llevando consigo una guerra. Para pelear a los Kaiju, la humanidad desarrolla robots gigantes llamados Jaegers, diseñados para ser piloteados por dos humanos. Sin embargo, ni los Jaegers son suficientes para vencer a los Kaiju, y la humanidad está al borde de la derrota. La última esperanza de la humanidad descansa en un expiloto fracasado, un aprendiz y un viejo y obsoleto Jaeger.'),
(28, 'Ohana: El Tesoro De Hawái ', '2021', 'Aventura', 'R7fE8ISPbFI', 'http://es.web.img2.acsta.net/pictures/21/01/11/10/26/3446335.jpg', 'Mientras veranean en Oahu, dos hermanos de Brooklyn se conectan con su ascendencia hawaiana y con su familia en una misión audaz para recuperar un tesoro perdido.'),
(29, 'Los imprevistos del amor', '2014', 'Romance', 'RSwwerKlUN4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZDFTH3OT3ZWRUMcADENM4euBMImKvwSMyG_0RoikURUjBroE2', 'Rosie y Alex son mejores amigos hasta que la familia se muda a Estados Unidos. Ellos se juegan todo para conservar vivos su amor y amistad al paso de los años y las millas.\r\n'),
(30, 'Tenet', '2020', 'Accion', 'QxhDXmb2O3k&t', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQnjma7Ln4ABL_yfitpE16o5-WmK0xR4qRUTh7Xwqw1HogdL1VV', 'Una acción épica que gira en torno al espionaje internacional, los viajes en el tiempo y la evolución, en la que un agente secreto debe prevenir la Tercera Guerra Mundial.'),
(31, 'Coma', '2019', 'Suspenso', '-f7f5DXHEL4', 'https://i.pinimg.com/originals/e4/5f/77/e45f772541ca21f211d7c1ebee539cb6.jpg', 'Un médico investiga un hospital de Boston donde los pacientes son asesinados para usar sus órganos en trasplantes.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `password`) VALUES
(1, 'admin', '$2y$10$pg.tZz4MVXrQDb33QyHjw.rpHA6JreGZ08Hlq8oHDMUDknHC82d.m'),
(2, 'Juan Ricardo', '$2y$10$BIMr9/Q0Pd9edNHroyUoz.XsXSP3Ij3b2vBSz2g6J1hZq5yY/205y'),
(3, 'therodycc', '$2y$10$7bJHHkuSRpmNzyocwsbsMOjeJYJLsbLW5D0SqnSmZF4tUvTJ9fK6e'),
(4, 'Rody', '$2y$10$VCOlWmt77aGjFWdiwivzI.HQYDBJzN4lcjPnd7RLJpKxNDueniQOG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`trailer_ID`);

--
-- Indices de la tabla `pelis`
--
ALTER TABLE `pelis`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `trailer_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pelis`
--
ALTER TABLE `pelis`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
