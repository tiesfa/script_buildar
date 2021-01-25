-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 24, 2019 at 08:46 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `script_buildar`
--

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

DROP TABLE IF EXISTS `code`;
CREATE TABLE `code` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code_module` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`id`, `name`, `category`, `code_module`, `created_at`, `updated_at`) VALUES
(205, 'Toggle material', 'Action', '// Toggle material - Action\r\n\r\n\r\n\r\n// [ADD THIS TO THE SPARK AR STUDIO PROJECT]\r\n// - A material called \"defaultMaterial0\"\r\n// - A material called \"defaultMaterial1\"\r\n\r\n\r\n\r\n// [IGNORE]\r\n\r\n// Required modules\r\nconst Materials = require(\'Materials\');\r\n\r\n// Locate the materials in the Assets\r\nconst material = Materials.get(\'defaultMaterial0\');\r\nconst material2 = Materials.get(\'defaultMaterial1\');\r\n\r\n// [IGNORE]\r\n\r\n\r\n\r\n// [CALL FUNCTION]\r\n// How to call this function:\r\n// Changematerial(); [COPY THIS]\r\n\r\nfunction Changematerial() {\r\n  // Switch materials depending on which one is currently applied to the plane\r\n  if (plane.materialIdentifier === material.identifier) {\r\n    plane.material = material2;\r\n  } else {\r\n    plane.material = material;\r\n  }\r\n}', '2019-06-23 16:13:06', '2019-06-23 16:13:06'),
(207, 'Tap', 'Trigger', '// Tap - Trigger\r\n\r\n\r\n\r\n// [ADD THIS TO THE SPARK AR STUDIO PROJECT]\r\n// - A plane called \"plane0\"\r\n\r\n\r\n\r\n// [IGNORE]\r\n\r\n// Required modules\r\nconst Scene = require(\'Scene\');\r\nconst TouchGestures = require(\'TouchGestures\');\r\n\r\n// Locate the plane in the Scene\r\nconst plane = Scene.root.find(\'plane0\');\r\n\r\n// [IGNORE]\r\n\r\n\r\n\r\n// [EDIT]\r\nTouchGestures.onTap(plane).subscribe(function(gesture) {\r\n  \r\n	// [EDIT HERE]\r\n	// Call the action function here\r\n	// [PASTE HERE]\r\n\r\n});', '2019-06-24 16:21:10', '2019-06-24 16:21:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
