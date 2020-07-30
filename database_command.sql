SHOW DATABASES;
CREATE DATABASE ease_assigment;
USE DATABASE ease_assigment;
CREATE TABLE users(
	id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(255) NOT NULL,
	email VARCHAR(255),
	phno INT,
	password VARCHAR(255),
	country VARCHAR(255) NOT NULL,
	PRIMARY KEY(id)
	);

CREATE TABLE assignment_details(
	id INT NOT NULL AUTO_INCREMENT,
	topic VARCHAR(255) NOT NULL,
	subject VARCHAR(255) NOT NULL,
	description VARCHAR(1500),
	words INT NOT NULL,
	pages INT NOT NULL,
	deadline_date VARCHAR(255) NOT NULL,
	deadline_time VARCHAR(255) NOT NULL,
	user_id INT NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(user_id) REFERENCES users(id)
	);
	
 CREATE TABLE admins (
    id INT NOT NULl AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
    );

