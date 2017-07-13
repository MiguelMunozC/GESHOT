-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 13, 2017 at 05:19 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geshot`
--

-- --------------------------------------------------------

--
-- Table structure for table `estado_habitacion`
--

CREATE TABLE `estado_habitacion` (
  `ID_estado_habitacion` int(255) NOT NULL,
  `nombre_estado` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estado_habitacion`
--

INSERT INTO `estado_habitacion` (`ID_estado_habitacion`, `nombre_estado`, `descripcion`) VALUES
(1, 'Disponible', 'Habitación lista para ser usada.'),
(2, 'Ocupada', 'Habitación no disponible.'),
(3, 'Mantención', 'Habitación en mantención.'),
(4, 'Reservada', 'Habitación Reservada.');

-- --------------------------------------------------------

--
-- Table structure for table `habitaciones`
--

CREATE TABLE `habitaciones` (
  `ID_habitacion` int(100) NOT NULL,
  `numero_pieza` int(100) NOT NULL,
  `piso_habitacion` int(100) NOT NULL,
  `ID_estado_habitacion` int(100) NOT NULL,
  `precio_dia` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `habitaciones`
--

INSERT INTO `habitaciones` (`ID_habitacion`, `numero_pieza`, `piso_habitacion`, `ID_estado_habitacion`, `precio_dia`) VALUES
(1, 101, 1, 1, 20000),
(2, 102, 1, 2, 20000),
(3, 103, 1, 1, 20000),
(4, 201, 2, 3, 20000),
(5, 202, 2, 4, 20000),
(6, 203, 2, 1, 20000),
(7, 301, 3, 2, 20000),
(8, 302, 3, 3, 20000),
(9, 303, 3, 1, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `huespedes`
--

CREATE TABLE `huespedes` (
  `ID_huesped` int(100) NOT NULL,
  `nombre_huesped` varchar(100) NOT NULL,
  `apellido_huesped` varchar(100) NOT NULL,
  `DNI` int(100) NOT NULL,
  `nacionalidad` varchar(100) NOT NULL,
  `domicilio` varchar(100) DEFAULT NULL,
  `ocupacion` varchar(100) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `email_huesped` varchar(100) NOT NULL,
  `ID_habitacion` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `huespedes`
--

INSERT INTO `huespedes` (`ID_huesped`, `nombre_huesped`, `apellido_huesped`, `DNI`, `nacionalidad`, `domicilio`, `ocupacion`, `fecha_nacimiento`, `email_huesped`, `ID_habitacion`) VALUES
(1, 'Pedro', 'Perez', 123, 'Chileno', NULL, NULL, '1995-04-23', 'asda@asdas.asd', 3),
(2, 'Juan', 'Junoasd', 12345, 'Chileno', NULL, NULL, '1997-12-02', 'asda2@asdas.asd', 2),
(3, 'Diego', 'Paz', 123666, 'Chileno', NULL, NULL, '1995-04-12', 'asda3@asdas.asd', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registro`
--

CREATE TABLE `registro` (
  `ID_registro` int(100) NOT NULL,
  `ID_huesped` int(100) NOT NULL,
  `apellido_huesped` varchar(100) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date DEFAULT NULL,
  `costo_total` int(255) NOT NULL DEFAULT '0',
  `ID_habitacion` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `ID_rol` int(100) NOT NULL,
  `nombre_rol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`ID_rol`, `nombre_rol`) VALUES
(1, 'Admin'),
(2, 'Recepcionista');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_usuario` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `ID_rol` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`ID_usuario`, `username`, `email`, `pass`, `ID_rol`) VALUES
(3, 'Admin', 'admin@geshot.com', 'admin', 1),
(4, 'Fernando', 'fernando.riffo2016@twk.cl', '1234', 2),
(5, 'Miguel', 'miguel.munoz2016@twk.cl', '1234', 2),
(6, 'Diego', 'diego.hernandez2016@twk.cl', '1234', 2),
(7, 'Rodrigo', 'rodrigo.molina2016@twk.cl', '1234', 2),
(8, 'Gustavo', 'gustavo.perez2016@twk.cl', '1234', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estado_habitacion`
--
ALTER TABLE `estado_habitacion`
  ADD PRIMARY KEY (`ID_estado_habitacion`);

--
-- Indexes for table `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`ID_habitacion`),
  ADD KEY `fk_ID_estado_habitacion` (`ID_estado_habitacion`);

--
-- Indexes for table `huespedes`
--
ALTER TABLE `huespedes`
  ADD PRIMARY KEY (`ID_huesped`),
  ADD KEY `fk_ID_habitacion2` (`ID_habitacion`);

--
-- Indexes for table `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`ID_registro`),
  ADD KEY `fk_ID_huesped` (`ID_huesped`),
  ADD KEY `fk_ID_habitacion` (`ID_habitacion`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID_rol`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_usuario`),
  ADD KEY `fk_ID_rol` (`ID_rol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estado_habitacion`
--
ALTER TABLE `estado_habitacion`
  MODIFY `ID_estado_habitacion` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `habitaciones`
--
ALTER TABLE `habitaciones`
  MODIFY `ID_habitacion` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `huespedes`
--
ALTER TABLE `huespedes`
  MODIFY `ID_huesped` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `registro`
--
ALTER TABLE `registro`
  MODIFY `ID_registro` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `ID_rol` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD CONSTRAINT `fk_ID_estado_habitacion` FOREIGN KEY (`ID_estado_habitacion`) REFERENCES `estado_habitacion` (`ID_estado_habitacion`) ON UPDATE CASCADE;

--
-- Constraints for table `huespedes`
--
ALTER TABLE `huespedes`
  ADD CONSTRAINT `fk_ID_habitacion2` FOREIGN KEY (`ID_habitacion`) REFERENCES `habitaciones` (`ID_habitacion`) ON UPDATE CASCADE;

--
-- Constraints for table `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `fk_ID_habitacion` FOREIGN KEY (`ID_habitacion`) REFERENCES `habitaciones` (`ID_habitacion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ID_huesped` FOREIGN KEY (`ID_huesped`) REFERENCES `huespedes` (`ID_huesped`) ON UPDATE CASCADE;

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_ID_rol` FOREIGN KEY (`ID_rol`) REFERENCES `roles` (`ID_rol`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
