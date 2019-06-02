-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2019 a las 21:07:26
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bill`
--

CREATE TABLE `bill` (
  `ID` varchar(6) NOT NULL,
  `BookinID` varchar(4) NOT NULL,
  `TotalPrice` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bill`
--

INSERT INTO `bill` (`ID`, `BookinID`, `TotalPrice`) VALUES
('000AAA', 'AA22', 150.00),
('AAA000', 'AA00', 26.50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `booking`
--

CREATE TABLE `booking` (
  `ID` varchar(4) NOT NULL,
  `WaiterID` varchar(6) NOT NULL,
  `TableNumber` int(1) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Hour` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `booking`
--

INSERT INTO `booking` (`ID`, `WaiterID`, `TableNumber`, `FullName`, `Hour`) VALUES
('AA00', 'JeAs05', 1, 'Manuel Cantos Codina', '2019-06-02'),
('AA22', 'LaBo04', 8, 'Jorge Pablo Ávila Gómez', '2019-06-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consuption`
--

CREATE TABLE `consuption` (
  `BillID` varchar(6) NOT NULL,
  `PlateID` varchar(2) NOT NULL,
  `Quantity` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `ID` varchar(6) NOT NULL,
  `Pass` varchar(8) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Surname` varchar(40) NOT NULL,
  `DNI` varchar(9) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `IBAN` varchar(4) NOT NULL,
  `CCC` varchar(20) NOT NULL,
  `Puesto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`ID`, `Pass`, `Name`, `Surname`, `DNI`, `Address`, `IBAN`, `CCC`, `Puesto`) VALUES
('JaLa01', 'asd123', 'Jackson', 'Langley', '88662814E', '219 Otaka Street, Hurdon, New Plymouth 4310 ', 'ES61', '30178593385008781330', 'Chef'),
('JeAs05', 'asd123', 'Jeremy', 'Aspinall', '00839122J', '230 Short Lane, Blagdon, New Plymouth 4310 ', 'ES35', '31135235121359717720', 'Waiter'),
('LaBo04', 'asd123', 'Laura', 'Bowes', '52710456E', '41 Gilligan Close, Putiki, Wanganui 4500 ', 'ES50', '01360665350036996047', 'Waitress'),
('PiEb02', 'asd123', 'Piper', 'Ebsworth', '22907756D', '205 Herekino Street, Bishopdale, Christchurch 8053', 'ES72', '20424264349376452576', 'Meter'),
('SaBa03', 'asd123', 'Savannah', 'Badcoe', '06873391W', '97 Beaumaris Way, Takanini, Manukau 2112', 'ES39', '30954607401561210711', 'Scullion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opinions`
--

CREATE TABLE `opinions` (
  `BookingID` varchar(4) NOT NULL,
  `Text` varchar(500) NOT NULL,
  `Points` double(2,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `opinions`
--

INSERT INTO `opinions` (`BookingID`, `Text`, `Points`) VALUES
('AA00', 'Hola', 5.0),
('AA22', 'Me gustarÃ­a lamer un polo de limÃ³n en el lago de Liliput.', 4.5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plate`
--

CREATE TABLE `plate` (
  `ID` varchar(2) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` double(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plate`
--

INSERT INTO `plate` (`ID`, `Name`, `Price`) VALUES
('D1', 'Vegan Chocolate Cupcake', 7.00),
('D2', 'Peanut Butter and Chocolate Big Cookie', 7.00),
('D3', 'Vegan Strawberry Cheesecake', 8.00),
('D4', 'Carrot Pie', 6.00),
('D5', 'Apple Pie', 6.00),
('D6', 'Chocolate Chip Banana Bread', 7.50),
('E1', 'Ceasar Salada', 14.00),
('E2', 'Fruit and Vegetables Salad', 14.50),
('E3', 'Gazpacho', 8.00),
('E4', 'Zucchini Tots', 12.00),
('E5', 'Vegan \"Quesadilla\"', 16.00),
('E6', 'Potato Chips', 10.00),
('M1', 'Thai Citrus Tofu Kebabs', 14.00),
('M2', 'Fried Tofu', 12.50),
('M3', 'Comforting Leek Risotto', 14.00),
('M4', 'Creamy Asparagus Risotto', 12.00),
('M5', 'Fiery Dragon Noodles', 15.00),
('M6', 'Mexican Vegetable Tacos', 18.50),
('S1', 'Eggplant Curry', 18.50),
('S2', 'Vegetables and Fruit Sushi', 22.00),
('S3', 'Stuffed Bell Peppers', 19.00),
('S4', 'Pizza Pronto', 16.00),
('S5', 'Pizza Five CHeese', 16.00),
('S6', 'Ricotta and Zucchini Cannelloni', 17.50),
('V1', 'Textured Soybeans Burger', 20.00),
('V2', 'Eggplant Burger', 20.00),
('V3', 'Zucchini Burger', 20.00),
('V4', 'Tofu Burger', 20.00),
('V5', 'Lentils Burger', 20.00),
('V6', 'Mushroom Burger', 20.00),
('X1', 'Mineral Water', 2.50),
('X2', 'Refreshments', 3.00),
('X3', 'Juices', 2.50),
('X4', 'National', 3.00),
('X5', 'Imported', 5.00),
('X6', 'Vegan Liquor Shots', 2.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `opinions`
--
ALTER TABLE `opinions`
  ADD PRIMARY KEY (`BookingID`);

--
-- Indices de la tabla `plate`
--
ALTER TABLE `plate`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
