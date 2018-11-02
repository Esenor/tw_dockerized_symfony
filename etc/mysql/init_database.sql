CREATE DATABASE symfony;
CREATE USER 'symfony' IDENTIFIED BY 'changeIt';
grant all privileges on *.* to symfony;
FLUSH PRIVILEGES;