/*
Created: 22/07/2019
Modified: 22/07/2019
Model: MySQL 8.0
Database: MySQL 8.0
*/

-- Create tables section -------------------------------------------------

-- Table component

CREATE TABLE `component`
(
  `comp_id` Int NOT NULL AUTO_INCREMENT,
  `comp_description` Varchar(255),
  `comp_note` Varchar(1024),
  `comp_manufacturer` Varchar(45),
  `comp_warranty_end` Datetime,
  `comp_created` Datetime,
  `comp_supl_id` Int,
  `comp_room_id` Int,
  `comp_coty_id` Int,
  PRIMARY KEY (`comp_id`)
)
;

CREATE INDEX `supl_comp_IX` ON `component` (`comp_supl_id`)
;

CREATE INDEX `room_comp_IX` ON `component` (`comp_room_id`)
;

CREATE INDEX `coty_comp_IX` ON `component` (`comp_coty_id`)
;

-- Table supplier

CREATE TABLE `supplier`
(
  `supl_id` Int NOT NULL AUTO_INCREMENT,
  `supl_name` Varchar(45),
  `supl_note` Varchar(1024),
  `supl_street` Varchar(45),
  `supl_city_code` Varchar(10),
  `supl_phone` Varchar(20),
  `supl_mobile` Varchar(20),
  `supl_fax` Varchar(20),
  `supl_mail` Varchar(45),
  `supl_state` Varchar(1),
  `supl_city_id` Int,
  PRIMARY KEY (`supl_id`)
)
;

CREATE INDEX `IX_Relationship5` ON `supplier` (`supl_city_id`)
;

-- Table room

CREATE TABLE `room`
(
  `room_id` Int NOT NULL AUTO_INCREMENT,
  `room_number` Varchar(5),
  `room_description` Varchar(45),
  `room_note` Varchar(1024),
  `room_state` Varchar(1),
  PRIMARY KEY (`room_id`)
)
;

-- Table component_type

CREATE TABLE `component_type`
(
  `coty_id` Int NOT NULL AUTO_INCREMENT,
  `coty_name` Varchar(45),
  PRIMARY KEY (`coty_id`)
)
;

-- Table city

CREATE TABLE `city`
(
  `city_id` Int NOT NULL AUTO_INCREMENT,
  `city_name` Varchar(45),
  `city_created` Char(20),
  `city_cont_id` Int,
  PRIMARY KEY (`city_id`)
)
;

CREATE INDEX `cont_city_IX` ON `city` (`city_cont_id`)
;

-- Table country

CREATE TABLE `country`
(
  `cont_id` Int NOT NULL AUTO_INCREMENT,
  `cont_name` Varchar(45),
  `cont_created` Datetime
 COMMENT 'admin field',
  PRIMARY KEY (`cont_id`)
)
;

-- Table component_attribute

CREATE TABLE `component_attribute`
(
  `coat_id` Int NOT NULL AUTO_INCREMENT,
  `coat_name` Varchar(45),
  `coat_state` Varchar(1),
  PRIMARY KEY (`coat_id`)
)
;

-- Table coty_coat

CREATE TABLE `coty_coat`
(
  `coco_id` Int NOT NULL AUTO_INCREMENT,
  `coco_coat_id` Int,
  `coco_coty_id` Int,
  PRIMARY KEY (`coco_id`)
)
;

CREATE INDEX `IX_Relationship7` ON `coty_coat` (`coco_coat_id`)
;

CREATE INDEX `IX_Relationship8` ON `coty_coat` (`coco_coty_id`)
;

-- Table comp_coat

CREATE TABLE `comp_coat`
(
  `coca_id` Int NOT NULL AUTO_INCREMENT,
  `coca_value` Varchar(255),
  `comp_id` Int,
  `coat_id` Int,
  PRIMARY KEY (`coca_id`)
)
;

CREATE INDEX `IX_Relationship10` ON `comp_coat` (`comp_id`)
;

CREATE INDEX `IX_Relationship12` ON `comp_coat` (`coat_id`)
;

-- Table comp_room_software

CREATE TABLE `comp_room_software`
(
  `crso_id` Int NOT NULL AUTO_INCREMENT,
  `comp_id` Int,
  `room_id` Int,
  PRIMARY KEY (`crso_id`)
)
;

CREATE INDEX `IX_Relationship15` ON `comp_room_software` (`comp_id`)
;

CREATE INDEX `IX_Relationship16` ON `comp_room_software` (`room_id`)
;

-- Table user

CREATE TABLE `user`
(
  `user_id` Int NOT NULL AUTO_INCREMENT,
  `user_name` Varchar(45) NOT NULL,
  `user_state` Varchar(1),
  `user_usro_id` Int,
  PRIMARY KEY (`user_id`)
)
;

CREATE INDEX `IX_Relationship17` ON `user` (`user_usro_id`)
;

ALTER TABLE `user` ADD UNIQUE `user_name` (`user_name`)
;

-- Table user_role

CREATE TABLE `user_role`
(
  `usro_id` Int NOT NULL AUTO_INCREMENT,
  `usro_name` Varchar(45),
  PRIMARY KEY (`usro_id`)
)
;

-- Table permission

CREATE TABLE `permission`
(
  `perm_id` Int NOT NULL AUTO_INCREMENT,
  `perm_name` Varchar(45),
  PRIMARY KEY (`perm_id`)
)
;

-- Table usro_perm

CREATE TABLE `usro_perm`
(
  `uspe_id` Int NOT NULL AUTO_INCREMENT,
  `usro_id` Int,
  `perm_id` Int,
  PRIMARY KEY (`uspe_id`)
)
;

CREATE INDEX `IX_Relationship18` ON `usro_perm` (`usro_id`)
;

CREATE INDEX `IX_Relationship19` ON `usro_perm` (`perm_id`)
;

-- Create foreign keys (relationships) section -------------------------------------------------

ALTER TABLE `component` ADD CONSTRAINT `supl_comp` FOREIGN KEY (`comp_supl_id`) REFERENCES `supplier` (`supl_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `component` ADD CONSTRAINT `room_comp` FOREIGN KEY (`comp_room_id`) REFERENCES `room` (`room_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `city` ADD CONSTRAINT `cont_city` FOREIGN KEY (`city_cont_id`) REFERENCES `country` (`cont_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `supplier` ADD CONSTRAINT `Relationship5` FOREIGN KEY (`supl_city_id`) REFERENCES `city` (`city_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `coty_coat` ADD CONSTRAINT `Relationship7` FOREIGN KEY (`coco_coat_id`) REFERENCES `component_attribute` (`coat_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `coty_coat` ADD CONSTRAINT `Relationship8` FOREIGN KEY (`coco_coty_id`) REFERENCES `component_type` (`coty_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `component` ADD CONSTRAINT `Relationship9` FOREIGN KEY (`comp_coty_id`) REFERENCES `component_type` (`coty_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `comp_coat` ADD CONSTRAINT `Relationship10` FOREIGN KEY (`comp_id`) REFERENCES `component` (`comp_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `comp_coat` ADD CONSTRAINT `Relationship12` FOREIGN KEY (`coat_id`) REFERENCES `component_attribute` (`coat_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `comp_room_software` ADD CONSTRAINT `Relationship15` FOREIGN KEY (`comp_id`) REFERENCES `component` (`comp_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `comp_room_software` ADD CONSTRAINT `Relationship16` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `user` ADD CONSTRAINT `Relationship17` FOREIGN KEY (`user_usro_id`) REFERENCES `user_role` (`usro_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `usro_perm` ADD CONSTRAINT `Relationship18` FOREIGN KEY (`usro_id`) REFERENCES `user_role` (`usro_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `usro_perm` ADD CONSTRAINT `Relationship19` FOREIGN KEY (`perm_id`) REFERENCES `permission` (`perm_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


