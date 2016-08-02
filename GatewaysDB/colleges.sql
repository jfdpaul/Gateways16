#name of csv  : colleges.csv
#format       : col_id,name

use gateways;

#DROP TABLE COLLEGES
drop table colleges;

#CREATE TABLE COLLEGES
create table colleges(col_id int primary key auto_increment, name varchar(60));

#INSERT DATA INTO COLLEGES FROM CSV FILE

LOAD DATA INFILE 'colleges.csv'
INTO TABLE discounts
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;
