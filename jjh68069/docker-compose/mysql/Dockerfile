FROM mysql
RUN /bin/bash -c "/usr/bin/mysqld_safe --skip-grant-tables &" && \
  sleep 5 && \
  mysql -u root -e "CREATE DATABASE myDb" && \
  mysql -u root -D myDb -e "CREATE TABLE Messages (testdata varchar(255));" && \
  mysql -u root -D myDb -e "INSERT INTO Meessages (testdata) values ('Hello DB Container');"
