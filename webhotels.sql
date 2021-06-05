DROP DATABASE IF EXISTS `webhotel`;
CREATE DATABASE IF NOT EXISTS `webhotel`;
USE `webhotel`;

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL DEFAULT '0',
  `last_name` varchar(255) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `members` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`, `updated_at`) VALUES
	(2, 'chris', 'zervas', 'chriszervas@gmail.com', '$2y$04$t7Mp2Lxwxh3xpjkbI49pCu4269Wz8rhvDtFbbJJQ4.6V5SmUSYjeS', '2021-02-05 16:45:33', '2021-02-05 16:45:33'),
	(3, 'thanos', 'papadakis', 'thanospapadakis@gmail.com', '$2y$04$MiPuZJMuwzwEKxjqkMtF3O8ysIgeGx/ldo5CZMR/fqAn8zmNUo4U2', '2021-02-05 16:46:09', '2021-02-05 16:46:09'),
	(5, 'takhs', 'pipas', 'takispipas@gmail.com', '$2y$04$AINjWMW4HWKPPErbSrQxyOyyfh8QkQSH3S4sEBE8nA5Qh0.cIS0Am', '2021-02-05 16:49:27', '2021-02-05 16:49:27'),
	(6, 'mpamphs', 'tentas', 'mpamphstentas@gmail.com', '$2y$04$eHVKFNfLy6vtZg0HIt/dv.idTuLhkBGmLl.oK3lLxI6fKWb22TIYi', '2021-02-05 17:23:21', '2021-02-05 17:23:21');
