create table news(
    id int primary key auto_increment,
    title varchar(25)not null,
    author varchar(25)not null,
    article varchar(1000)not null
)Engine=InnoDB;
