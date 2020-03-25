CREATE TABLE `Category` (
  `ID` integer PRIMARY KEY AUTO_INCREMENT,
  `Parent_ID` integer,
  `Name` varchar(255),
  `Picture` varchar(255),
  INDEX (Parent_ID),
  FOREIGN KEY (Parent_ID)
    REFERENCES Category(ID)
);

CREATE TABLE `Product` (
  `ID` integer PRIMARY KEY AUTO_INCREMENT,
  `Name` varchar(255),
  `Description` varchar(3000),
  `Created_At` datetime,
  `Edited_At` datetime COMMENT 'Last edit',
  `Category_ID` integer,
  `Quantitiy` integer,
  `Price` decimal(10,2),
  INDEX (Category_ID),
  FOREIGN KEY (Category_ID)
    REFERENCES Category(ID)
)ENGINE = InnoDB;

CREATE TABLE `User` (
  `ID` integer PRIMARY KEY AUTO_INCREMENT,
  `Username` varchar(255),
  `Password` varchar(255),
  `Email` varchar(255),
  `First_Name` varchar(255),
  `Last_Name` varchar(255),
  `Phone_Number` varchar(255),
  `City` varchar(255),
  `Address` varchar(255),
  `Postal_Code` varchar(255)
);

CREATE TABLE `Orders` (
  `ID` integer PRIMARY KEY AUTO_INCREMENT,
  `User_ID` integer,
  `Created_At` datetime,
  `First_Name` varchar(255),
  `Last_Name` varchar(255),
  `Phone_Number` varchar(255),
  `City` varchar(255),
  `Address` varchar(255),
  `Postal_Code` varchar(255),
  INDEX (User_ID),
  FOREIGN KEY (User_ID)
    REFERENCES User(ID)
);

CREATE TABLE `Order_Description` (
  `Order_ID` integer,
  `Product_ID` integer,
  `Quantitiy` integer,
  `Price` integer,
  INDEX (Order_ID),
  FOREIGN KEY (Order_ID)
    REFERENCES Orders(ID)
  INDEX (Product_ID),
  FOREIGN KEY (Product_ID)
    REFERENCES Product(ID)
)ENGINE=INNODB;

