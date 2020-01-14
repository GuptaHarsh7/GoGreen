SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `sphinx`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  'name' text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  'name' text NOT NULL,
  'city' text NOT NULL,
  'state' text NOT NULL,
  'address' text NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  'name' text NOT NULL,
  'city' text NOT NULL,
  'state' text NOT NULL,
  'address' text NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `challenges`
--

CREATE TABLE `challenges` (
  `id` int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  'name' text NOT NULL,
  'city' text NOT NULL,
  'state' text NOT NULL,
  'address' text NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  'name' text NOT NULL,
  'city' text NOT NULL,
  'state' text NOT NULL,
  'address' text NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notificatio` (
  `nid` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `ords` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_req`
--

CREATE TABLE `password_req` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `token` text NOT NULL,
  `datetimesss` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
