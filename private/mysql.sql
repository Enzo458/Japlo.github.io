create table productos(
    ID int not null AUTO_INCREMENT, 
    NomP VARCHAR(50) not null,
    DesP VARCHAR(200) not null,
    PrecioP int not null,
    Disponible int not null,
    PRIMARY KEY(ID)
);

ALTER table add RutaP VARCHAR(200);

INSERT INTO productos (NomP, DesP, PrecioP, Disponible, RutaP)
VALUES ("Cartuchera","x",100,1,"cartu.png"),
("Guardapolvo","x",500,1,"Gp.png"),
("Porta cepillo","x",100,1,"Pc.png");
