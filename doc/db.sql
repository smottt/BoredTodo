CREATE TABLE IF NOT EXISTS `todo` (
  `todo_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `todo_short` varchar(255) NOT NULL,
  `todo_long` text,
  `todo_date` date NOT NULL,
  `todo_priority` varchar(7) NOT NULL,
  `priority` tinyint(2) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`todo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;
