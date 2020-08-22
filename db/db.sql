
create table admins(id int primary key,username varchar(20),password varchar(15),email_id varchar(20));
create table flights(id int primary key autoincrement,price real,date varchar(30),from_date varchar(50),to_date varchar(50),counter varchar(30),departs varchar(30),arrives varchar(50));
create table bookings(id int primary key autoincrement,user_id int,status int,discount real);
create table users(id int primary key autoincrement,email_id varchar(20),first_name varchar(20),last_name varchar(20),address varchar(40),passport_details varchar(30),state varchar(30),country varchar(30));