-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2019 a las 11:55:31
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `greentownrestaurant`
--
CREATE DATABASE IF NOT EXISTS `greentownrestaurant` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `greentownrestaurant`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bill`
--

CREATE TABLE `bill` (
  `ID` varchar(6) NOT NULL,
  `BookingID` varchar(4) NOT NULL,
  `TotalPrice` double(6,2) NOT NULL,
  `Status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bill`
--

INSERT INTO `bill` (`ID`, `BookingID`, `TotalPrice`, `Status`) VALUES
('21q2un', '1fyd', 0.00, 'not'),
('kql74i', 'lzxz', 37.50, 'pay');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `booking`
--

CREATE TABLE `booking` (
  `ID` varchar(4) NOT NULL,
  `WaiterID` varchar(6) NOT NULL,
  `TableNumber` int(1) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Hour` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `booking`
--

INSERT INTO `booking` (`ID`, `WaiterID`, `TableNumber`, `FullName`, `Hour`) VALUES
('1fyd', 'JaLa01', 6, 'Intento Final', '16-06 11:48'),
('lzxz', 'JaLa01', 2, 'Sir George', '14-06 17:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consuption`
--

CREATE TABLE `consuption` (
  `ID` varchar(8) NOT NULL,
  `BookingID` varchar(6) NOT NULL,
  `PlateID` varchar(2) NOT NULL,
  `State` varchar(6) DEFAULT NULL,
  `Hour` varchar(8) NOT NULL,
  `Day` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `consuption`
--

INSERT INTO `consuption` (`ID`, `BookingID`, `PlateID`, `State`, `Hour`, `Day`) VALUES
('0r5dgy', '1fyd', 'E3', 'cooked', '11:48:07', '16/06/19'),
('26q4w6', '1fyd', 'S4', 'cooked', '11:48:11', '16/06/19'),
('4ldvbo', '1fyd', 'X4', 'cooked', '11:48:16', '16/06/19'),
('5j7ghf', '1fyd', 'E5', 'cooked', '11:48:07', '16/06/19'),
('7k53oa', '1fyd', 'V4', 'cooked', '11:48:13', '16/06/19'),
('l09tp4', 'lzxz', 'E2', 'cooked', '05:41:42', '14/06/19'),
('lhb23b', '1fyd', 'M2', 'cooked', '11:48:10', '16/06/19'),
('lq8io8', 'lzxz', 'V3', 'cooked', '05:41:48', '14/06/19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employee`
--

CREATE TABLE `employee` (
  `ID` varchar(6) NOT NULL,
  `Pass` varchar(8) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Surname` varchar(40) NOT NULL,
  `DNI` varchar(9) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `IBAN` varchar(4) NOT NULL,
  `CCC` varchar(20) NOT NULL,
  `Post` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `employee`
--

INSERT INTO `employee` (`ID`, `Pass`, `Name`, `Surname`, `DNI`, `Address`, `IBAN`, `CCC`, `Post`, `Email`, `Phone`) VALUES
('JaLa01', 'asd123', 'Jackson', 'Langley', '88662814E', '219 Otaka Street, Hurdon, New Plymouth 4310 ', 'ES61', '30178593385008781330', 'Chef', 'jacksonlangley@mail.com', 654654654),
('JeAs05', 'asd123', 'Jeremy', 'Aspinall', '00839122J', '230 Short Lane, Blagdon, New Plymouth 4310 ', 'ES35', '31135235121359717720', 'Waiter', 'jeremyaspinall@mail.com', 654987321),
('LaBo04', 'asd123', 'Laura', 'Bowes', '52710456E', '41 Gilligan Close, Putiki, Wanganui 4500 ', 'ES50', '01360665350036996047', 'Waitress', 'laurabowes@mail.com', 654231987),
('PiEb02', 'asd123', 'Piper', 'Ebsworth', '22907756D', '205 Herekino Street, Bishopdale, Christchurch 8053', 'ES72', '20424264349376452576', 'Meter', 'piperebsworth@mail.com', 666555444),
('SaBa03', 'asd123', 'Savannah', 'Badcoe', '06873391W', '97 Beaumaris Way, Takanini, Manukau 2112', 'ES39', '30954607401561210711', 'Scullion', 'savannahbadcoe@mail.com', 666555666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opinion`
--

CREATE TABLE `opinion` (
  `BookingID` varchar(4) NOT NULL,
  `Text` varchar(500) NOT NULL,
  `Points` double(2,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plates`
--

CREATE TABLE `plates` (
  `ID` varchar(2) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` double(4,2) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plates`
--

INSERT INTO `plates` (`ID`, `Name`, `Price`, `Quantity`) VALUES
('D1', 'Vegan Chocolate Cupcake', 7.00, 19),
('D2', 'Peanut Butter and Chocolate Big Cookie', 7.00, 12),
('D3', 'Vegan Strawberry Cheesecake', 8.00, 7),
('D4', 'Carrot Pie', 6.00, 16),
('D5', 'Apple Pie', 6.00, 14),
('D6', 'Chocolate Chip Banana Bread', 7.50, 21),
('E1', 'Ceasar Salada', 14.00, 16),
('E2', 'Fruit and Vegetables Salad', 14.50, 7),
('E3', 'Gazpacho', 8.00, 14),
('E4', 'Zucchini Tots', 12.00, 19),
('E5', 'Vegan \"Quesadilla\"', 16.00, 4),
('E6', 'Potato Chips', 10.00, 25),
('M1', 'Thai Citrus Tofu Kebabs', 14.00, 12),
('M2', 'Fried Tofu', 12.50, 8),
('M3', 'Comforting Leek Risotto', 14.00, 18),
('M4', 'Creamy Asparagus Risotto', 12.00, 19),
('M5', 'Fiery Dragon Noodles', 15.00, 24),
('M6', 'Mexican Vegetable Tacos', 18.50, 26),
('S1', 'Eggplant Curry', 18.50, 9),
('S2', 'Vegetables and Fruit Sushi', 22.00, 21),
('S3', 'Stuffed Bell Peppers', 19.00, 11),
('S4', 'Pizza Pronto', 16.00, 21),
('S5', 'Pizza Five CHeese', 16.00, 15),
('S6', 'Ricotta and Zucchini Cannelloni', 17.50, 18),
('V1', 'Textured Soybeans Burger', 20.00, 18),
('V2', 'Eggplant Burger', 20.00, 17),
('V3', 'Zucchini Burger', 20.00, 15),
('V4', 'Tofu Burger', 20.00, 25),
('V5', 'Lentils Burger', 20.00, 9),
('V6', 'Mushroom Burger', 20.00, 28),
('X1', 'Mineral Water', 2.50, 31),
('X2', 'Refreshments', 3.00, 28),
('X3', 'Juices', 2.50, 25),
('X4', 'National', 3.00, 25),
('X5', 'Imported', 5.00, 14),
('X6', 'Vegan Liquor Shots', 2.00, 22);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`ID`);
  
ALTER TABLE `bill`
  ADD CONSTRAINT BILL_FK
  FOREIGN KEY (`BookingID`) REFERENCES `booking`(`ID`) ON UPDATE CASCADE ON DELETE CASCADE; 

--
-- Indices de la tabla `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `booking`
  ADD CONSTRAINT BOOKING_FK
  FOREIGN KEY (`WaiterID`) REFERENCES `waiter`(`ID`) ON UPDATE CASCADE ON DELETE CASCADE; 

--
-- Indices de la tabla `consuption`
--
ALTER TABLE `consuption`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `consuption`
  ADD CONSTRAINT CONSUPTION_FK_BOOKING
  FOREIGN KEY (`BookingID`) REFERENCES `booking`(`ID`) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE `consuption`
  ADD CONSTRAINT CONSUPTION_FK_PLATE
  FOREIGN KEY (`PlateID`) REFERENCES `plate`(`ID`) ON UPDATE CASCADE ON DELETE CASCADE; 

--
-- Indices de la tabla `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `opinion`
--
ALTER TABLE `opinion`
  ADD PRIMARY KEY (`BookingID`);

ALTER TABLE `opinion`
  ADD CONSTRAINT OPINION_FK
  FOREIGN KEY (`BookingID`) REFERENCES `booking`(`ID`) ON UPDATE CASCADE ON DELETE CASCADE; 

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
