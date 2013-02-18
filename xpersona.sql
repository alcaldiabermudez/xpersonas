/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : xpersona

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2013-01-30 09:33:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `centros`
-- ----------------------------
DROP TABLE IF EXISTS `centros`;
CREATE TABLE `centros` (
  `idCentro` int(11) NOT NULL AUTO_INCREMENT,
  `cenIdParroquia` int(11) NOT NULL,
  `cenNombre` varchar(200) NOT NULL,
  PRIMARY KEY (`idCentro`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of centros
-- ----------------------------
INSERT INTO `centros` VALUES ('1', '1', 'CENTRO DE EDUCACION INICIAL MARIA LUISA ORTIZ');
INSERT INTO `centros` VALUES ('2', '1', 'CENTRO DE EDUCACION JOSE ANGEL MOYA');
INSERT INTO `centros` VALUES ('3', '1', 'CENTRO EDUCACIÓN INICIAL GUAYACAN DE LAS FLORES LOCAL N° 03');
INSERT INTO `centros` VALUES ('4', '1', 'ESCUELA BÁSICA 9 DE ABRIL');
INSERT INTO `centros` VALUES ('5', '1', 'ESCUELA BASICA CONCENTRADA MIXTA LOS COCOS');
INSERT INTO `centros` VALUES ('6', '1', 'ESCUELA BÁSICA EL MUCO');
INSERT INTO `centros` VALUES ('7', '1', 'ESCUELA BÁSICA LA SOLEDAD');
INSERT INTO `centros` VALUES ('8', '1', 'ESCUELA BÁSICA PLAYA DE SAL');
INSERT INTO `centros` VALUES ('9', '1', 'ESCUELA BÁSICA QUEBRADA DE CARATA');
INSERT INTO `centros` VALUES ('10', '1', 'ESCUELA BOLIVARIANA EL LIRIO');
INSERT INTO `centros` VALUES ('11', '1', 'ESCUELA BOLIVARIANA GUAYACAN DE LAS FLORES');
INSERT INTO `centros` VALUES ('12', '1', 'ESCUELA BOLIVARIANA LAS AZUCENAS');
INSERT INTO `centros` VALUES ('13', '1', 'ESCUELA BOLIVARIANA MARIA RODRÍGUEZ DE VERA');
INSERT INTO `centros` VALUES ('14', '1', 'ESCUELA BOLIVARIANA PEDRO ELÍAS ARISTIGUIETA');
INSERT INTO `centros` VALUES ('15', '1', 'ESCUELA BOLIVARIANA  PUCHURUCO');
INSERT INTO `centros` VALUES ('16', '1', 'ESCUELA BOLIVARIANA RÍO SECO EL CHARCAL');
INSERT INTO `centros` VALUES ('17', '1', 'GIMNASIO CUBIERTO CHELO CABRERA');
INSERT INTO `centros` VALUES ('18', '1', 'INCE POLIVALENTE CARUPANO');
INSERT INTO `centros` VALUES ('19', '1', 'I.U.T. JACINTO NAVARRO VALLENILLA');
INSERT INTO `centros` VALUES ('20', '1', 'LICEO JOSÉ FRANCISCO BERMÚDEZ');
INSERT INTO `centros` VALUES ('21', '1', 'UNIDAD EDUCATIVA  1RO DE MAYO');
INSERT INTO `centros` VALUES ('22', '1', 'UNIDAD EDUCATIVA BOLIVARIANA JOSE ANTONIO RODRIGUEZ ABREU');
INSERT INTO `centros` VALUES ('23', '1', 'UNIDAD EDUCATIVA BOLIVARIANA PERIQUITO');
INSERT INTO `centros` VALUES ('24', '1', 'UNIDAD EDUCATIVA EL CHARCAL');
INSERT INTO `centros` VALUES ('25', '1', 'UNIDAD EDUCATIVA  JOSÉ JESÚS MARTÍNEZ MATA');
INSERT INTO `centros` VALUES ('26', '1', 'UNIDAD EDUCATIVA  JUANITA SALINA DE GAMBOA');
INSERT INTO `centros` VALUES ('27', '1', 'UNIDAD EDUCATIVA  SANTA ROSA DE LIMA');
INSERT INTO `centros` VALUES ('28', '1', 'UNIDAD EDUCATIVA  SIMÓN BOLÍVAR');
INSERT INTO `centros` VALUES ('29', '2', 'ESCUELA BÁSICA CHIPICHIPI');
INSERT INTO `centros` VALUES ('30', '2', 'ESCUELA BOLIVARIANA CRISTÓBAL COLÓN');
INSERT INTO `centros` VALUES ('31', '2', 'ESCUELA BOLIVARIANA CUSMA');
INSERT INTO `centros` VALUES ('32', '2', 'ESCUELA BOLIVARIANA TACOA');
INSERT INTO `centros` VALUES ('33', '2', 'FUNDACION CULTURAL ATENEO DE CURACHO');
INSERT INTO `centros` VALUES ('34', '2', 'INTERNADO JUDICIAL DE CARUPANO');
INSERT INTO `centros` VALUES ('35', '2', 'LICEO BÁSICO PEDRO JOSÉ SALAZAR');
INSERT INTO `centros` VALUES ('36', '2', 'LICEO BOLIVARIANO TAVERA ACOSTA');
INSERT INTO `centros` VALUES ('37', '2', 'LICEO PEDRO ARISMENDI BRITO');
INSERT INTO `centros` VALUES ('38', '2', 'LICEO SIMÓN RODRÍGUEZ');
INSERT INTO `centros` VALUES ('39', '2', 'UNIDAD EDUCATIVA BARRIO BOLIVAR');
INSERT INTO `centros` VALUES ('40', '2', 'UNIDAD EDUCATIVA ESTADAL EUSTOQUIA LUIGGI');
INSERT INTO `centros` VALUES ('41', '2', 'UNIDAD EDUCATIVA  MARIA REINA DE LÓPEZ');
INSERT INTO `centros` VALUES ('42', '2', 'UNIDAD EDUCATIVA PRIVADA DON ANDRÉS BELLO');
INSERT INTO `centros` VALUES ('43', '2', 'UNIDAD EDUCATIVA PRIVADA JOSÉ FRANCISCO BERMÚDEZ');
INSERT INTO `centros` VALUES ('44', '2', 'UNIDAD EDUCATIVA  PRIVADA SAN JOSE');
INSERT INTO `centros` VALUES ('45', '2', 'UNIDAD EDUCATIVA REPÚBLICA DE HAITÍ');
INSERT INTO `centros` VALUES ('46', '2', 'UNIDAD GERONTOLOGICA JOSE MANUEL ZUNIAGA.');
INSERT INTO `centros` VALUES ('47', '3', 'CENTRO DE EDUCACION INICIAL TIO PEDRO');
INSERT INTO `centros` VALUES ('48', '3', 'FUNDACIÓN DEPORTIVA ING. MANUEL RODRIGUEZ');
INSERT INTO `centros` VALUES ('49', '3', 'UNIDAD EDUCATIVA MANUEL MARIA URBANEJA');
INSERT INTO `centros` VALUES ('50', '4', 'CASA DE LA CULTURA JULIO MIRANDA');
INSERT INTO `centros` VALUES ('51', '4', 'CENTRO COOPERATIVO - EMPRESARIAL HATO ROMAR II');
INSERT INTO `centros` VALUES ('52', '4', 'CENTRO DE EDUCACION INICIAL GUATAPANARE');
INSERT INTO `centros` VALUES ('53', '4', 'CENTRO DE EDUCACION INICIAL VIRGEN DEL VALLE');
INSERT INTO `centros` VALUES ('54', '4', 'ESCUELA BASICA ESTADO ANZOATEGUI');
INSERT INTO `centros` VALUES ('55', '4', 'ESCUELA BASICA LA MARINA II');
INSERT INTO `centros` VALUES ('56', '4', 'ESCUELA BÁSICA LONDRES');
INSERT INTO `centros` VALUES ('57', '4', 'ESCUELA BOLIVARIANA PETRICA REYES DE QUILARQUE');
INSERT INTO `centros` VALUES ('58', '4', 'ESCUELA BOLIVARIANA PLAYA GRANDE');
INSERT INTO `centros` VALUES ('59', '4', 'ESCUELA BOLIVARIANA POZO COLORADO');
INSERT INTO `centros` VALUES ('60', '4', 'LICEO BOLIVARIANO JORGE ORDOSGOITI');
INSERT INTO `centros` VALUES ('61', '4', 'LICEO NACIONAL BOLIVARIANO CREACIÓN GUACA');
INSERT INTO `centros` VALUES ('62', '4', 'PREFECTURA PARROQUIA BOLIVAR');
INSERT INTO `centros` VALUES ('63', '4', 'UNIDAD EDUCATIVA   JOSÉ ANTONIO PÁEZ');
INSERT INTO `centros` VALUES ('64', '4', 'UNIDAD EDUCATIVA  JOSÉ FRANCISCO BERMÚDEZ');
INSERT INTO `centros` VALUES ('65', '4', 'UNIDAD EDUCATIVA JOSE MARIA VARGAS');
INSERT INTO `centros` VALUES ('66', '5', 'ESCUELA BÁSICA CANAIMA');
INSERT INTO `centros` VALUES ('67', '5', 'ESCUELA BOLIVARIANA EUSTOQUIA SOLEDAD LUIGGI');
INSERT INTO `centros` VALUES ('68', '5', 'ESCUELA BOLIVARIANA LA SIERRA');
INSERT INTO `centros` VALUES ('69', '5', 'ESCUELA BOLIVARIANA MACARAPANA');

-- ----------------------------
-- Table structure for `parroquias`
-- ----------------------------
DROP TABLE IF EXISTS `parroquias`;
CREATE TABLE `parroquias` (
  `idParroquia` int(11) NOT NULL AUTO_INCREMENT,
  `parNombre` varchar(200) NOT NULL,
  PRIMARY KEY (`idParroquia`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of parroquias
-- ----------------------------
INSERT INTO `parroquias` VALUES ('1', 'SANTA CATALINA');
INSERT INTO `parroquias` VALUES ('2', 'SANTA ROSA');
INSERT INTO `parroquias` VALUES ('3', 'SANTA TERESA');
INSERT INTO `parroquias` VALUES ('4', 'BOLIVAR');
INSERT INTO `parroquias` VALUES ('5', 'MACARAPANA');

-- ----------------------------
-- Table structure for `personas`
-- ----------------------------
DROP TABLE IF EXISTS `personas`;
CREATE TABLE `personas` (
  `idPersona` int(11) NOT NULL AUTO_INCREMENT,
  `perCedula` int(8) NOT NULL,
  `perNombres` varchar(50) NOT NULL,
  `perTelefono` varchar(11) NOT NULL,
  `perDireccion` text,
  `perMapa` text,
  `perDependencia` varchar(50) NOT NULL,
  `perPSUV` varchar(2) NOT NULL,
  `perComandito` varchar(2) NOT NULL,
  `perCNE` varchar(2) NOT NULL,
  `perIdParroquia` int(3) NOT NULL,
  `perIdCentro` int(3) NOT NULL,
  PRIMARY KEY (`idPersona`),
  UNIQUE KEY `perCedula` (`perCedula`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of personas
-- ----------------------------
INSERT INTO `personas` VALUES ('1', '21419632', 'Bryan Contreras', '04121911363', 'macarapana', '<iframe width=\"425\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.co.ve/?ie=UTF8&amp;ll=10.642966,-63.261993&amp;spn=0.103418,0.110378&amp;t=h&amp;z=13&amp;output=embed\"></iframe><br /><small><a href=\"https://maps.google.co.ve/?ie=UTF8&amp;ll=10.642966,-63.261993&amp;spn=0.103418,0.110378&amp;t=h&amp;z=13&amp;source=embed\" style=\"color:#0000FF;text-align:left\">Ver mapa más grande</a></small>', 'informatica', 'no', 'si', 'si', '5', '67');
INSERT INTO `personas` VALUES ('2', '324894', 'Bryan Contreras', '04121911363', 'macarapana', '<iframe width=\"425\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.co.ve/?ie=UTF8&amp;ll=10.642966,-63.261993&amp;spn=0.103418,0.110378&amp;t=h&amp;z=13&amp;output=embed\"></iframe><br /><small><a href=\"https://maps.google.co.ve/?ie=UTF8&amp;ll=10.642966,-63.261993&amp;spn=0.103418,0.110378&amp;t=h&amp;z=13&amp;source=embed\" style=\"color:#0000FF;text-align:left\">Ver mapa más grande</a></small>', 'informatica', 'no', 'si', 'si', '5', '0');
INSERT INTO `personas` VALUES ('3', '9148482', 'celina Contreras', '04164960412', 'macarapana el  ca..', '', 'casa', 'si', 'no', 'si', '5', '68');
