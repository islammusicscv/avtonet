CREATE TABLE `users`
(
  `id` Int NOT NULL AUTO_INCREMENT,
  `first_name` Varchar(100) NOT NULL,
  `last_name` Varchar(200) NOT NULL,
  `email` Varchar(200) NOT NULL,
  `pass` Varchar(255) NOT NULL,
  `phone` Varchar(50) NOT NULL,
  `city_id` Int NOT NULL,
  `date_add` Timestamp NOT NULL,
  `date_modify` Timestamp NOT NULL,
  PRIMARY KEY (`id`)
)
;

CREATE INDEX `IX_Relationship1` ON `users` (`city_id`)
;

ALTER TABLE `users` ADD UNIQUE `email` (`email`)
;

-- Table cities

CREATE TABLE `cities`
(
  `id` Int NOT NULL AUTO_INCREMENT,
  `title` Varchar(200) NOT NULL,
  `post_number` Varchar(20),
  `date_add` Timestamp NOT NULL,
  `date_modify` Timestamp NOT NULL,
  PRIMARY KEY (`id`)
)
;

-- Table adds

CREATE TABLE `adds`
(
  `id` Int NOT NULL AUTO_INCREMENT,
  `title` Varchar(200),
  `date_start` Timestamp NOT NULL,
  `date_end` Timestamp NOT NULL,
  `description` Text,
  `price` Float,
  `date_add` Timestamp NOT NULL,
  `date_modify` Timestamp NOT NULL,
  `user_id` Int NOT NULL,
  `car_id` Int NOT NULL,
  PRIMARY KEY (`id`)
)
;

CREATE INDEX `IX_Relationship2` ON `adds` (`user_id`)
;

CREATE INDEX `IX_Relationship5` ON `adds` (`car_id`)
;

-- Table cars

CREATE TABLE `cars`
(
  `id` Int NOT NULL AUTO_INCREMENT,
  `model` Varchar(100) NOT NULL,
  `brand` Varchar(100) NOT NULL,
  `ccm` Int,
  `kw` Int,
  `fuel` Varchar(100),
  `year` Int,
  `km` Int,
  `user_id` Int NOT NULL,
  `date_add` Timestamp NOT NULL,
  `date_modify` Timestamp NOT NULL,
  PRIMARY KEY (`id`)
)
;

CREATE INDEX `IX_Relationship3` ON `cars` (`user_id`)
;

-- Table images

CREATE TABLE `images`
(
  `id` Int NOT NULL AUTO_INCREMENT,
  `title` Varchar(255),
  `url` Varchar(255) NOT NULL,
  `car_id` Int NOT NULL,
  `date_add` Timestamp NOT NULL,
  `date_modify` Timestamp NOT NULL,
  PRIMARY KEY (`id`)
)
;

CREATE INDEX `IX_Relationship4` ON `images` (`car_id`)
;

-- Table comments

CREATE TABLE `comments`
(
  `id` Int(11) NOT NULL AUTO_INCREMENT,
  `content` Text NOT NULL,
  `date_add` Timestamp NOT NULL,
  `date_modify` Timestamp NOT NULL,
  `user_id` Int NOT NULL,
  `add_id` Int NOT NULL,
  PRIMARY KEY (`id`)
)
;

CREATE INDEX `IX_Relationship6` ON `comments` (`user_id`)
;

CREATE INDEX `IX_Relationship8` ON `comments` (`add_id`)
;

-- Create foreign keys (relationships) section -------------------------------------------------

ALTER TABLE `users` ADD CONSTRAINT `Relationship1` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `adds` ADD CONSTRAINT `Relationship2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `cars` ADD CONSTRAINT `Relationship3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `images` ADD CONSTRAINT `Relationship4` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `adds` ADD CONSTRAINT `Relationship5` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `comments` ADD CONSTRAINT `Relationship6` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `comments` ADD CONSTRAINT `Relationship8` FOREIGN KEY (`add_id`) REFERENCES `adds` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


