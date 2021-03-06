-- 1. Eine Datenbank namens anlegen, welche mit utf8_general_ci kollatiert ist!
-- 2. Folgende Codeblöcke nacheinander in dieser Datenbank ausführen

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vorname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nachname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `passwortcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passwortcode_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`), UNIQUE (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `securitytokens` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `user_id` int(10) NOT NULL,
  `identifier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `securitytoken` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE articles (
`id` INT(10) unsigned NOT NULL AUTO_INCREMENT,
`title` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
`description` TEXT COLLATE utf8_unicode_ci NOT NULL,
`text` MEDIUMTEXT COLLATE utf8_unicode_ci NOT NULL,
`images` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
`date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`blog_id` int(10) unsigned NOT NULL,
 PRIMARY KEY (`id`), UNIQUE (`title`)
);

CREATE TABLE IF NOT EXISTS `blogs` (
  `blog_id` INT(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
  `owner_id` INT(10) unsigned NOT NULL,
  PRIMARY KEY (`blog-id`), UNIQUE (`blog-id`)
);
