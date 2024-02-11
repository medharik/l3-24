-- LMD : langage de manipulation de donnees : 
-- insert, update et delete 
-- DESC CLASSES
--  select * from classe

-- ajouter une nouvelle ligne (record)

--   INSERT INTO CLASSE(id,nom,NIVEAU,ANNEE_SCOLAIRE,EFFECTIF) 
--   values (seq_id_classe.nextval,'M2 info',4,2024)
    -- INSERT INTO CLASSE  values (seq_id_classe.nextval,'M2 info',50,5,NULL)

-- creer une sequence : 1,2,3 , 10,20,30
--  create SEQUENCE seq_id_classe START WITH 10 INCREMENT by 1 

-- select seq_id_classe.nextval from  dual
-- select 1+2 from dual 

-- supprimer une ligne de la table classe 
--  DELETE FROM ETUDIANTS  where CLASSE_ID=3;
-- delete from CLASSE where nom='di1';
-- select * from CLASSE
-- UPDATE CLASSE  set EFFECTIF=30, ANNEE_SCOLAIRE=2024 where nom='di2'

