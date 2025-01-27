CREATE TABLE Users (
    id INT PRIMARY KEY,
    Name VARCHAR(100),
    Email VARCHAR(100)
);

CREATE TABLE Profiles (
    id INT PRIMARY KEY,
    Bio TEXT,
    Website VARCHAR(255)
);

CREATE TABLE Orders (
    id INT PRIMARY KEY,
    OrderDate DATE,
    TotalAmount DECIMAL(10, 2)
);

CREATE TABLE Products (
    id INT PRIMARY KEY,
    Name VARCHAR(100),
    Price DECIMAL(10, 2)
);


CREATE TABLE OrderProducts (
    id INT PRIMARY KEY,
    Quantity INT
);
