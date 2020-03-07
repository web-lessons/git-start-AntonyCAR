CREATE DATABASE `shop`;

USE `shop `;

CREATE TABLE IF NOT EXISTS `products` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(50) NOT NULL,
    `slug` varchar(50) NOT NULL,
    `img` varchar(255) DEFAULT NULL,
    `description` text DEFAULT NULL,
    `price` int(11) DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoD8 DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `name`, `slug`, `img`, `description`, `price` )VALUES
    (1, 'Товар 1', 'product1', 'https://images-na.ssl-images-amazon.com/images/I/61V9VXalPlL._AC_SX355_.jpg', 'Отличный товар))))', 10000),
    (2, 'Товар 2', 'product2', 'https://images-na.ssl-images-amazon.com/images/I/61V9VXalPlL._AC_SX355_.jpg', 'Отличный товар))))', 10000),
    (3, 'Товар 3', 'product3', 'https://images-na.ssl-images-amazon.com/images/I/61V9VXalPlL._AC_SX355_.jpg', 'Отличный товар))))', 10000),
    (4, 'Товар 4', 'product4', 'https://images-na.ssl-images-amazon.com/images/I/61V9VXalPlL._AC_SX355_.jpg', 'Отличный товар))))', 10000),
    (5, 'Товар 5', 'product5', 'https://images-na.ssl-images-amazon.com/images/I/61V9VXalPlL._AC_SX355_.jpg', 'Отличный товар))))', 10000),
    (6, 'Товар 6', 'product6', 'https://images-na.ssl-images-amazon.com/images/I/61V9VXalPlL._AC_SX355_.jpg', 'Отличный товар))))', 10000),
    (7, 'Товар 7', 'product7', 'https://images-na.ssl-images-amazon.com/images/I/61V9VXalPlL._AC_SX355_.jpg', 'Отличный товар))))', 10000),
    (8, 'Товар 8', 'product8', 'https://images-na.ssl-images-amazon.com/images/I/61V9VXalPlL._AC_SX355_.jpg', 'Отличный товар))))', 10000);