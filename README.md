# PHP-and-MySQL-learning-progress
This is PHP learning process directory contain all the code that related to PHP and MySQL.

# MySQL CHEAT SHEET

## Create & Delete & Enter Database :
* CREATE SCHEMA schema_name
* DROP SCHEMA schema_name
* USE schema_name
___

## CREATE TABLES
* CREATE TABLE table_name (column_name type, column_name type,... )
___

## ALTER TABLE_COLUMN
1. __ADD A NEW COLUMN:__ 
* ALTER TABLE table_name ADD COLUMN column_name type;

2. __DROP COLUMN:__
* ALTER TABLE table_name DROP COLUMN column_name;

3. __CHANGE COLUMN NAME:__
* ALTER TABLE table_name CHANGE old_name new_name type;

4. __CHANGE COLUMN TYPE:__ 
* ALTER TABLE table_name MODIFY COLUMN column_name column_type;

5. __ADD A UNIQUE COLUMN:__
* ALTER TABLE table_name ADD UNIQUE (column_name)

6. __DROP A UNIQUE COLUMN:__ 
* ALTER TABLE table_name DROP INDEX column_name
___
## CONSTRAINTS 
* auto_increment 
* not null 
* unique 
* default some_value
___ 
## SELECT 
1. __SELECT ALL__ 
* SELECT * FROM table_name;
2. __SELECT CERTAIN COLUMNS__
* SELECT column_name, column_name FROM table_name;
3. __SELECT CERTAIN COLUMNS OR ALL THE DATA WITH CONDITIONS:__
* SELECT column_name FROM table_name WHERE some_conditions;
4. __SELECT DATA FROM TABLE ORDER BY A COLUMN WITH DESC VAL OR ASC VAL:__
* SELECT * FROM table_name ORDER BY column_name desc
5. __SELECT WITH SUBSTRING CONDITIONS:__
* % will replace everything with no fixed length in a string
* _ will replace one character with fixed length equal to 1
* SELECT * FROM table_name WHERE column_name LIKE '%A';
6. __SELECT WITH COLUMN_VALUE IS EQUAL TO ONE OF THESE VALUE:__
* SELECT * FROM table_name WHERE column_name IN (value1, value2, ...);
7. __SELECT DATA WITH VALUE WITHIN RANGE:__
* SELECT * FROM table_name WHERE column_name BETWEEN value_1 AND value_2;
8. __SELECT DATA IF TRUE OR DON'T SELECT ANYTHING IF FALSE:__
* SELECT * FROM TABLE WHERE EXISTS (SELECT * FROM table_name_2);
* If the second Select return something mean true. If it don't have any result in that second select then false
9. __SELECT WITH SUB-QUERY:__
* SELECT * FROM table_name_1 WHERE mutual_column IN (SELECT mutual_column FROM table_name_2);
___
## FUNCTIONS
1. __Min, Max, Count, Sum, Avg :__
* SELECT min(column_name) as some_name FROM table_name WHERE some_conditions;
* You can replace min with these key word to have different function
___ 
## GROUP BY & HAVING
* GROUP BY will return a new column as the group, HAVING is like WHERE but for GROUP BY
* SELECT column_1, count(column_1) as Counter FROM table_name GROUP BY column_1 HAVING column_1 = some_value;
* This will return a new column as Counter with value is group by. 
___ 
## INSERT, DELETE, MODIFY DATA INTO TABLE:
1. INSERT INTO table_name (column_1, column_2,...) VALUES (value_1, value2);
* You don't need to insert value that is auto_increment or has a default value
2. DELETE FROM table_name WHERE some_conditions;
* If you don't specify WHERE it will delete all data in the table
3. UPDATE table_name SET column_name = value, column_name_2 = value2, WHERE some_conditions
