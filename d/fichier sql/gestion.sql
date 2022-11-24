create database gestion;
use gestion;

create table club(
id int not null auto_increment,
primary key(id),
nom tinytext,
membres int,
logo blob,
date_creation  date,
description text
);

create table apprenant(
id_apprenant int not null auto_increment,
primary key(id_apprenant),
nom_complet tinytext,
class tinytext,
age int,
email tinytext
);

create table evenement (
id int not null auto_increment primary key,
id_club int not null,
foreign key (id_club) references club(id) ON DELETE CASCADE  Or 
On delete set  null,
nom tinytext,
event_date date,
lieu tinytext,
description text
);

create table membre(
id_membre int not null,
foreign key (id_membre) references apprenant(id_apprenant),
 role tinytext,
 id_club int not null,
foreign key (id_club) references club(id) ON DELETE CASCADE  Or 
On delete set  null
);

create table amin(
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

