#name of csv  : rules.csv
#format       : r_id,name,rule,e_id

use gateways;

#DROP TABLE
drop table rules;

#CREATE TABLE
create table rules(r_id int primary key auto_increment, rule varchar(200),e_id int(2));

#INSERT DATA FROM CSV FILE

LOAD DATA INFILE 'rules.csv'
INTO TABLE discounts
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;
