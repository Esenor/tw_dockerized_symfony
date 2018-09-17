CREATE DATABASE symfony_app;
CREATE USER 'symfony' IDENTIFIED BY 'changeIt2';
grant all privileges on *.* to symfony;
FLUSH PRIVILEGES;
