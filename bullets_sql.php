CREATE TABLE `bullets` (
  `bullet_id` int(10) NOT NULL AUTO_INCREMENT,
  `bullet_title` varchar(255) NOT NULL,
  `bullet_description` varchar(255) NOT NULL,
  `bullet_bullets` text NOT NULL,
  `bullet_button1` text NOT NULL,
  `bullet_button2` text NOT NULL,
  PRIMARY KEY  (bullet_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;