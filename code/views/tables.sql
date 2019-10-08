-- Drop Tables===========>
-- SET FOREIGN_KEY_CHECKS = 0;
-- drop table if exists user;
-- drop table if exists company;
-- drop table if exists jobposted;
-- SET FOREIGN_KEY_CHECKS = 1;

-- ************************************** `user` >>
CREATE TABLE `user`
(
 `uid`       INT NOT NULL AUTO_INCREMENT ,
 `fname`     VARCHAR(20) NOT NULL ,
 `lname`     VARCHAR(20) NOT NULL ,
 `email`     VARCHAR(50) NOT NULL ,
 `phone`     VARCHAR(15) NOT NULL ,
 `city`      VARCHAR(45) NOT NULL ,
 `password`  VARCHAR(100) NOT NULL ,
PRIMARY KEY (`uid`)
);

-- ************************************** `company`>>

CREATE TABLE `company`
(
 `cid`       INT NOT NULL AUTO_INCREMENT,
 `cname`     VARCHAR(45) NOT NULL ,
 `email`     VARCHAR(50) NOT NULL ,
 `password`  VARCHAR(100) NOT NULL ,
 `location`  VARCHAR(45) NOT NULL ,
 `city`      VARCHAR(20) NOT NULL ,
  `img`     VARCHAR(50) NOT NULL ,
 `provience` VARCHAR(20) NOT NULL ,
 `country`   VARCHAR(20) NOT NULL ,
 PRIMARY KEY (`cid`)
);

-- ************************************** `Job Posted`>>

CREATE TABLE 'jobposted'
(
 `jid`       INT NOT NULL AUTO_INCREMENT,
 `cid`       INT NOT NULL ,
 `jname`     VARCHAR(45) NOT NULL ,
 `jdescrp`     VARCHAR(500) NOT NULL ,
 `type`  VARCHAR(10) NOT NULL ,
 `skill`      VARCHAR(20) NOT NULL ,
 `keywords` VARCHAR(20) NULL ,
 `time` TIMESTAMP NOT NULL ,
 `zipcode`   INTEGER NOT NULL ,
 `wishlist` INTEGER NULL,
 PRIMARY KEY (`jid`),
 FOREIGN KEY (cid) REFERENCES company(cid)
);


--================== CV Tables ========
