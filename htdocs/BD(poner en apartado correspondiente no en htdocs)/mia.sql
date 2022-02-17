-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2020 a las 06:23:35
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adeudo`
--

CREATE TABLE `adeudo` (
  `nombre` varchar(50) NOT NULL,
  `fecha` varchar(16) NOT NULL,
  `adeudo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `adeudo`
--

INSERT INTO `adeudo` (`nombre`, `fecha`, `adeudo`) VALUES
('el canaca', '2020-06-18', '50000.00'),
('eladmin', '2020-06-16', '10.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antefam`
--

CREATE TABLE `antefam` (
  `expediente` varchar(20) NOT NULL,
  `cardio` varchar(6) NOT NULL,
  `hipert` varchar(6) NOT NULL,
  `cancer` varchar(6) NOT NULL,
  `diabet` varchar(6) NOT NULL,
  `asma` varchar(6) NOT NULL,
  `familiar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `antefam`
--

INSERT INTO `antefam` (`expediente`, `cardio`, `hipert`, `cancer`, `diabet`, `asma`, `familiar`) VALUES
('12345', 'si', 'si', 'si', 'si', 'si', 'todos'),
('12345678', 'si', 'no', 'no', 'si', 'no', 'x'),
('2222222', 'si', 'si', 'si', 'si', 'si', 'todos'),
('333333', 'no', 'no', 'no', 'no', 'no', 'q');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antepat`
--

CREATE TABLE `antepat` (
  `expediente` varchar(20) NOT NULL,
  `gastritis` varchar(6) NOT NULL,
  `ulcera` varchar(6) NOT NULL,
  `colitis` varchar(6) NOT NULL,
  `sinusitis` varchar(6) NOT NULL,
  `otitis` varchar(6) NOT NULL,
  `asma` varchar(6) NOT NULL,
  `tb` varchar(6) NOT NULL,
  `cardiopatias` varchar(6) NOT NULL,
  `hipertension` varchar(6) NOT NULL,
  `hipotension` varchar(6) NOT NULL,
  `fiebre` varchar(6) NOT NULL,
  `asv` varchar(6) NOT NULL,
  `pr` varchar(6) NOT NULL,
  `embarazo` varchar(6) NOT NULL,
  `menopausia` varchar(6) NOT NULL,
  `diabetes` varchar(6) NOT NULL,
  `at` varchar(6) NOT NULL,
  `anemia` varchar(6) NOT NULL,
  `transfusiones` varchar(6) NOT NULL,
  `tatuajes` varchar(6) NOT NULL,
  `neoplasias` varchar(6) NOT NULL,
  `epilepsia` varchar(6) NOT NULL,
  `lupus` varchar(6) NOT NULL,
  `estres` varchar(6) NOT NULL,
  `depresion` varchar(6) NOT NULL,
  `nomenc` varchar(40) NOT NULL,
  `medic` varchar(50) NOT NULL,
  `observaciones` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `antepat`
--

INSERT INTO `antepat` (`expediente`, `gastritis`, `ulcera`, `colitis`, `sinusitis`, `otitis`, `asma`, `tb`, `cardiopatias`, `hipertension`, `hipotension`, `fiebre`, `asv`, `pr`, `embarazo`, `menopausia`, `diabetes`, `at`, `anemia`, `transfusiones`, `tatuajes`, `neoplasias`, `epilepsia`, `lupus`, `estres`, `depresion`, `nomenc`, `medic`, `observaciones`) VALUES
('12345', 'si', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'si', 'no', 'no', 'no', 'no', 'no', 'no', 'si', 'no', 'no', 'no', 'si', 'si', 'ninguna', 'no', 'esta feo'),
('12345678', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'x', 'x', 'x'),
('2222222', 'si', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'si', 'no', 'no', 'no', 'no', 'no', 'no', 'si', 'no', 'no', 'no', 'si', 'si', 'ninguna', 'no', 'esta feo'),
('333333', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'q', 'q', 'q');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anteper`
--

CREATE TABLE `anteper` (
  `expediente` varchar(20) NOT NULL,
  `bebe` varchar(6) NOT NULL,
  `qued` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `anteper`
--

INSERT INTO `anteper` (`expediente`, `bebe`, `qued`) VALUES
('12345', 'si', 'de lo que haya'),
('12345678', 'si', 'x'),
('2222222', 'si', 'de lo que haya'),
('333333', 'si', 'q');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(16) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `hora` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `nombre`, `telefono`, `correo`, `fecha`, `hora`) VALUES
(9, 'aaaaaa', '4494494494', 'aaaa@aaaa.aa', '2020-07-02', '8:00am'),
(10, 'bbbbbbbbb', '449654654', 'bbbbb@bbbbb.bb', '2020-06-27', '7:00pm'),
(11, 'cccccccccccccc', '4494465569', 'cccc@ccccc.cc', '2020-06-19', '7:00pm'),
(12, 'iiiiiiiii', '49466454879', 'iiiiiiiiii@iiiiii.ii', '2020-06-15', '6:00pm'),
(13, 'wwwwwwwww', '1585478795', 'wwwww@ww.ww', '2020-06-16', '4:00pm'),
(14, 'uuuuuuuu', '12341542542', 'uuuu@uuuu.uu', '2020-06-17', '8:00am');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exaesto`
--

CREATE TABLE `exaesto` (
  `expediente` varchar(20) NOT NULL,
  `consulta` varchar(50) NOT NULL,
  `labios` varchar(6) NOT NULL,
  `carrillos` varchar(6) NOT NULL,
  `paladar` varchar(6) NOT NULL,
  `orofaringe` varchar(6) NOT NULL,
  `lengua` varchar(6) NOT NULL,
  `pb` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `exaesto`
--

INSERT INTO `exaesto` (`expediente`, `consulta`, `labios`, `carrillos`, `paladar`, `orofaringe`, `lengua`, `pb`) VALUES
('12345', 'muelas', 'si', 'si', 'si', 'si', 'si', 'si'),
('12345678', 'x', 'si', 'no', 'si', 'no', 'no', 'no'),
('2222222', 'muelas', 'si', 'si', 'si', 'si', 'si', 'si'),
('333333', 'q', 'no', 'no', 'no', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infopersonal`
--

CREATE TABLE `infopersonal` (
  `expediente` varchar(30) NOT NULL,
  `fecha` varchar(16) NOT NULL,
  `a_paterno` varchar(20) NOT NULL,
  `a_materno` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `domicilio` varchar(25) NOT NULL,
  `colonia` varchar(25) NOT NULL,
  `tel1` varchar(16) NOT NULL,
  `poblacion` varchar(30) NOT NULL,
  `ocupacion` varchar(30) NOT NULL,
  `edad` varchar(3) NOT NULL,
  `edocivil` varchar(16) NOT NULL,
  `escolaridad` varchar(25) NOT NULL,
  `perres` varchar(50) NOT NULL,
  `tel2` varchar(16) NOT NULL,
  `insaf` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `infopersonal`
--

INSERT INTO `infopersonal` (`expediente`, `fecha`, `a_paterno`, `a_materno`, `nombre`, `domicilio`, `colonia`, `tel1`, `poblacion`, `ocupacion`, `edad`, `edocivil`, `escolaridad`, `perres`, `tel2`, `insaf`) VALUES
('12345', '2020-06-16', 'Lechuga', 'Nieto', 'Juanito', 'por alla', 'ahi', '123456789', 'uno', 'nada', '19', 'soltero', 'primaria', 'no', '123456789', 'imss'),
('12345678', '2020-06-17', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x'),
('2222222', '2020-06-16', 'Lechuga', 'Nieto', 'Juanito', 'por alla', 'ahi', '123456789', 'uno', 'nada', '19', 'soltero', 'primaria', 'no', '123456789', 'imss'),
('333333', '2020-06-26', 'q', 'qq', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `odontograma`
--

CREATE TABLE `odontograma` (
  `expediente` varchar(20) NOT NULL,
  `opden` varchar(30) NOT NULL,
  `ppr` varchar(6) NOT NULL,
  `exd` varchar(30) NOT NULL,
  `pt` varchar(6) NOT NULL,
  `endo` varchar(30) NOT NULL,
  `per` varchar(6) NOT NULL,
  `pf` varchar(30) NOT NULL,
  `inte` varchar(6) NOT NULL,
  `cir` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `odontograma`
--

INSERT INTO `odontograma` (`expediente`, `opden`, `ppr`, `exd`, `pt`, `endo`, `per`, `pf`, `inte`, `cir`) VALUES
('12345', 'no', 'no', 'no', 'no', 'no', 'no', '', 'no', ''),
('12345678', 'x', 'si', 'x', 'no', 'x', 'no', 'x', 'no', 'x'),
('2222222', 'no', 'no', 'no', 'no', 'no', 'no', '', 'no', ''),
('333333', 'q', 'no', 'q', 'no', 'q', 'no', 'q', 'si', 'q');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resumen`
--

CREATE TABLE `resumen` (
  `expediente` varchar(20) NOT NULL,
  `hiperten` varchar(20) NOT NULL,
  `diabetes` varchar(20) NOT NULL,
  `hepatitis` varchar(20) NOT NULL,
  `alergias` varchar(50) NOT NULL,
  `inmunosuprimido` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `resumen`
--

INSERT INTO `resumen` (`expediente`, `hiperten`, `diabetes`, `hepatitis`, `alergias`, `inmunosuprimido`) VALUES
('12345', 'no', 'no', 'no', 'no', 'no'),
('12345678', 'x', 'x', 'x', 'x', 'x'),
('2222222', 'no', 'no', 'no', 'no', 'no'),
('333333', 'q', 'q', 'q', 'q', 'q');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `signosvitales`
--

CREATE TABLE `signosvitales` (
  `expediente` varchar(20) NOT NULL,
  `peso` varchar(8) NOT NULL,
  `pulso` varchar(8) NOT NULL,
  `talla` varchar(8) NOT NULL,
  `fr` varchar(8) NOT NULL,
  `ta` varchar(8) NOT NULL,
  `temp` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `signosvitales`
--

INSERT INTO `signosvitales` (`expediente`, `peso`, `pulso`, `talla`, `fr`, `ta`, `temp`) VALUES
('12345', '68', '73', 'g', 'si', 'no', '26°'),
('12345678', 'x', 'x', 'x', 'x', 'x', 'x'),
('2222222', '68', '73', 'g', 'si', 'no', '26°'),
('333333', 'q', 'q', 'q', 'q', 'q', 'q');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `superusuario`
--

CREATE TABLE `superusuario` (
  `user` varchar(40) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `superusuario`
--

INSERT INTO `superusuario` (`user`, `pass`, `nombre`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adeudo`
--
ALTER TABLE `adeudo`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `antefam`
--
ALTER TABLE `antefam`
  ADD PRIMARY KEY (`expediente`);

--
-- Indices de la tabla `antepat`
--
ALTER TABLE `antepat`
  ADD PRIMARY KEY (`expediente`);

--
-- Indices de la tabla `anteper`
--
ALTER TABLE `anteper`
  ADD PRIMARY KEY (`expediente`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `exaesto`
--
ALTER TABLE `exaesto`
  ADD PRIMARY KEY (`expediente`);

--
-- Indices de la tabla `infopersonal`
--
ALTER TABLE `infopersonal`
  ADD PRIMARY KEY (`expediente`);

--
-- Indices de la tabla `odontograma`
--
ALTER TABLE `odontograma`
  ADD PRIMARY KEY (`expediente`);

--
-- Indices de la tabla `resumen`
--
ALTER TABLE `resumen`
  ADD PRIMARY KEY (`expediente`);

--
-- Indices de la tabla `signosvitales`
--
ALTER TABLE `signosvitales`
  ADD PRIMARY KEY (`expediente`);

--
-- Indices de la tabla `superusuario`
--
ALTER TABLE `superusuario`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
