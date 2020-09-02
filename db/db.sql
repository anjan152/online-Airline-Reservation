
create table admins(id integer primary key,username varchar(20),password varchar(15),email varchar(20));
create table flights(id integer primary key autoincrement,aircraft_type_id integer,price real,from_place varchar(50),to_place varchar(50),counter varchar(30));
create table bookings(id integer primary key autoincrement,user_id integer,date date,flight_id integer,status integer, frequent_flyer_discount real,class_id integer,seat_no integer);
create table users(id integer primary key autoincrement,email varchar(20),password varchar(15),first_name varchar(20),last_name varchar(20),address varchar(40),passport_details varchar(30),state varchar(30),country varchar(30));
create table special_fares(id integer primary key,category varchar(30),discount_percentage real);
create table flight_classes(id integer primary key,class varchar(20),additional_charge real,additional_facilities varchar(40));
create table aircraft_types(id integer primary key,seat_capacity integer,first_class integer,second_class integer,third_class integer);
create table flight_schedules(id integer primary key,flight_id integer,day varchar(20),departs datetime,arrives datetime);
