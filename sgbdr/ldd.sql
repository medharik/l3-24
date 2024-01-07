-- creer une table 
create table classe (

id NUMBER primary key ,
nom varchar2(50) unique ,
effectif INTEGER ,
niveau FLOAT not null 

)

create table classe (

id NUMBER primary key  ,
nom varchar2(50) unique not null,
effectif INTEGER not null ,
niveau FLOAT ,
constraint ck_niveau check ( niveau >=1 and niveau <=5)


)
-- supprimer une table 
drop table classe 
-- modifier la structure d'une table :
alter table classe  add column specialite varchar2(30);
-- suppression de la colonne niveau 
alter table classe drop column niveau;
-- modifier le type de la colonne effectif en number
alter table classe modify effectif number ;
-- changer le nom de la colonne effectif
alter table classe rename column effectif to nombredinscollege;
-- ajouter une contraintes sur la colonne nombredinscollege
alter table classe add constraint CK_Effectif check (nombredinscollege>=10 and nombredinscollege<=80)
-- SUPPRIMER UNE CONSTRAINTE UNIQUE DE LA COLONNE NOM
alter table classe drop constraint cl01;
alter table classe add annee_scolaire number(4) default 2023
-- inserer une donnees (record) : 
INSERT INTO classe  (id, nom,effectif, niveau)  VALUES (2,'di2',14,2)

-- selectionner toutes les classes :
select * from classe

-- supprimer  des donnees : 
delete from classe where id=2

-- les contraintes des BD : 
-- primary key (cle primaire) :  unique + not null  + index
-- foreign key  : permet d'etablir les relations entre tables 

-- not null : champs obligatoire 
-- unique : pas de doublons
-- check : verifie si des conditions sont vraies (salaire> 3000 ou jours in ('lundi','mardi')) 