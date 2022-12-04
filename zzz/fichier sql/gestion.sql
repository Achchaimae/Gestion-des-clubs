create database gestion3;
use gestion3;

create table club(
id int not null auto_increment,
primary key(id),
nom varchar(100),
membres int,
logo blob,
date_creation  date,
description text,
rep int
);

create table evenement (
id int not null auto_increment primary key,
id_club int,
foreign key (id_club) references club(id) ON DELETE CASCADE ,
nom varchar(100),
event_date date,
lieu varchar(100),
description text
);

create table admin(
id int not null auto_increment primary key,
login varchar(100),
password text
);
create table demande(
id_demande int not null auto_increment,
primary key(id_demande),
nom_complet varchar(100),
class varchar(100),
age int,
email varchar(100),
id_club int,
foreign key (id_club) references club(id) ON DELETE CASCADE
);

create table ToDo(
id int not null auto_increment primary key,
task text
);

create table membre(
id_membre int not null auto_increment,
primary key(id_membre),
nom_complet varchar(100),
class varchar(100),
age int,
email varchar(100),
membre_role varchar(100),
id_club int ,
foreign key (id_club) references club(id) ON DELETE CASCADE
);


