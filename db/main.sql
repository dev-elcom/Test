BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS `users` (
	`id`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`f_name`	TEXT NOT NULL,
	`l_name`	TEXT NOT NULL,
	`m_name`	TEXT NOT NULL,
	`password`	TEXT NOT NULL,
	`type`	INTEGER NOT NULL DEFAULT 1
);
INSERT INTO `users` (id,f_name,l_name,m_name,password,type) VALUES (1,'Юнир','Габидуллин','Зульфатович','f1c1592588411002af340cbaedd6fc33',2);
CREATE TABLE IF NOT EXISTS `tasks` (
	`id`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`skill`	INTEGER NOT NULL,
	`case`	INTEGER NOT NULL,
	`letter`	INTEGER NOT NULL,
	`text`	TEXT NOT NULL,
	`type`	INTEGER NOT NULL,
	FOREIGN KEY(`letter`) REFERENCES `letters`(`id`),
	FOREIGN KEY(`skill`) REFERENCES `skills`(`id`),
	FOREIGN KEY(`case`) REFERENCES `cases`(`id`)
);
INSERT INTO `tasks` (id,skill,case,letter,text,type) VALUES (1,1,1,1,'Вопрос',1);
CREATE TABLE IF NOT EXISTS `skills` (
	`id`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`name`	TEXT NOT NULL,
	`note`	TEXT NOT NULL
);
INSERT INTO `skills` (id,name,note) VALUES (1,'Умение','Описание умения');
CREATE TABLE IF NOT EXISTS `results` (
	`id`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`user`	INTEGER NOT NULL,
	`case`	INTEGER NOT NULL,
	`mark`	INTEGER NOT NULL,
	`date`	INTEGER NOT NULL,
	FOREIGN KEY(`user`) REFERENCES `users`(`id`)
);
INSERT INTO `results` (id,user,case,mark,date) VALUES (1,1,1,100,1537292820);
CREATE TABLE IF NOT EXISTS `resources` (
	`id`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`case`	INTEGER NOT NULL,
	`link`	TEXT NOT NULL,
	FOREIGN KEY(`case`) REFERENCES `cases`(`id`)
);
INSERT INTO `resources` (id,case,link) VALUES (1,1,'pdf file');
CREATE TABLE IF NOT EXISTS `letters` (
	`id`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`name`	TEXT NOT NULL,
	`text`	TEXT NOT NULL
);
INSERT INTO `letters` (id,name,text) VALUES (1,'Параграф','Содержание');
CREATE TABLE IF NOT EXISTS `cases` (
	`id`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`skill`	INTEGER NOT NULL,
	`name`	TEXT NOT NULL,
	`note`	TEXT NOT NULL,
	FOREIGN KEY(`skill`) REFERENCES `skills`(`id`)
);
INSERT INTO `cases` (id,skill,name,note) VALUES (1,1,'Ситуация','Описание ситуации');
CREATE TABLE IF NOT EXISTS `answer` (
	`id`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`task`	INTEGER NOT NULL,
	`text`	TEXT NOT NULL,
	`correct`	INTEGER NOT NULL DEFAULT 0
);
INSERT INTO `answer` (id,task,text,correct) VALUES (1,1,'Ответ 1',1),(2,1,'Ответ 2',0);
COMMIT;