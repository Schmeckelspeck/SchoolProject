/*
Created: 22/07/2019
Modified: 23/07/2019
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
  `comp_warranty_length` Int,
  `comp_purchase_date` Datetime,
  `comp_supl_id` Int,
  `comp_room_id` Int,
  `comp_coty_id` Int,
  PRIMARY KEY (`comp_id`)
)
;

CREATE INDEX `comp_supl_IX` ON `component` (`comp_supl_id`)
;

CREATE INDEX `comp_room_IX` ON `component` (`comp_room_id`)
;

CREATE INDEX `comp_coty_IX` ON `component` (`comp_coty_id`)
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

CREATE INDEX `supl_city_IX` ON `supplier` (`supl_city_id`)
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
  `city_cont_id` Int,
  PRIMARY KEY (`city_id`)
)
;

CREATE INDEX `city_cont_IX` ON `city` (`city_cont_id`)
;

-- Table country

CREATE TABLE `country`
(
  `cont_id` Int NOT NULL AUTO_INCREMENT,
  `cont_name` Varchar(45),
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

CREATE INDEX `coco_coat_IX` ON `coty_coat` (`coco_coat_id`)
;

CREATE INDEX `coco_coty_IX` ON `coty_coat` (`coco_coty_id`)
;

-- Table comp_coat

CREATE TABLE `comp_coat`
(
  `coca_id` Int NOT NULL AUTO_INCREMENT,
  `coca_value` Varchar(255),
  `coca_comp_id` Int,
  `coca_coat_id` Int,
  PRIMARY KEY (`coca_id`)
)
;

CREATE INDEX `coca_comp_IX` ON `comp_coat` (`coca_comp_id`)
;

CREATE INDEX `coca_coat_IX` ON `comp_coat` (`coca_coat_id`)
;

-- Table comp_room_software

CREATE TABLE `comp_room_software`
(
  `crso_id` Int NOT NULL AUTO_INCREMENT,
  `crso_comp_id` Int,
  `crso_room_id` Int,
  PRIMARY KEY (`crso_id`)
)
;

CREATE INDEX `IX_Relationship15` ON `comp_room_software` (`crso_comp_id`)
;

CREATE INDEX `IX_Relationship16` ON `comp_room_software` (`crso_room_id`)
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

CREATE INDEX `user_usro_id` ON `user` (`user_usro_id`)
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
  `uspe_usro_id` Int,
  `uspe_perm_id` Int,
  PRIMARY KEY (`uspe_id`)
)
;

CREATE INDEX `upse_usro_IX` ON `usro_perm` (`uspe_usro_id`)
;

CREATE INDEX `uspe_perm_id` ON `usro_perm` (`uspe_perm_id`)
;

-- Create foreign keys (relationships) section -------------------------------------------------

ALTER TABLE `component` ADD CONSTRAINT `supl_comp` FOREIGN KEY (`comp_supl_id`) REFERENCES `supplier` (`supl_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `component` ADD CONSTRAINT `room_comp` FOREIGN KEY (`comp_room_id`) REFERENCES `room` (`room_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `city` ADD CONSTRAINT `cont_city` FOREIGN KEY (`city_cont_id`) REFERENCES `country` (`cont_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `supplier` ADD CONSTRAINT `city_supl` FOREIGN KEY (`supl_city_id`) REFERENCES `city` (`city_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `coty_coat` ADD CONSTRAINT `coat_coco` FOREIGN KEY (`coco_coat_id`) REFERENCES `component_attribute` (`coat_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `coty_coat` ADD CONSTRAINT `coty_coco` FOREIGN KEY (`coco_coty_id`) REFERENCES `component_type` (`coty_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `component` ADD CONSTRAINT `coty_comp` FOREIGN KEY (`comp_coty_id`) REFERENCES `component_type` (`coty_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `comp_coat` ADD CONSTRAINT `comp_coca` FOREIGN KEY (`coca_comp_id`) REFERENCES `component` (`comp_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `comp_coat` ADD CONSTRAINT `coat_coca` FOREIGN KEY (`coca_coat_id`) REFERENCES `component_attribute` (`coat_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `comp_room_software` ADD CONSTRAINT `comp_crso` FOREIGN KEY (`crso_comp_id`) REFERENCES `component` (`comp_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `comp_room_software` ADD CONSTRAINT `room_crso` FOREIGN KEY (`crso_room_id`) REFERENCES `room` (`room_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `user` ADD CONSTRAINT `usro_user` FOREIGN KEY (`user_usro_id`) REFERENCES `user_role` (`usro_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `usro_perm` ADD CONSTRAINT `usro_uspe` FOREIGN KEY (`uspe_usro_id`) REFERENCES `user_role` (`usro_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `usro_perm` ADD CONSTRAINT `perm_uspe` FOREIGN KEY (`uspe_perm_id`) REFERENCES `permission` (`perm_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;




