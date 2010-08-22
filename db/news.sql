create table news(
    id varchar(3)primary key,
    title varchar(25)not null,
    author varchar(25)not null,
    article varchar(1000)not null
)Engine=InnoDB;