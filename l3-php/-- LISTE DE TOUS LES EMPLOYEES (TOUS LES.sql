--  LISTE DE TOUS LES  EMPLOYEES (TOUS LES ATTRIBUTS) 
-- SELECT * FROM EMPLOYEES
-- selctionner le nom,prenom et le salaire
-- SELECT FIRST_NAME, LAST_NAME,SALARY FROM EMPLOYEES
-- selectionner nom complet ,le salaire , le salaire avec commission 
-- sql oracle concat
-- select FIRST_NAME  || ' '|| LAST_NAME as "NOM COMPLET", SALARY, COMMISSION_PCT , 
-- SALARY + SALARY*NVL(COMMISSION_PCT,0) as SALAIRE_NET

--  FROM   EMPLOYEES
 
-- les employees ayant un salaire  >16000
-- select * from EMPLOYEES where SALARY>16000
-- liste des employees n'ayant pas de commission (COMMISSION_PCT=null)
-- select * from EMPLOYEES where COMMISSION_PCT is   NULL
--  liste des employees par ordre croissant (ASCENDANT : ASC )  de salaire
-- SELECT * FROM EMPLOYEES ORDER BY SALARY ASC;
--  liste des employees par ordre decroissant (DESCENDANT : DESC )  de salaire, et croissant de FIRST_NAME
-- SELECT * FROM EMPLOYEES ORDER BY SALARY DESC, FIRST_NAME ASC;
-- liste des employees qui ont un nom avec 'a'
-- SELECT * FROM EMPLOYEES WHERE UPPER(LAST_NAME) like  '%A%';
-- liste des employees ayant un salaire entre 8000 et 20000
-- SELECT * FROM EMPLOYEES WHERE SALARY >=8000  and  salary<=20000  
-- SELECT * FROM EMPLOYEES WHERE SALARY  BETWEEN 8000 and 20000 

-- liste des poste (JOB_ID)
-- select DISTINCT JOB_ID from EMPLOYEES
-- select FIRST_NAME, LAST_NAME, JOB_ID , case when  JOB_ID='IT_PROG' then 'PROGRAMMEUR' else '*****' end 
-- from EMPLOYEES

-- les fonctions de groupe (agregat) : count(*) , max(salary), min(salary), sum(salary),avg(salary)
-- select count(*) as nombre , max(salary) , min(salary), sum(salary), avg(salary) from EMPLOYEES 
-- nombre d'employes POUR CHAQUE (par) JOB_ID
-- select JOB_ID, count(*) from EMPLOYEES 
-- group by JOB_ID
-- la somme des salaires PAR departement_id
-- select DEPARTMENT_ID, sum(SALARY) 
-- from EMPLOYEES 
-- where DEPARTMENT_ID >80
-- group by  DEPARTMENT_ID
-- having sum(salary) >10000 
-- order by DEPARTMENT_ID asc , sum(SALARY) desc 

-- select * from EMPLOYEES
--  order by LAST_NAME DESC

-- select DEPARTMENT_ID, count(*) from EMPLOYEES
-- GROUP by DEPARTMENT_ID
-- select count(DEPARTMENT_ID) , DEPARTMENT_ID from EMPLOYEES
-- group by DEPARTMENT_ID
-- select DEPARTMENT_ID, avg(SALARY) from EMPLOYEES
-- group by DEPARTMENT_ID
-- having avg(SALARY)>4000
select * from EMPLOYEES 
where UPPER(LAST_NAME) like 'A%' OR UPPER(LAST_NAME) like '%S' 
-- like 'A%S'