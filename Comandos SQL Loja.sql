create database loja;
use loja;

create table produtos (
id integer auto_increment,
nome varchar(255), 
preco decimal(10,2),
descricao text,
categoria_id integer default 1,
usado boolean default 0,
PRIMARY KEY (`id`),
UNIQUE KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET= Latin1;


insert into produtos (nome, preco, descricao) values ("Carro", 20000, "descricaoo produtos");
insert into produtos (nome, preco, descricao) values ("Motocicleta", 10000, "descricao produtos");
insert into produtos (nome, preco, descricao) values ("Bicicleta", 300, "descricaoo produtos");

create table categorias (
id integer auto_increment,
nome varchar(255), 
UNIQUE KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET= Latin1;

insert into categorias (nome) values ("esporte"), ("escolar"), ("mobilidade"); 
insert into categorias (nome) values ("guloseimas"); 


-- a partir daqui...


create table usuarios (
id integer auto_increment primary key, 
email varchar(255),
senha varchar(255),
UNIQUE KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET= Latin1;

insert into usuarios (email, senha) values ("gugamelo54@gmail.com", "e10adc3949ba59abbe56e057f20f883e");


select * from produtos;
select * from usuarios;
select * from categorias;

select p.*, c.nome as categoria_nome from produtos as p join categorias as c on c.id = p.categoria_id;
