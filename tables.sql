create database vinumauri;
use vinumauri;


create table products (
    id int auto_increment primary key,
    productType varchar(255),
    name varchar(255),
    vintage varchar(255),
    wineType varchar(255),
    price decimal(7,2),
    quantityInStock int,
    productImg varchar(255)
);

insert into products (productType, name, wineType, price, productImg) values
    ('club','Vinum Auri Wine Club', 'Cabernet Sauvignon', 1200.00,'wineclub.png');

insert into products (productType, name, vintage, wineType, price, quantityInStock, productImg) values
    ('wine', '1 bottle', '2010', 'Cabernet Sauvignon', 150.00, 50, '2010vinumauricabernetsauvignon.png'),
    ('wine', '1 bottle', '2011', 'Cabernet Sauvignon', 125.00, 500, '2011vinumauricabernetsauvignon.png');

insert into products (productType, name, vintage, wineType, price, quantityInStock, productImg) values
    ('wine', '1 case', '2011', 'Cabernet Sauvignon', 1500.00, 40, '2011vinumauricase.png');

insert into products (productType, name, price, quantityInStock, productImg) values
    ('storage','Mahogany 2 Bottle Wine Chest w/ Custom Key', 99.00, 35, 'winechest.png');


create table users (
    id int auto_increment primary key,
    email varchar(255),
	password varchar(255),
    firstName varchar(255),
    lastName varchar(255),
    address1 varchar(255),
    address2 varchar(255),
    city varchar(255),
    state varchar(255),
    postalCode varchar(255),
    phone varchar(255),
    clubMember int,
    remember_token varchar(255),
	created_at datetime,
	updated_at datetime
);

insert into users (email, password, firstName, lastName, address1, address2, city, state, postalCode, phone) values
    ('john.shockey@gmail.com', 'wineguy123', 'John', 'Shockey', '500 North Lake Shore Dr.', '#2004', 'Chicago', 'Illinois', '60611', '847-913-3550');


create table orders (
    orderID int auto_increment primary key,
    userID int,
    orderDate datetime,
    total decimal(7,2),
    shipping varchar(255),
    tax int,
    shippedDate datetime,
    billingDobMonth varchar(255),
    billingDobDay varchar(255),
    billingDobYear varchar(255),
    billingFirstName varchar(255),
    billingLastName varchar(255),
    billingAddress1 varchar(255),
    billingAddress2 varchar(255),
    billingCity varchar(255),
    billingState varchar(255),
    billingZipCode varchar(255),
    billingPhone varchar(255),
    billingEmail varchar(255),
    shippingDobMonth varchar(255),
    shippingDobDay varchar(255),
    shippingDobYear varchar(255),
    shippingFirstName varchar(255),
    shippingLastName varchar(255),
    shippingAddress1 varchar(255),
    shippingAddress2 varchar(255),
    shippingCity varchar(255),
    shippingState varchar(255),
    shippingZipCode varchar(255),
    shippingPhone varchar(255),
    shippingEmail varchar(255)
);


create table orderDetails (
    orderID int,
    productID int,
    unitPrice decimal(7,2),
    quantity int,
    discountPct float
);


create table payments (
    orderID int,
    paymentID int,
    status int,
    creditCardLast4 char(4)
);


create table tastings (
    tastingID int auto_increment primary key,
    address1 varchar(255),
    address2 varchar(255),
    city varchar(255),
    state varchar(255),
    postalCode varchar(255),
    tastingDate date,
    capacity int
);


create table rsvp (
    userID int,
    tastingID int,
    numPeople int
);