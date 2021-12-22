-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2015 at 07:36 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sharey`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `upload` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`, `description`, `upload`) VALUES
(1, 'pavneet@gmail.com', 'pavneet', 'pavneet singh', 'gfhjn', 'upload/5.jpg'),
(2, 'gurmandeep@gmail.com', 'gurmandeep', 'Gurmandeep Singh', 'rtfgbhrfgjn', 'upload/1.jpg'),
(3, 'baldev@gmail.com', 'baldev', 'baldev singh', 'hdvgfhfdbvgdzb jvg', 'upload/3.jpg'),
(4, 'govind@gmail.com', 'govind', 'govind', 'bdzbcvjnb dcbgfdxnf', 'upload/2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'hfxxdgbhxvgf', 'sweety@gmail.com', 'ewtgfdfxbhdx', 'eswxdzcvhj twfausbxhzdg fQWaF74DFB NDCFZB mjas zaX'),
(2, 'hfxxdgbhxvgf', 'sweety@gmail.com', 'ewtgfdfxbhdx', 'JBCDFVGKJ ZAghmjncvgfmSVNSzDS'),
(3, 'swty ', 'abc@gmail.com', 'helo', 'vhdsgfvgtubuvihyntrihvi');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `embeded_source` varchar(255) NOT NULL,
  `upload` varchar(255) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `description`, `category`, `embeded_source`, `upload`, `teacher_name`, `teacher_id`) VALUES
(1, 'Javascript', 'JavaScript is the programming language of HTML and the Web.  Programming makes computers do what you want them to do.  JavaScript is easy to learn.', 'scripts', '<iframe width="640" height="390" src="https://www.youtube.com/embed/Ukg_U3CnJWI" frameborder="0" allowfullscreen></iframe>', 'upload/java.jpg', 'Baldev singh', 3),
(2, 'Ruby on rails ', 'ruby  is a web application framework written in Ruby under MIT License. Rails is a modelâ€“viewâ€“controller (MVC) framework, providing default structures for a database, a web service, and web pages. It encourages and facilitates the use of web standards', 'scripts', '<iframe width="640" height="390" src="https://www.youtube.com/embed/GY7Ps8fqGdc" frameborder="0" allowfullscreen></iframe>', 'upload/ruby_on_rails.jpg', 'govind', 4),
(3, 'Python', 'Python is a general-purpose interpreted, interactive, object-oriented, and high-level programming language. It was created by Guido van Rossum during 1985- 1990. Like Perl, Python source code is also available under the GNU General Public License (GPL). T', 'scripts', '<iframe width="640" height="390" src="https://www.youtube.com/embed/tKTZoB2Vjuk" frameborder="0" allowfullscreen></iframe>', 'upload/python.jpg', 'gurmandeep singh', 2),
(4, 'C++', 'c++ is a general-purpose programming language. It has imperative, object-oriented and generic programming features, while also providing facilities for low-level memory manipulation.', 'programming', '<iframe width="640" height="390" src="https://www.youtube.com/embed/Rub-JsjMhWY" frameborder="0" allowfullscreen></iframe>', 'upload/c.jpg', 'Pavneet Singh', 1),
(5, 'SQL', 'SQL is Structured Query Languageis a special-purpose programming language designed for managing data held in a relational database management system (RDBMS), or for stream processing in a relational data stream management system (RDSMS).', 'database', '<iframe width="640" height="390" src="https://www.youtube.com/embed/pJCyTBkoIKA" frameborder="0" allowfullscreen></iframe>', 'upload/sql.jpg', 'Pavneet Singh', 1),
(6, 'MYSQL', 'MYSQL is the world''s second most[a] widely used relational database management system (RDBMS)[9] and most widely used open-source RDBMS.[10] It is named after co-founder Michael Widenius''s daughter, My.[11] The SQL acronym stands for Structured Query Lang', 'database', '<iframe width="640" height="390" src="https://www.youtube.com/embed/yPu6qV5byu4" frameborder="0" allowfullscreen></iframe>', 'upload/MySql.jpg', 'Baldev Singh', 3),
(7, 'HTML', 'HyperText Markup Language, commonly referred to as HTML, is the standard markup language used to create web pages.[1] It is written in the form of HTML elements consisting of tags enclosed in angle brackets . HTML tags most commonly come in pair tags.', 'designing', '<iframe width="640" height="390" src="https://www.youtube.com/embed/v4oN4DuR7YU" frameborder="0" allowfullscreen></iframe>', 'upload/html.jpg', 'Baldev Singh', 3),
(8, 'CSS', 'Cascading Style Sheets (CSS) is a style sheet language used for describing the look and formatting of a document written in a markup language. Although most often used to change the style of web pages and user interfaces written in HTML', 'designing', '<iframe width="640" height="390" src="https://www.youtube.com/embed/Wz2klMXDqF4" frameborder="0" allowfullscreen></iframe>', 'upload/CSS.jpg', 'Baldev singh', 3);

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE IF NOT EXISTS `lessons` (
  `lesson_id` int(11) NOT NULL AUTO_INCREMENT,
  `lesson_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `embed-source` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`lesson_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`lesson_id`, `lesson_name`, `description`, `embed-source`, `course_id`) VALUES
(1, 'introduction', 'JavaScript is most commonly used as a client side scripting language. This means that JavaScript code is written into an HTML page. When a user requests an HTML page with JavaScript in it, the script is sent to the browser and it''s up to the browser to do', '<iframe width="640" height="390" src="https://www.youtube.com/embed/3MZIkY55fS0" frameborder="0" allowfullscreen></iframe>', 1),
(2, 'basics', 'Application Programming Interfaces (APIs) built into web browsers providing various functionality like dynamically creating HTML and setting CSS styles, or grabbing and manipulating a video stream from the user''s webcam, or generating 3D graphics and audi', '', 1),
(3, 'js dates', 'The Date object lets you work with dates (years, months, days, hours, minutes, seconds, and milliseconds)', '<iframe width="640" height="390" src="https://www.youtube.com/embed/M3VEFVBRw-o" frameborder="0" allowfullscreen></iframe>', 1),
(4, 'js functions', 'JavaScript functions are defined with the function keyword.  You can use a function declaration or a function expression.', '<iframe width="640" height="390" src="https://www.youtube.com/embed/5nuqALOHN1M" frameborder="0" allowfullscreen></iframe>', 1),
(5, 'introduction to ruby on rails', 'How to install Rails, create a new Rails application, and connect your application to a database. The general layout of a Rails application.', '<iframe width="640" height="390" src="https://www.youtube.com/embed/ZJOVr10rP1c" frameborder="0" allowfullscreen></iframe>', 2),
(6, 'listing the articles', 'We still need a way to list all our articles,The route for this as per output of bin/rake routes is:  articles GET    /articles(.:format)          articles#index', '<iframe width="640" height="390" src="https://www.youtube.com/embed/USfKteP-eVo" frameborder="0" allowfullscreen></iframe>', 2),
(7, 'adding links', 'The link_to method is one of Rails'' built-in view helpers. It creates a hyperlink based on text to display and where to go - in this case, to the path for articles.', '<iframe width="640" height="390" src="https://www.youtube.com/embed/1bO7_5TD8MI" frameborder="0" allowfullscreen></iframe>', 2),
(9, 'adding some validation', 'The model file, app/models/article.rb is about as simple as it can get:  class Article < ActiveRecord::Base end', '<iframe width="640" height="390" src="https://www.youtube.com/embed/1bO7_5TD8MI" frameborder="0" allowfullscreen></iframe>', 2),
(10, 'introduction', 'Python is a dynamic, interpreted (bytecode-compiled) language. There are no type declarations of variables, parameters, functions, or methods in source code. This makes the code short and flexible.', '<iframe width="640" height="390" src="https://www.youtube.com/embed/N4mEzFDjqtA?list=PLFd87qVsaLhMb9xBMES8vawrHzw7TobjI" frameborder="0" allowfullscreen></iframe>', 3),
(11, 'Lists', 'The list is a most versatile datatype available in Python which can be written as a list of comma-separated values (items) between square brackets. Important thing about a list is that items in a list need not be of the same type.', '<iframe width="640" height="390" src="https://www.youtube.com/embed/CoWLSYhHA3w" frameborder="0" allowfullscreen></iframe>', 3),
(12, 'loops', 'A loop statement allows us to execute a statement or group of statements multiple times. The following diagram illustrates a loop statement', '<iframe width="640" height="390" src="https://www.youtube.com/embed/9LgyKiq_hU0" frameborder="0" allowfullscreen></iframe>', 3),
(13, 'introduction', 'C++ is a middle-level programming language developed by Bjarne Stroustrup starting in 1979 at Bell Labs. C++ runs on a variety of platforms, such as Windows, Mac OS, and the various versions of UNIX.', '<iframe width="640" height="390" src="https://www.youtube.com/embed/-B7Vqc9c_wk" frameborder="0" allowfullscreen></iframe>', 4),
(14, 'data types', 'While doing programming in any programming language, you need to use various variables to store various information. Variables are nothing but reserved memory locations to store values. This means that when you create a variable you reserve some space in ', '<iframe width="640" height="390" src="https://www.youtube.com/embed/FKJCq2aXdyU" frameborder="0" allowfullscreen></iframe>', 4),
(15, 'functions', 'A function is a group of statements that together perform a task. Every C++ program has at least one function, which is main(), and all the most trivial programs can define additional functions.', '<iframe width="640" height="390" src="https://www.youtube.com/embed/VLx06dUbEmA" frameborder="0" allowfullscreen></iframe>', 4),
(16, 'SQL introduction', 'SQL is a standard language for accessing databases.  Our SQL tutorial will teach you how to use SQL to access and manipulate data in: MySQL, SQL Server, Access, Oracle, Sybase, DB2, and other database systems.', '<iframe width="640" height="390" src="https://www.youtube.com/embed/HgoM1I4yEFo" frameborder="0" allowfullscreen></iframe>', 5),
(17, 'select', 'The SELECT statement is used to select data from a database.  The result is stored in a result table, called the result-set.SELECT column_name,column_name FROM table_name;', '<iframe width="640" height="390" src="https://www.youtube.com/embed/DDIAnk6CRsU" frameborder="0" allowfullscreen></iframe>', 5),
(18, 'delete', 'The DELETE statement is used to delete records in a table.DELETE FROM table_name WHERE some_column=some_value;', '<iframe width="640" height="390" src="https://www.youtube.com/embed/6tpXe_GfJi0" frameborder="0" allowfullscreen></iframe>', 5),
(19, 'update', 'The UPDATE statement is used to update records in a table.UPDATE table_name SET column1=value1,column2=value2,... WHERE some_column=some_value;', '<iframe width="640" height="390" src="https://www.youtube.com/embed/QQvcRFifsyM" frameborder="0" allowfullscreen></iframe>', 5),
(20, 'introduction', 'With PHP, you can connect to and manipulate databases.  MySQL is the most popular database system used with PHP.', '<iframe width="640" height="390" src="https://www.youtube.com/embed/yPu6qV5byu4" frameborder="0" allowfullscreen></iframe>', 6),
(21, 'create database', 'you have access to root user, you can create any database using mysql mysqladmin binary.', '<iframe width="640" height="390" src="https://www.youtube.com/embed/FAXhXI2Gxdc" frameborder="0" allowfullscreen></iframe>', 6),
(22, 'drop database', 'You would need special privileges to create or to delete a MySQL database. So assuming you have access to root user, you can create any database using mysql mysqladmin binary.[root@host]# mysqladmin -u root -p drop TUTORIALS Enter password:******', '<iframe width="640" height="390" src="https://www.youtube.com/embed/lkzqEyDqwvs" frameborder="0" allowfullscreen></iframe>', 6),
(23, 'Insert Query', 'To insert data into MySQL table, you would need to use SQL INSERT INTO command. You can insert data into MySQL table by using mysql> prompt or by using any script like PHP.', '<iframe width="640" height="390" src="https://www.youtube.com/embed/Iaj3jm2pC0Q" frameborder="0" allowfullscreen></iframe>', 6),
(24, 'html introduction', 'With HTML you can create your own Web site.  This tutorial teaches you everything about HTML.  HTML is easy to learn', '<iframe width="640" height="390" src="https://www.youtube.com/embed/fS7w-TXinPE" frameborder="0" allowfullscreen></iframe>', 7),
(25, 'Html Attributes', 'HTML elements can have attributes Attributes provide additional information about an element Attributes are always specified in the start tag Attributes come in name/value pairs like: name="value"', '<iframe width="640" height="390" src="https://www.youtube.com/embed/kqJNUF9c_rU" frameborder="0" allowfullscreen></iframe>', 7),
(26, 'insert image', 'In HTML, images are defined with the <img> tag.  The <img> tag is empty, it contains attributes only, and does not have a closing tag.  The src attribute specifies the URL (web address) of the image:  <img src="url" alt="some_text">', '<iframe width="640" height="390" src="https://www.youtube.com/embed/8A7XdS86XH4" frameborder="0" allowfullscreen></iframe>', 7),
(27, 'tables', 'Tables are defined with the <table> tag.  Tables are divided into table rows with the <tr> tag.  Table rows are divided into table data with the <td> tag.  A table row can also be divided into table headings with the <th> tag.', '<iframe width="640" height="390" src="https://www.youtube.com/embed/HPpjaz5xRAQ" frameborder="0" allowfullscreen></iframe>', 7),
(28, 'introduction', 'CSS stands for Cascading Style Sheets CSS defines how HTML elements are to be displayed Styles were added to HTML 4.0 to solve a problem CSS saves a lot of work External Style Sheets are stored in CSS files', '<iframe width="640" height="390" src="https://www.youtube.com/embed/qKoajPPWpmo" frameborder="0" allowfullscreen></iframe>', 8),
(29, 'lists', 'Set different list item markers for ordered lists Set different list item markers for unordered lists Set an image as the list item marker', '<iframe width="640" height="390" src="https://www.youtube.com/embed/-AyiZNtT4JE" frameborder="0" allowfullscreen></iframe>', 8),
(30, 'backgroud properties', 'CSS properties used for background effects:  background-color background-image background-repeat background-attachment background-position', '<iframe width="640" height="390" src="https://www.youtube.com/embed/9DE7XUIK_jI" frameborder="0" allowfullscreen></iframe>', 8),
(31, 'border properties', 'The CSS border properties allow you to specify the style, size, and color of an element''s border.', '<iframe width="640" height="390" src="https://www.youtube.com/embed/9VTehHBwQZo" frameborder="0" allowfullscreen></iframe>', 8);

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE IF NOT EXISTS `queries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `queries` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `queries`) VALUES
(1, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(255) NOT NULL,
  `teacher_description` varchar(255) NOT NULL,
  `profile photo` varchar(255) NOT NULL,
  `key_skills` varchar(255) NOT NULL,
  `teacher_email` varchar(255) NOT NULL,
  `teacher_fon` varchar(255) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `teacher_description`, `profile photo`, `key_skills`, `teacher_email`, `teacher_fon`) VALUES
(1, 'pavneet singh', 'sfrfuyvghdsvg dfscvnxzvkj jdfls vnjxzhjcv', '', '', '', '0'),
(2, 'gurmandeep singh', 'ehfgredavhfdb vnxzcbv esivgbnjcv bkjsj fvc cxb vndfb', '', '', '', '0'),
(3, 'baldev singh', 'dfbvuesdcgfujhvb jbxzjv xkcv dmnsbvnkjvgf vfgb', '', 'kjcfb vjndfkbkxc dfbvgdhjbvgjdfbgfv ncvbcv', '', '0'),
(4, 'gopal', 'gdsklczjvgbdflkjzasnsdfmdnbhkgfmjhf', '', 'dbvjhsgfikdhnjvgkij djgvs', 'gopal@gmail.com', '9847483647'),
(5, 'sweety', 'dsklfj', '', 'abcdefghij', 'sweety@gmail.com', '98465365321'),
(6, 'sweety', 'dsklfj', 'upload/Chrysanthemum.jpg', 'abcdefghij', 'sweety@gmail.com', '98465365321');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'sonali@gmail.com', 'sonali'),
(2, 'priya@gmail.com', 'priya'),
(3, 'preet@gmail.com', 'preet');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
