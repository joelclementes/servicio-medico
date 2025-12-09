-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2025 at 10:53 AM
-- Server version: 5.1.73
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `serviciomedico22`
--

-- --------------------------------------------------------

--
-- Table structure for table `catdepartamentos`
--

CREATE TABLE IF NOT EXISTS `catdepartamentos` (
  `idDepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `nombreDepartamento` varchar(200) DEFAULT NULL COMMENT '	',
  `extensionDepartamento` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`idDepartamento`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=129 ;

--
-- Dumping data for table `catdepartamentos`
--

INSERT INTO `catdepartamentos` (`nombreDepartamento`) VALUES
('Secretaría General'),
('Coordinación de Archivo, Biblioteca y Hemeroteca'),
('Oficina de Biblioteca'),
('Coordinación de Comunicación Social'),
('Coordinación de Investigaciones Legislativas'),
('Coordinación de Informática'),
('Oficina de Oficialía de Partes'),
('Oficina de Servicios Médicos'),
('Oficina de Seguridad'),
('Dirección del Centro de Estudios para la Igualdad de Género y los Derechos Humanos'),
('Secretaría de Servicios Legislativos'),
('Dirección de Asistencia Técnica Legislativa'),
('Departamento de Asistencia a Sesiones'),
('Departamento de Asistencia a Comisiones'),
('Dirección de Registro Legislativo y Publicaciones Oficiales'),
('Departamento de Registro Documental Legislativo'),
('Departamento de Diario de los Debates'),
('Secretaría de Serivicios Administrativos y Financieros'),
('Dirección de Tesorería'),
('Departamento de Finanzas'),
('Departamento de Programación y Presupuesto'),
('Departamento de Contabilidad'),
('Dirección de Recursos Humanos'),
('Departamento de Control de Personal'),
('Departamento de Nómina'),
('Departamento de Organización y Métodos'),
('Dirección de Recursos Materiales y Servicios Generales'),
('Departamento de Recursos Materiales'),
('Departamento de Servicios Generales'),
('Departamento de Adquisiciones'),
('Secretaría de Fiscalización'),
('Dirección de Auditoría y Revisión Financiera'),
('Departamento de Auditoría y Análisis de la Cuenta Pública'),
('Departamento de Capacitación, Asesoría, Revisión y Supervisión a Municipios'),
('Dirección de Normatividad Control y Seguimiento'),
('Departamento de Registro de Deuda Pública y Programas Institucionales'),
('Departamento de Responsabilidades Administrativas de Servidores Públicos'),
('Dirección de Servicios Jurídicos'),
('Departamento de Amparos'),
('Departamento de Fundo Legal'),
('Subdirección de Servicios Jurídicos'),
('Familiar Director (a)'),
('Visitante'),
('Área de diputados'),
('Limpieza'),
('Jardineria'),
('Cafetería'),
('Ayudantía'),
('Almacén'),
('Inventarios'),
('Servicio de fotocopiado'),
('Unidad de Transparencia'),
('Oficina del Sindicato'),
('Oficina de equidad y género'),
('Diputado'),
('JUCOPO'),
('Diputada'),
('Servicio Social '),
('Asistencia a sesiones'),
('Caja'),
('Asesores '),
('Diputados'),
('Amparos'),
('Normatividad '),
('Pendiente'),
('Gimnasio'),
('Prensa'),
('Familiar Diputado (a)'),
('Familiar Secretario'),
('Familiar Jefe (a) departamento'),
('Familiar (trabajador)'),
('Jefe Departamento de Amparos'),
('CONALEP'),
('Registro Civil'),
('Com. Social Grupo Morena'),
('Vice Coordinación'),
('Subcontralor'),
('Jefe Coordinación de Investigaciones Legislativas'),
('Secretaría de Fiscalización (Titular)'),
('Jefe Departamento de Control de Personal'),
('Contralor'),
('Contraloría'),
('Subcontraloría'),
('DIRECTOR DE NORMATIVIDAD'),
('?'),
('Capacitación a municipios'),
('Presidencia'),
('Jefe Depto. Control de Personal'),
('JEFE DEL DEPTO. DE CAPACITACIÓN A MUNICIPIOS'),
('PRENSA VISITANTE'),
('JEFA(E) ASISTENCIA LEGISLATIVA'),
('ASISTENCIA LEGISLATIVA');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
