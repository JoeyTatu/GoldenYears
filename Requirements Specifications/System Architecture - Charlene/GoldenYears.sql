DROP DATABASE IF EXISTS GoldenYears;
CREATE DATABASE GoldenYears;
USE GoldenYears;


CREATE TABLE Location (
	location_id INT NOT NULL,
	location_GPS VARCHAR(50) NOT NULL,
PRIMARY KEY (location_id)
);

CREATE TABLE Customer (
	customer_id INT NOT NULL,
	f_name VARCHAR(45) NOT NULL,
    l_name VARCHAR(45) NULL,
    cust_address VARCHAR(65) NOT NULL,
    location_id INT,
    is_reg BOOLEAN NOT NULL,
PRIMARY KEY (customer_id),
FOREIGN KEY (location_id) REFERENCES Location(location_id)
);

CREATE TABLE Business (
	business_id INT NOT NULL,
    company_name VARCHAR(45) NOT NULL,
    rep_name VARCHAR(45) NOT NULL,
    rep_email VARCHAR(45) NOT NULL,
    rep_number INT NOT NULL,
PRIMARY KEY (business_id)
);

CREATE TABLE Event (
	event_id INT NOT NULL,
    event_type VARCHAR(45) NOT NULL,
    event_location VARCHAR(45),
    location_id INT,
    event_time VARCHAR(45) NOT NULL,
    event_date DATE NOT NULL,
    business_id INT,
PRIMARY KEY (event_id)
);

	
CREATE TABLE Payment (
	payment_id INT NOT NULL,
	transaction_id VARCHAR(65) NOT NULL,
    cash BOOLEAN NULL,
    vendor BOOLEAN NULL,
    confirmation_id VARCHAR(45) NOT NULL,
PRIMARY KEY (payment_id)
);
    
CREATE TABLE Booking (
	booking_id INT NOT NULL,
	event_id  INT NULL,
    transport BOOLEAN NOT NULL,
    payment_id INT,
    customer_id INT,
    business_id INT,
    location_id INT,
PRIMARY KEY (booking_id),
FOREIGN KEY (payment_id) REFERENCES Payment(payment_id),
FOREIGN KEY (customer_id) REFERENCES Customer(customer_id),
FOREIGN KEY (event_id) REFERENCES Event(event_id),
FOREIGN KEY (location_id) REFERENCES Location(location_id),
FOREIGN KEY (business_id) REFERENCES Business(business_id)
);









 
    