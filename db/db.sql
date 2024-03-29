drop table if exists flights;
create table flights(id integer primary key autoincrement,flight_name varchar(50), aircraft_type_id integer,price real,from_place varchar(50),to_place varchar(50),counter varchar(30));
drop table if exists bookings;
create table bookings(id integer primary key autoincrement,user_id integer,date date,flight_id integer,status boolean default 1, frequent_flyer_discount real,class_id integer, flight_schedule_id integer,seat_no integer, total_cost integer);
drop table if exists users;
create table users(id integer primary key autoincrement,email varchar(50),password varchar(15),first_name varchar(20),last_name varchar(20),dob date, address varchar(40),passport_details varchar(30),state varchar(30),country varchar(30),is_admin boolean default 0);
drop table if exists special_fares;
drop table if exists flight_classes;
create table flight_classes(id integer primary key autoincrement,class varchar(20),additional_charge real,additional_facilities varchar(40));
drop table if exists aircraft_types;
create table aircraft_types(id integer primary key autoincrement,aircraft_name varchar(60),first_class integer,second_class integer,third_class integer);
drop table if exists flight_schedules;
create table flight_schedules(id integer primary key autoincrement,flight_id integer,day varchar(20),departs datetime,arrives datetime);


