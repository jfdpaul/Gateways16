#name of csv  : venues.csv
#format       : v_id,name

use gateways;

#DROP TABLE
drop table venues;

#CREATE TABLE
create table venues(v_id int(2) primary key auto_increment, name varchar(60));

#INSERT DATA  FROM CSV FILE

LOAD DATA INFILE 'venues.csv'
INTO TABLE discounts
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;
