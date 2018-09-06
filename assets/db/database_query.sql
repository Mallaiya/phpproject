user_database;

create table user_credentials(
	fullname varchar(30) not null,
    email varchar(100) not null primary key,
    username varchar(30) not null,
    gender char(6) not null,
    phonenumber bigint(10) not null unique,
    password varchar(30) not null,
    registerdatetime datetime
);