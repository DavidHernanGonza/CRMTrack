-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-07-2022 a las 08:34:33
-- Versión del servidor: 5.7.38
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `udevitco_crm_completo`
--
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(4) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `nom_cliente` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `departemento` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `id_genero` int(2) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono_casa` varchar(10) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `otro_felefono` varchar(10) NOT NULL,
  `comunicacion_preferido` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `youtube` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `linkedln` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `idioma_preferido` varchar(50) NOT NULL,
  `fuente_prospecto` varchar(50) NOT NULL,
  `estatus_prospecto` varchar(50) NOT NULL,
  `num_calle` varchar(50) NOT NULL,
  `depto_unidad` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `codigo_postal` int(5) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `agrupamiento` varchar(50) NOT NULL,
  `calificacion` float NOT NULL,
  `estatus_marital` varchar(50) NOT NULL,
  `hijos` int(2) NOT NULL,
  `notas_gen` varchar(500) NOT NULL,
  `nota_personal_contacto` varchar(500) NOT NULL,
  `contacto_equipo` varchar(25) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dato_gen`
--

CREATE TABLE `dato_gen` (
  `id` int(4) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `correoda` varchar(50) DEFAULT NULL,
  `fecha_contacto` Date DEFAULT NULL,
  `fecha_seguimiento` Date DEFAULT NULL,
  `comentario` varchar(50) DEFAULT NULL,
  `seguimiento` int(4) NOT NULL,
  `tarea` int(3) DEFAULT NULL,
  `statuss` int(2),
  `fuente_contacto` varchar(20) DEFAULT NULL,
  `productos` int(4) DEFAULT NULL,
  `status_cliente` varchar(30) NOT NULL,
  `dato_gene` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE `estatus` (
  `id_status` int(2) NOT NULL,
  `nom_status` varchar(20) NOT NULL,
  `color_status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero_sexo`
--
CREATE TABLE `genero_sexo` (
  `id` int(2) NOT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `correo` varchar(100) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `seguimineto` varchar(100) NOT NULL,
  `fechasegui` date NOT NULL,
  `tarea` varchar(100) NOT NULL,
  `fechatarea` date NOT NULL,
  `comentario` varchar(100) NOT NULL,
  `estatus_histo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lada`
--

CREATE TABLE `lada` (
  `id` varchar(10) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(4) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE `seguimiento` (
  `id_seguimiento` int(4) NOT NULL,
  `nom_seguimiento` varchar(50) NOT NULL,
  `icono_seg` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE `tarea` (
  `id_tarea` int(3) NOT NULL,
  `nom_tarea` varchar(50) NOT NULL,
  `icono` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(4) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD FOREIGN KEY (`id_genero`) REFERENCES genero_sexo(id);
--

-- Indices de la tabla `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`id_status`);

--
-- Indices de la tabla `lada`
--
ALTER TABLE `lada`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  ADD PRIMARY KEY (`id_seguimiento`);

--
-- Indices de la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD PRIMARY KEY (`id_tarea`);

--
-- Indices de la tabla `usuarios`
ALTER TABLE `usuarios`
	ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT de la tabla `estatus`
--
ALTER TABLE `estatus`
  MODIFY `id_status` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  MODIFY `id_seguimiento` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tarea`
--
ALTER TABLE `tarea`
  MODIFY `id_tarea` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Indices de la tabla `dato_gen`
--
ALTER TABLE `dato_gen`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `dato_gen` ADD FULLTEXT KEY `status_cliente` (`status_cliente`,`dato_gene`);
ALTER TABLE `dato_gen` ADD FULLTEXT KEY `dato_gene` (`dato_gene`);
ALTER TABLE `dato_gen` ADD FOREIGN KEY (`seguimiento`) references seguimiento(`id_seguimiento`);
ALTER TABLE `dato_gen` ADD FOREIGN KEY (`tarea`) references tarea(`id_tarea`);
ALTER TABLE `dato_gen` ADD FOREIGN KEY (`statuss`) references estatus(`id_status`);
ALTER TABLE `dato_gen` ADD FOREIGN KEY (`productos`) references producto(`id_producto`);
--

--
-- Índice de la tabla 'usuario'
--
ALTER TABLE `usuarios`
	ADD `nombre` varchar(20) NOT NULL,
	ADD `apellido_paterno` varchar(20) NOT NULL,
	ADD `apellido_materno` varchar(20) NOT NULL,
    ADD `curp` varchar(18) NOT NULL,
    ADD `telefono` varchar(10) NOT NULL;
--
-- --------------------------------------------------------


--
-- AUTO_INCREMENT de las tablas volcadas
--

-- 
-- AUTO_INCREMENT de la tabla 'usuarios'
ALTER TABLE `usuarios`
    MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5609;

--
-- AUTO_INCREMENT de la tabla `dato_gen`
--
ALTER TABLE `dato_gen`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=405;
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
