create database test;
drop database test;

CREATE TABLE person(
    id int NOT NULL AUTO_INCREMENT, 
    first_name varchar(50) NOT NULL, 
    last_name varchar(50) NOT NULL, 
    gender varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    PRIMARY KEY (id)
);

alter table person add email varchar(50);
alter table person add image varchar(100);
alter table person drop column email;
alter table person rename column first_name to firstName;
alter table person modify column first_name integer;
drop table person;

-- group by is mostly used to get count of same summary rows and used in aggregate functions