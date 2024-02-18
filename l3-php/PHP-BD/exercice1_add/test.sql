-- LANGAGE DE REQUETES STRUCTUREES :
-- ldd :  create alter et drop 
-- lmd : insert , update et delete 
-- LID : select
-- afficher le nombre d'employee pour 
-- chaque departement (group by)
-- on n'affiche que les departements ayant 3 ou plus 
-- d'employe
-- LOGIN : SYSTEM, PWD : oracle 
SELECT departement_id, COUNT(*) FROM employee
WHERE nom LIKE '%a%' or  nom LIKE '%d%'
GROUP  BY departement_id
HAVING  COUNT(*) >=3
