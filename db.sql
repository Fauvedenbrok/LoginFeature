CREATE TABLE Users (
    `Email` VARCHAR (100) NOT NULL PRIMARY KEY,
    `Password` VARCHAR(255) NOT NULL,
    `Account status` BOOLEAN DEFAULT NULL,
    `Account Access Rights` ENUM ('Customer', 'Partner', 'Admin'),
    `Created at` DATETIME NOT NULL  DEFAULT CURRENT_TIME
);

