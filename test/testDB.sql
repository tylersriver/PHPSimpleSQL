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

insert into testUser (firstName, lastName, userName) values ('John', 'Doe', 'john.doe');
insert into testUser (firstName, lastName, userName) values ('James', 'Person', 'james.person');
insert into testUser (firstName, lastName, userName) values ('Tyler', 'Guy', 'tyler.guy');
insert into testUser (firstName, lastName, userName) values ('Steve', 'Stevenson', 'steve.stevenson');