#name of csv  : organizers.csv
#format       : o_id,name,mobile,email,username,password,privilege

use gateways;

#DROP TABLE
drop table organizers;

#CREATE TABLE
create table organizers(o_id int(2) primary key auto_increment, name varchar(60),mobile varchar(10),email varchar(50),username varchar(30),password varchar(50),privilege int(2));

#INSERT DATA  FROM CSV FILE

LOAD DATA INFILE 'organizers.csv'
INTO TABLE discounts
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;
