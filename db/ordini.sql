create table 2s2h_orders_ordini(
    id serial primary key,
    email varchar(200),
    gameslots int,
    private bool,
    tsslots int,
    
    nextpayment date,
    time timestamp not null,
    
    FOREIGN KEY (email) REFERENCES 2s2h_orders_clienti(email)
)Engine=InnoDB;
