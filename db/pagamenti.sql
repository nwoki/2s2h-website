create table 2s2h_orders_pagamenti(
    id serial primary key,
    ordine serial,
    amount DECIMAL(7,2) default 0,
    months int unsigned default 0,
    data date not null,
    FOREIGN KEY (ordine) REFERENCES 2s2h_orders_ordini(id)
)Engine=InnoDB;
