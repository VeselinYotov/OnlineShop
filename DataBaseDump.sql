CREATE TABLE `category` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `parent_id` integer,
  `name` varchar(255),
  `picture` varchar(255),
  INDEX (parent_id),
  FOREIGN KEY (parent_id)
    REFERENCES category(id)
);

CREATE TABLE `product` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `description` varchar(3000),
  `created_at` datetime,
  `edited_at` datetime,
  `category_id` integer,
  `quantitiy` integer,
  `price` decimal(10,2),
  INDEX (category_id),
  FOREIGN KEY (category_id)
    REFERENCES category(id)
);

CREATE TABLE `user` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `password` varchar(255),
  `email` varchar(255),
  `first_name` varchar(255),
  `last_name` varchar(255),
  `phone_number` varchar(255),
  `city` varchar(255),
  `address` varchar(255),
  `postal_code` varchar(255)
);

CREATE TABLE `orders` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `user_id` integer,
  `created_at` date,
  `first_name` varchar(255),
  `last_name` varchar(255),
  `phone_number` varchar(255),
  `city` varchar(255),
  `address` varchar(255),
  `postal_code` varchar(255),
  `order_sum` decimal(10,2),
  INDEX (user_id),
  FOREIGN KEY (user_id)
    REFERENCES user(id)
);

CREATE TABLE `order_items` (
  `order_id` integer,
  `product_id` integer,
  `quantitiy` integer,
  `price` integer,
  INDEX (order_id),
  FOREIGN KEY (order_id)
    REFERENCES orders(id),
  INDEX (product_id),
  FOREIGN KEY (product_id)
    REFERENCES product(id)
);

