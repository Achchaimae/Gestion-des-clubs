create database gestion;
use gestion;

create table club(
id int not null auto_increment,
primary key(id),
nom tinytext,
membres int,
logo varchar(1000),
date_creation  date,
description text
);

create table evenement (
id int not null auto_increment primary key,
id_club int not null,
foreign key (id_club) references club(id),
nom tinytext,
event_date date,
lieu tinytext,
description text
);

create table admin(
id int not null auto_increment primary key,
login varchar(10),
password text
);
create table demande(
id_demande int not null auto_increment,
primary key(id_demande),
nom_complet tinytext,
class tinytext,
age int,
email tinytext,
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
nom_complet tinytext,
class tinytext,
age int,
email tinytext,
membre_role tinytext,
 id_club int not null,
foreign key (id_club) references club(id)
);


