CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_user_facebook` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `user_range` tinyint(4) NOT NULL,
  `registration_date` date NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `id_user` (`id_user`),
  UNIQUE KEY `id_user_facebook` (`id_user_facebook`)