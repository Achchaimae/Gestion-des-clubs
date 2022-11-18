create database gestion;
use gestion;
drop table club;
create table club(
id int not null auto_increment,
primary key(id),
nom tinytext,
membres int,
logo blob,
date_creation  date,
description text
);
drop table apprenant; 
create table apprenant(
id_apprenant int not null auto_increment,
primary key(id_apprenant),
nom_complet tinytext,
class tinytext,
age int,
email tinytext
);
drop table evenement;
create table evenement (
id int not null auto_increment primary key,
id_club int not null,
foreign key (id_club) references club(id),
nom tinytext,
event_date date,
lieu tinytext,
description text
);
drop table membre;
create table membre(
id_membre int not null,
foreign key (id_membre) references apprenant(id_apprenant),
 role tinytext,
 id_club int not null,
foreign key (id_club) references club(id)
);
drop table admin;
create table admin(
id int not null auto_increment primary key,
login tinytext,
password text
);
create table demande(
id_demande int not null auto_increment primary key,
id_apprenant int ,
foreign key (id_apprenant) references apprenant(id_apprenant),
state boolean,
club_integre int 
);
create table ToDo(
id int not null auto_increment primary key,
task text
);

