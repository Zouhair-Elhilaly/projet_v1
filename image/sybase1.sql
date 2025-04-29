show databases;
create database projet_web;
use projet_web;

create table etudiant(
	id_etudiant	INT primary key	 unique,
    nom	VARCHAR(50) not null,
	prenom	VARCHAR(50) not null,
	date_naissance	DATE not null,
    tel_e decimal ,
    email	VARCHAR(50) not null,
    password varchar(50) not null,
    Num_insc int(11) 
   );
   
   create table module(
		id_module	INT primary key,
		nom_module	VARCHAR(50),
		code_module	VARCHAR(20) , -- FRT7YT
		coefficient int
        );
	
create table note(
	id_note	INT primary key,
	id_etudiant	INT  , -- (FK)	Référence à l’étudiant
	id_module	INT , -- (FK)	Référence au module
	note	FLOAT	, -- La note obtenue ex:13.5
	session_note	VARCHAR(20) not null  -- 	Session (ex: normale, rattrapage)
    );
    
    alter table note add id_admin int;
    
create table admin_ET(
	id_admin	INT primary key ,
    nom_admin	VARCHAR(50) not null,
	password_admin 	VARCHAR(50) not null
    );
    
    
    
    -- fin de la creation des table de ma base de donnee 
    
    show tables;
    
    desc admin_et;
    desc etudiant;
    desc module;
    desc  note;
    
alter table admin_et add id_et int;
    select * from etudiant;
    alter table module add id_etudiant int ;
    alter table module add id_note int;
    alter table etudiant add id_module int;
    alter table module drop id_etudiant ;
    
    -- start foreign key principlal 
    
    alter table module add constraint FK_mdl_Note foreign key(id_note) references note(id_note) on update cascade on delete restrict;
    alter table etudiant add constraint FK_Et_mdl foreign key(id_module) references module(id_module) on update cascade on delete restrict;
    alter table admin_et add constraint FK_admin_et foreign key(id_etudiant) references etudiant(id_etudiant) on update cascade on delete restrict;
    
    -- start foreign key principlal 
    
    show create table note;
    -- create foreign key 
    
  

-- alter table note add constraint FK_note_module foreign key(id_module) references module(id_module);
    
    -- create foeign key admin par tout les table de gestion 
    -- note	id_admin	admin(id_admin)	Admin qui a saisi/modifié la note
-- etudiant	cree_par_admin	admin(id_admin)	Admin qui a enregistré l’étudiant
-- module	cree_par_admin	admin(id_admin)	Admin qui a ajouté le module 
-- 
  --   
  -- alter table note add constraint FK_note_admin foreign key(id_admin) references admin_ET(id_admin);
  
  
  -- un autre modification
  use projet_web;
  show tables;
  select * from admin_et;
  select * from etudiant;
  ALTER TABLE `admin_et` DROP FOREIGN KEY `FK_admin_ET`; ALTER TABLE `admin_et` ADD CONSTRAINT `FK_admin_ET` FOREIGN KEY (`id_et`) REFERENCES `etudiant`(`id_etudiant`) ON DELETE CASCADE ON UPDATE CASCADE; 