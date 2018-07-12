-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-07-2018 a las 02:36:19
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `escuela_gourmet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficios`
--

CREATE TABLE IF NOT EXISTS `beneficios` (
  `id_beneficios` int(11) NOT NULL AUTO_INCREMENT,
  `id_curso` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `icono` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id_beneficios`),
  KEY `id_curso` (`id_curso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `beneficios`
--

INSERT INTO `beneficios` (`id_beneficios`, `id_curso`, `tipo`, `icono`, `titulo`, `texto`) VALUES
(1, 1, 'grande', 'img/iconos/beneficios/cocteleria-1.png', 'RÁPIDA SALIDA LABORAL', 'En Escuela Gourmet te ofrecemos las mejores ofertas laborales a nivel nacional e internacional.'),
(2, 1, 'grande', 'img/iconos/beneficios/cocteleria-2.png', 'PASANTÍAS EN EL EXTERIOR', 'Vas a poder viajar al exterior, realizar pasantías como bartender y vivir la experiencia de seguir aprendiendo de otras culturas.'),
(3, 1, 'grande', 'img/iconos/beneficios/cocteleria-3.png', 'PRÁCTICAS GRATUITAS', 'Vení fuera del horario de cursada a practicar gratuitamente para convertirte en el mejor bartender.'),
(4, 1, 'chico', 'img/iconos/beneficios/cocteleria-4.png', 'SEMINARIOS GRATUITOS', 'Actualizate constantemente con nuestros seminarios ¡nadie te va a superar!'),
(6, 1, 'chico', 'img/iconos/beneficios/cocteleria-5.png', 'VISITAS A BARES', 'En el curso de barman te llevaremos a conocer los mejores bares de la Ciudad de Buenos Aires.'),
(7, 1, 'chico', 'img/iconos/beneficios/cocteleria-6.png', 'BEBIDAS Y EQUIPAMIENTO', 'Trabajamos con el mejor equipamiento del mercado y bebidas importadas de la mejor calidad.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE IF NOT EXISTS `clases` (
  `id_clase` int(11) NOT NULL AUTO_INCREMENT,
  `id_curso` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `icono` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id_clase`),
  KEY `id_curso` (`id_curso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id_clase`, `id_curso`, `nombre`, `icono`, `texto`) VALUES
(1, 1, 'Inicios de la coctelería', 'img/iconos/clases/bartender/curso-de-bartender-1.png', '<div class="titulo-descripcion-clases">CLASE 1</div><ul style="text-align: center; margin: 7% 0;"> 	<li style="margin-top: 2%;"><span style="font-weight: 400;">La Palabra Cocktail | La Primera Definición.</span></li><li><span style="font-weight: 400;">¿Qué es un Cocktail? | Breve Historia de la Coctelería.</span></li> 	<li>Higiene Personal y Apariencia | Bromatología e Higiene de manos.</li><li>Herramientas del Bar.</li><li>Cristalería y Normas de Manipulación.</li> 	<li>Técnicas y métodos de elaboración de cocktails.</li> 	<li>Manejo de botellas.</li><li>Dosificación | Jiggering y Free Pour | Medidas y equivalencias.</li><li>Técnica de vertido | Conteo de onza.</li></ul>'),
(2, 1, ' El bar y el bartender', 'img/iconos/clases/bartender/curso-de-bartender-2.png', '<div class="titulo-descripcion-clases">CLASE 2</div><ul style="text-align: center; margin: 7% 0;"><li style="margin-top: 2%;"><span style="font-weight: 400;">El bar | La barra | Frente de bar</span></li><li><span style="font-weight: 400;">Estación de trabajo | Tapa de barra</span></li><li>El bartender |Terminología</li><li>Mise and Place | Tarea de apertura y cierre</li><li>Tipos de cocktails</li><li>Pautas para el exámen final y aprobación del curso | Bases para el cocktail tesis.</li><li>Ejercicio de medidas y equivalencias</li></ul>'),
(3, 1, 'Preparaciones previas', 'img/iconos/clases/bartender/curso-de-bartender-3.png', '<div class="titulo-descripcion-clases">CLASE 3</div><ul style="text-align: center; margin: 7% 0;"><li style="margin-top: 2%;"><span style="font-weight: 400;">Fermentación | Destilación</span></li><li><span style="font-weight: 400;">Maceraciones e Infusiones</span></li><li>Compendio general de bebidas del Bar</li><li>Mixes, Mixers y Modificadores</li><li>La importancia del azúcar | Almíbares personalizados</li></ul>'),
(4, 1, 'Decoración de cocktails', 'img/iconos/clases/bartender/curso-de-bartender-4.png', '<div class="titulo-descripcion-clases">CLASE 4</div><ul style="text-align: center; margin: 7% 0;"><li style="margin-top: 2%;"><span style="font-weight: 400;">El Hielo y su Importancia</span></li><li><span style="font-weight: 400;">Garnish y Decoración de Cocktails</span></li><li>El labeado y el coronado</li><li>Clásicos de todos los tiempos</li></ul>'),
(5, 1, '¡Crea tu trago!', 'img/iconos/clases/bartender/curso-de-bartender-5.png', '<div class="titulo-descripcion-clases">CLASE 5</div><ul style="text-align: center; margin: 7% 0;"><li style="margin-top: 2%;">Gusto, Aroma y Sabor</li><li>Entrenamiento Sensorial | Aroma Taster</li><li>Construyendo un Trago</li><li>Concepto de Balance</li><li>Como Idear una Buena Tesis</li><li>Buena Coctelería</li></ul>'),
(6, 1, 'Coctelería mundial', 'img/iconos/clases/bartender/curso-de-bartender-6.png', '<div class="titulo-descripcion-clases">CLASE 6</div><ul style="text-align: center; margin: 7% 0;"><li style="margin-top: 2%;">Los Mejores bares de Argentina</li><li>Referentes de la Coctelería Mundial</li><li>Tendencias en la Coctelería</li></ul>'),
(7, 1, 'Servicio y clientes', 'img/iconos/clases/bartender/curso-de-bartender-7.png', '<div class="titulo-descripcion-clases">CLASE 7</div><ul style="text-align: center; margin: 7% 0;"><li style="margin-top: 2%;">¿Qué es Servicio?| Calidad de Servicio</li><li>Calidad y Excelencia | El Servicio como Profesión</li><li>Reglas de Excelencia y Cortesía</li><li>Lo Tangible e Intangible</li><li>El Cliente</li><li>Psicología de Clientes</li><li>Manejo de Quejas</li><li>Aroma Tester</li></ul>'),
(8, 1, 'Examen y tesis', 'img/iconos/clases/bartender/curso-de-bartender-8.png', '<div class="titulo-descripcion-clases">CLASE 8</div><ul style="text-align: center; margin: 7% 0;"><li style="margin-top: 2%;">Examen final teórico y presentación de la tesis</li></ul>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `icono` varchar(255) NOT NULL,
  `bg` varchar(255) NOT NULL,
  `h1` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `cantidad_cuotas` varchar(20) NOT NULL,
  `cuota` int(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `divisor` varchar(255) NOT NULL,
  `color` varchar(10) NOT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `tipo`, `area`, `title`, `icono`, `bg`, `h1`, `descripcion`, `cantidad_cuotas`, `cuota`, `video`, `divisor`, `color`) VALUES
(1, 'curso', 'cocteleria', 'Curso de Bartender', '', 'img/curso/curso-de-bartender.png', 'BARTENDER', 'El Curso de Bartender está diseñado para formar a los mejores profesionales en el arte de mezclar bebidas. Ya sea que quieras trabajar de esto o simplemente preparar los mejores cócteles para tus amigos, te brindaremos el curso más divertido y exigente del mercado.', '1 CUOTA', 1990, '<iframe  src="https://www.youtube.com/embed/4waHcgtRkWQ?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>', 'img/curso/bartender-separador.png', '#3facef'),
(2, 'curso', 'cafe', 'Curso de Barista', '', 'img/curso/curso-de-bartender.png', 'BARISTA', 'El Curso de Bartender está diseñado para formar a los mejores profesionales en el arte de mezclar bebidas. Ya sea que quieras trabajar de esto o simplemente preparar los mejores cócteles para tus amigos, te brindaremos el curso más divertido y exigente del mercado.', '1 CUOTA', 1990, 'https://youtu.be/-QCNM8iXzJM', 'img/curso/bartender-separador.png', '#b25a1b');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechas`
--

CREATE TABLE IF NOT EXISTS `fechas` (
  `id_fechas` int(11) NOT NULL AUTO_INCREMENT,
  `id_curso` int(11) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `horario` text NOT NULL,
  `duracion` text NOT NULL,
  `sena` int(11) NOT NULL,
  `cupo` int(11) NOT NULL,
  PRIMARY KEY (`id_fechas`),
  KEY `id_curso` (`id_curso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `fechas`
--

INSERT INTO `fechas` (`id_fechas`, `id_curso`, `fecha`, `horario`, `duracion`, `sena`, `cupo`) VALUES
(2, 1, '3 de agosto', 'Sábados de 10 a 15 hs.', '1 mes - 4 clases', 1000, 20),
(3, 1, '6 de julio', 'Miércoles y viernes de 10 a 13 hs.', '1 mes - 8 clases', 1000, 30),
(5, 1, '7 de agosto', 'Sábados de 15 a 20 hs', '1 mes - 4 clases', 1000, 40),
(6, 1, '20 de julio', 'Jueves y martes de 15 a 20 hs', '1 mes - 8 clases', 1000, 50),
(7, 2, '28 de junio de 2018', 'Sábados de 10 a 15 hs.', '1 mes - 8 clases', 1000, 10),
(8, 2, '28 de junio ', 'Sábados de 15 a 20 hs', '8 clases - 1 mes', 1000, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE IF NOT EXISTS `formulario` (
  `id_formulario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `curso` varchar(255) NOT NULL,
  PRIMARY KEY (`id_formulario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`id_formulario`, `nombre`, `email`, `telefono`, `curso`) VALUES
(5, '1', '1', '1', '1'),
(6, '1', '1', '1', '1'),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, 'Luisina FernÃ¡ndez Long', 'luisina.fl@hotmail.com', '1126455369', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` char(15) NOT NULL,
  `password` char(32) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dni` int(11) NOT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `password`, `nombre`, `apellido`, `email`, `dni`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrador', 'Administrador', 'admin@misitio.com.ar', 12345678),
('lu', 'lu', 'Administrador', 'Administrador', 'admin@misitio.com.ar', 12345678);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `beneficios`
--
ALTER TABLE `beneficios`
  ADD CONSTRAINT `beneficios_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);

--
-- Filtros para la tabla `clases`
--
ALTER TABLE `clases`
  ADD CONSTRAINT `clases_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);

--
-- Filtros para la tabla `fechas`
--
ALTER TABLE `fechas`
  ADD CONSTRAINT `fechas_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
