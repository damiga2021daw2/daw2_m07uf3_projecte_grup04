use mysql;
create user 'admin'@'localhost' identified by "Fjeclot21@";
drop database if exists gong;
create database gong;
use gong;
grant all privileges on gong.* to 'admin'@'localhost';
