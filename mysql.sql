create database test;
drop database test;

create table person(id int, first_name varchar(50), last_name varchar(50), gender varchar(50));
alter table person add email varchar(50);
alter table person drop column email;
alter table person rename column first_name to firstName;
alter table person modify column first_name integer;
drop table person;