# todo_FP
WebBootcamp Final project - HTML, CSS, BOOTSTRAP, JS, PHP, SQL

CREATE DATABASE `todo`;

CREATE TABLE `todos`(
id INT NOT NULL AUTO_INCREMENT,
title VARCHAR(127) NOT NULL,
date DATETIME DEFAULT CURRENT_TIMESTAMP,
checked TINYINT NOT NULL DEFAULT 1,
PRIMARU KEY (id)
)
