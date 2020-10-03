-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 06:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio-6`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `body` text CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `body`, `image`, `time`) VALUES
(1, 'Our Office Details', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. LoremLorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. LoremLorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.LoremLorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.LoremLorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem', 'about11.jpeg', '2020-05-02 14:33:26'),
(2, 'Our Office Details 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. LoremLorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. LoremLorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.LoremLorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.LoremLorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem', 'banner.jpeg', '2020-05-02 14:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `node` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `node`) VALUES
(1, 'All Rights Reserved | By');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo`) VALUES
(1, 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `body` text CHARACTER SET utf8 NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `body`, `time`) VALUES
(2, 'Selim', 'selimrezaswadhim@gmail.com', 'SwadhinSwadhinSwadhinSwadhinSwadhin', '2020-05-01 12:10:18'),
(3, 'Selim', 'selimrezaswadhim@gmail.com', 'Hello Academy!It\'s one of the best IT learning institute in my sense. I am really happy to joint their course.Hello Academy! It\'s one of the best IT learning instituteHello Academy!It\'s one of the best IT learning institute in my sense. I am really happy to joint their course.Hello Academy! It\'s one of the best IT learning institute', '2020-05-01 12:13:41'),
(4, 'Selim', 'selimrezaswadhim@gmail.com', 'Hello Academy!It\'s one of the best IT learning institute in my sense. I am really happy to joint their course.Hello Academy! It\'s one of the best IT learning instituteHello Academy!It\'s one of the best IT learning institute in my sense. I am really happy to joint their course.Hello Academy! It\'s one of the best IT learning institute', '2020-05-01 12:16:49'),
(5, 'Selim&lt;h3&gt;hgt&lt;/h3&gt;', 'selimrezaswadhim@gmail.com', 'Hello Academy!It\'s one of the best IT learning institute in my sense. I am really happy to joint their course.Hello Academy! It\'s one of the best IT learning instituteHello Academy!It\'s one of the best IT learning institute in my sense. I am really happy to joint their course.Hello Academy! It\'s one of the best IT learning institute', '2020-05-01 12:17:31'),
(6, 'Zannatul Ferdous Bonna', 'selimrezaswadhim@gmail.com', 'submit Hello Academy!It\'s one of the best IT learning institute in my sense.I am really happy to joint their course.Hello Academy! It\'s one of the best IT learning institute', '2020-05-01 12:23:57'),
(7, 'Zannatul Ferdous', 'selimrezaswadhim@gmail.com', 'submit Hello Academy!It\'s one of the best IT learning institute in my sense.I am really happy to joint their course.Hello Academy! It\'s one of the best IT learning institute', '2020-05-01 12:25:38'),
(8, 'Selim Reza Swadhin', 'selimrezaswadhim@gmail.com', 'Hello Academy!It\'s one of the best IT learning institute in my sense.I am really happy to joint their course.Hello Academy! It\'s one of the best IT learning institute', '2020-05-01 12:30:53'),
(9, 'Selim Reza Swadhin', 'selimrezaswadhim@gmail.com', '                    Hello Academy!It\'s one of the best IT learning institute in my sense.I am really happy to joint their course.Hello Academy! It\'s one of the best IT learning institute', '2020-05-01 12:33:31'),
(10, 'Selim Reza Swadhin', 'selimrezaswadhim@gmail.com', '&lt;?php\r\n$conn = mysqli_connect(\'localhost\', \'root\', \'\', \'portfolio-6\');\r\n\r\nfunction validation($data)\r\n{\r\n    $data = trim($data);\r\n    $data = stripcslashes($data);\r\n    $data = htmlspecialchars($data);\r\n    return $data;\r\n}\r\n\r\nif ($_SERVER[\'REQUEST_METHOD\'] == \'POST\') {\r\n    $name = validation($_POST[\'name\']);\r\n    $email = validation($_POST[\'email\']);\r\n    $body = validation($_POST[\'body\']);\r\n\r\n    $name = mysqli_real_escape_string($conn, $name);\r\n    $email = mysqli_real_escape_string($conn, $email);\r\n    $body = mysqli_real_escape_string($conn, $body);\r\n\r\n    $error = &quot;&quot;;\r\n\r\n    if (empty($name)) {\r\n\r\n        $error = &quot;First name must not be empty&quot;;\r\n\r\n    } elseif (empty($email)) {\r\n\r\n        $error = &quot;Email field must not be empty&quot;;\r\n\r\n    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {\r\n\r\n        $error = &quot;Invalid email address&quot;;\r\n\r\n    } elseif (empty($body)) {\r\n        $error = &quot;Message field must not be empty&quot;;\r\n\r\n    } else {\r\n        $query = &quot;INSERT INTO messages(name, email, body) VALUES (\'$name\', \'$email\', \'$body\')&quot;;\r\n        $inserted_rows = mysqli_query($conn, $query);\r\n        if ($inserted_rows) {\r\n            $msg = &quot;Message Sent Successfully.&quot;;\r\n        } else {\r\n            $msg = &quot;Message Sent Not Successfully.&quot;;\r\n        }\r\n        header(&quot;location:index.php&quot;);\r\n    }\r\n\r\n}\r\n\r\n?&gt;', '2020-05-01 12:36:07'),
(11, 'Selim Reza Swadhin', 'selimrezaswadhim@gmail.com', 'Hello Academy!It\'s one of the best IT learning institute in my sense.I am really happy to joint their course.Hello Academy! It\'s one of the best IT learning instituteHello Academy!It\'s one of the best IT learning institute in my sense.I am really happy to joint their course.Hello Academy! It\'s one of the best IT learning instituteHello Academy!It\'s one of the best IT learning institute in my sense.I am really happy to joint their course.Hello Academy! It\'s one of the best IT learning institute', '2020-05-02 15:22:31'),
(12, 'Zannatul Ferdous Bonna', 'zannatulferdous@gmail.com', 'Hello Academy!It\'s one of the best IT learning institute in my sense.I am really happy to joint their course.Hello Academy! It\'s one of the best IT learning institute Hello Academy!It\'s one of the best IT learning institute in my sense.I am really happy to joint their course.Hello Academy! It\'s one of the best IT learning institute', '2020-05-02 15:29:33');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `fb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ins` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tw` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ln` varchar(255) CHARACTER SET utf8 NOT NULL,
  `gp` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pin` varchar(255) CHARACTER SET utf8 NOT NULL,
  `gt` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `fb`, `ins`, `tw`, `ln`, `gp`, `pin`, `gt`) VALUES
(1, 'https://web.facebook.com/mdselim.swadhin', 'https://www.instagram.com/Selim Reza Swadhin', 'https://www.twitter.com/Selim Reza Swadhin', 'https://www.linkedin.com/Selim Reza Swadhin', 'https://www.google.com/Selim Reza Swadhin', 'https://web.pinterest.com/mdselim.swadhin', 'https://github.com/Selim-Reza-Swadhin/');

-- --------------------------------------------------------

--
-- Table structure for table `student_feedback`
--

CREATE TABLE `student_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `para` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_feedback`
--

INSERT INTO `student_feedback` (`id`, `name`, `title`, `image`, `para`) VALUES
(1, 'Md Hamid', 'I am really happy to joint their course', 'blog-man1.png', 'Hello Academy!  It\'s one of the best IT learning institute in my sense.\r\n                            I am really happy to joint their course.Hello Academy!\r\n                            It\'s one of the best IT learning institute'),
(2, 'Zannat', 'I am really happy to joint their course', 'blog-man2.png', 'Hello Academy! It\'s one of the best IT learning institute in my sense.\r\n                            I am really happy to joint their course.Hello Academy!\r\n                            It\'s one of the best IT learning institute'),
(3, 'Md Rakib', 'I am really happy to joint their course', 'blog-man3.png', 'Hello Academy! It\'s one of the best IT learning institute in my sense. I am really happy to joint their course.Hello Academy!\r\n                            It\'s one of the best IT learning institute'),
(4, 'Md Rakib', 'I am really happy to joint their course', 'blog-man4.png', 'Hello Academy!It\'s one of the best IT learning institute in my sense. I am really happy to joint their course.Hello Academy!\r\n                            It\'s one of the best IT learning institute'),
(5, 'Md Rakib', 'I am really happy to joint their course', 'blog-man1.png', 'Hello Academy!It\'s one of the best IT learning institute in my sense.I am really happy to joint their course.Hello Academy!\r\n                            It\'s one of the best IT learning institute'),
(6, 'selim', 'I am really happy to joint their course', 'blog-man2.png', 'Hello Academy!It\'s one of the best IT learning institute in my sense.I am really happy to joint their course.Hello Academy!\r\n                            It\'s one of the best IT learning institute');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_feedback`
--
ALTER TABLE `student_feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_feedback`
--
ALTER TABLE `student_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
