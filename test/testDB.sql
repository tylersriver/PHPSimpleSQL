create database test;

use test;

create table testUser (
    id int(11) auto_increment primary key,
    firstName varchar(256) not null default '',
    lastName varchar(256) not null default '',
    userName varchar(256) not null default '',
    startDate datetime not null default current_timestamp,
    isActive tinyint(1) not null default 1
);