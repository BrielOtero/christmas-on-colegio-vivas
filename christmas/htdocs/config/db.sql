-- Create database Letter
CREATE TABLE letter (
 id int(11) NOT NULL AUTO_INCREMENT,
 toys varchar(200) NOT NULL,
 content varchar(5000) NOT NULL,
 signature varchar(30) NOT NULL,
 PRIMARY KEY (id)
);


-- Create database Toys
CREATE TABLE toys (
 id int(11) NOT NULL AUTO_INCREMENT,
 name varchar(8) NOT NULL,
 description varchar(100) NOT NULL,
 image varchar(500) NOT NULL,
 PRIMARY KEY (id)
);

