create table 2s2h_news(
    id int primary key auto_increment,
    title varchar(25)not null,
    author varchar(25)not null,
    article varchar(1000)not null,
    time timestamp not null
)Engine=InnoDB;
