create table kirei (
    codmen int not null AUTO_INCREMENT,
    nome  varchar(50) not null,
    apellido varchar(50) not null,
    cedu varchar(12) not null,
    celu varchar(10) not null,
    email varchar(50) not null,

    PRIMARY KEY (codmen)

) ENGINE = InnoDB
CHARACTER SET latin1 COLLATE latin1_spanish_ci;
