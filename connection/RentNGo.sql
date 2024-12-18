create database RentNGo;
use RentNGo;
create table users(userid INT primary key auto_increment,fullname VARCHAR(255),mail VARCHAR(255) UNIQUE,pwsd VARCHAR(255));
insert into users values(1,"Tharushi Madhushani","tharushimadushani@gmail.com","abc123"), (2,"Piyal Sanjeewa","psanjeewa@gmail.com","abc124"),(3,"M.Priyadharshani","priyadharshain@gmail.com","abc125");


mysql  -h 127.0.0.1 -P 3306 -u root -p