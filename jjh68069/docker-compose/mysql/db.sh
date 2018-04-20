#!/bin/bash
mysql -u user -pdbsecret -e "GRANT ALL PRIVILEGES ON *.* TO 'root@'%' identified by 'dbsecret' WITH GRANT OPTION;"
mysql -u user -pdbsecret -e "CREATE DATABASE myDb;"
mysql -u user -pdbsecret -D myDb -e 'CREATE TABLE Messages (testdata varchar(255));'
mysql -u user -pdbsecret -D myDb -e "INSERT INTO Messages (testdata) values ('Hello from DB container.');"

