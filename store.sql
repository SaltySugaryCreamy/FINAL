SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` float(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MariaDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `items` (`name`, `price`) VALUES
('Omega Constellation
', 351799),
('Omega Seamaster', 221815),
('Omega Speedmaster', 282478),
('Omega de ville tourbillon', 7889647),
('Rolex Yacht-Master 40', 2537500),
('Rolex Day-Date 40', 2273000),
('Rolex Deepsea', 2852500),
('Rolex Cosmograph', 2232500),
('Cartier Santos', 445547.50),
('Cartier Dumont', 224211),
('Cartier Tank Louis', 747370),
('Cartier Ballon Bleu', 388057.50);


CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MariaDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `user_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL DEFAULT 'Added to cart',
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MariaDB DEFAULT CHARSET=utf8mb4;
COMMIT;