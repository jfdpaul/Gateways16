create database if not exists gateways;

use gateways;

create table organizers(
o_id int(3) not null primary key auto_increment, 
name varchar(30), 
email varchar(45),
mobile varchar(10), 
password varchar(15));

create table venues(v_id int(2) not null primary key auto_increment, 
block varchar(10), 
room varchar(4), 
floor int(2));

create table colleges(col_id int(3) not null primary key auto_increment,
name varchar(40),
state varchar(15), 
city varchar(15));

create table participants( p_id int(4) not null primary key auto_increment, 
first_name varchar(15), 
last_name varchar(10), 
email varchar(15), 
mobile varchar(10),
password varchar(15), 
col_id varchar(15) references colleges(col_id), 
paid int(1) COMMENT '0 - not paid, 1 - paid');

create table events(e_id int(2) not null primary key auto_increment, 
name varchar(20) COMMENT 'eg. Quiz',
description varchar(70), 
o_id int(3) references organizers(o_id), 
v_id int(2) references venues(v_id),
event_date date,
start_time time,
end_time time);

create table rules(r_id int(3) not null primary key auto_increment, 
e_id int(2) references events(e_id), 
rule_order int(2) COMMENT 'order of the rule in event',
rule varchar(40) COMMENT 'clause for event');

create table participants_events(p_id int(4) references participants(p_id),
e_id int(2) references events(e_id), 
marks int , present int(1) COMMENT '0 - absent, 1 - present');
