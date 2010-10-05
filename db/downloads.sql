create table 2s2h_downloads(
    id int primary key auto_increment,
    file varchar(200) not null,
    number int not null default 0
)Engine=InnoDB;
