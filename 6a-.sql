CREATE TABLE `arkademy`.`product` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR NOT NULL , `price` INT NOT NULL , `id_category` TINYINT NOT NULL , 
`id_cashier` TINYINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `arkademy`.`category` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(8) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `arkademy`.`cashier` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(64) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `product` (`id`, `name`, `price`, `id_category`, `id_cashier`) VALUES (NULL, 'Latte', '10000', '2', '1'),
(NULL, 'Cake', '20000', '1', '2'), (NULL, 'Black Forest', '50000', '1', '3');

INSERT INTO `category` (`id`, `name`) VALUES (NULL, 'Food'), (NULL, 'Drink');

INSERT INTO `cashier` (`id`, `name`) VALUES (NULL, 'Pevita Pearce'), (NULL, 'Raisa Andriana'), (NULL, 'Igor Muhammad Farhan');


