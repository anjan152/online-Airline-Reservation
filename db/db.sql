
create table admins(id integer primary key,username varchar(20),password varchar(15),email varchar(20));
create table flights(id integer primary key autoincrement,aircraft_type id integer,price real,date varchar(30),from_date varchar(50),to_date varchar(50),counter varchar(30),departs varchar(30),arrives varchar(50));
create table bookings(id integer primary key autoincrement,user_id integer,flight_id integer,status integer, frequent_flyer_discount real,class_id integer,seat_no integer);
create table users(id integer primary key autoincrement,email varchar(20),first_name varchar(20),last_name varchar(20),address varchar(40),passport_details varchar(30),state varchar(30),country varchar(30));
create table special_fare(id integer primary key,category varchar(30),discount_percentage real);
create table flight_classes(id integer primary key,class varchar(20),additional_charge real,additional_facilities varchar(40));
create table aircraft_type(id integer primary key,seat_capacity integer,first_class integer,second_class integer,third_class integer);