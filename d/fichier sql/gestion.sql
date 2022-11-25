create database gestion2;
use gestion2;

create table club(
id int not null auto_increment,
primary key(id),
nom varchar(20),
membres int,
logo blob,
date_creation  date,
description text,
rep int
);

create table evenement (
id int not null auto_increment primary key,
id_club int not null,
foreign key (id_club) references club(id),
nom varchar(20),
event_date date,
lieu varchar(20),
description text
);

create table admin(
id int not null auto_increment primary key,
login varchar(20),
password text
);
create table demande(
id_demande int not null auto_increment,
primary key(id_demande),
nom_complet varchar(20),
class varchar(20),
age int,
email varchar(20),
id_club int,
foreign key (id_club) references club(id)
);

create table ToDo(
id int not null auto_increment primary key,
task text
);

create table membre(
id_membre int not null auto_increment,
primary key(id_membre),
nom_complet varchar(20),
class varchar(20),
age int,
email varchar(20),
membre_role varchar(20),
id_club int ,
foreign key (id_club) references club(id) ON DELETE SET NULL
);


