CREATE DATABASE MEETSELLS;
USE MEETSELLS;

CREATE TABLE Newsletter (
    Id int primary key auto_increment,
    firstname varchar(70) not null,
    lastname varchar(70) not null,
    email varchar(70) not null,
    date_ajout datetime not null DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Users(
    userID int primary key auto_increment,
    firstname varchar(70) not null,
    lastname varchar(70) not null,
    pseudo varchar(70) not null UNIQUE,
    email varchar(70) not null,
    phoneNumber varchar(15) not null,
    userPassword varchar(17) not null,
    date_ajout datetime not null DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Products(
    pID int primary key auto_increment,
    pName varchar(70) not null,
    pDescription varchar(255) not null,
    pState varchar(70) not null,
    pStock int not null,
    pDeliveryTime int not null,
    pPrice int not null,
    pPromo Float not null,
    date_ajout datetime not null DEFAULT CURRENT_TIMESTAMP,
    ownerId int not null,
    FOREIGN KEY(ownerId) REFERENCES users(userID)
);

CREATE TABLE ProductImages(
    ImageID int primary key auto_increment,
    imgTitle varchar(10),
    img_scr varchar(70) not null,
    imgOwner int not null,
    FOREIGN KEY(imgOwner) REFERENCES Products(pID)
);

CREATE TABLE Messages(
    IdMsg int primary key auto_increment,
    id_destinateur int not null,
    id_recepteur int not null,
    contenu_msg varchar(250) not null,
    date_envoi datetime not null DEFAULT CURRENT_TIMESTAMP ,
    FOREIGN KEY(id_destinateur) REFERENCES users(userID),
    FOREIGN KEY(id_recepteur) REFERENCES users(userID)
);

CREATE TABLE Administrators(
    idAdmin int primary key auto_increment,
    adminPseudo varchar(50) not null,
    adminPassword varchar(50) not null
    );
CREATE TABLE contacts(
    id_owner int not null,
    id_contact int not null,
    date_contact datetime not null DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_owner) REFERENCES Users(userID),
    FOREIGN KEY (id_contact) REFERENCES Users(userID)
);

/*
                FOR TESTS


*/
INSERT INTO Administrators(adminPseudo,adminPassword) VALUES('nelson','nelson');

/*USERS */

INSERT INTO Users(
    firstname  : arsene
    lastname : fogue
    pseudo hyogan
    email tiaghojeux@gmail.com
    phoneNumber +237651858890
    userPassword nelson
    )