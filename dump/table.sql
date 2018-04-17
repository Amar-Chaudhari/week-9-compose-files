CREATE DATABASE IF NOT EXISTS cloudtech; USE cloudtech;

CREATE TABLE `labs` (
  `id` int(11) NOT NULL auto_increment,
  `data` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `labs` (`data`) VALUES
('Hello from db container');