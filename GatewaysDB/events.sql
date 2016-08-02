#name of csv  : events.csv
#format       : e_id,name,description,code_name,start_time,end_time,v_id

use gateways;

#DROP TABLE COLLEGES
drop table events;

#CREATE TABLE COLLEGES
create table events(e_id int(2) primary key auto_increment, name varchar(40),description varchar(200),code_name varchar(20), start_time time,end_time time,v_id);

#INSERT DATA INTO EVENTS FROM CSV FILE

LOAD DATA INFILE 'events.csv'
INTO TABLE discounts
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;
