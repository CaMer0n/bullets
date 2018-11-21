CREATE TABLE `bullets` (
  `bullet_id` int(10) NOT NULL AUTO_INCREMENT,
  `bullet_title` varchar(255) NOT NULL,
  `bullet_description` varchar(255) NOT NULL,
  `bullet_image` varchar(255) NOT NULL,
  `bullet_bullets` text NOT NULL,
  `bullet_button1` text NOT NULL,
  `bullet_button2` text NOT NULL,
  `bullet_order` tinyint(3) unsigned NOT NULL default '0',
  `bullet_class` int(5) default '0',
  PRIMARY KEY  (bullet_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;