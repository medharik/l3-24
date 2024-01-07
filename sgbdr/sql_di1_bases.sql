-- liste des employes (toutes les colonnes / ATTRIBUTS)
-- select * from EMPLOYEES
-- liste des employes (toutes les colonnes / ATTRIBUTS) , trier par salaire 
-- select * from EMPLOYEES order by SALARY DESC
-- liste des employes (toutes les colonnes / ATTRIBUTS) , trier par FIRST_NAME  croissant ASC
-- select * from EMPLOYEES order by FIRST_NAME ASC, LAST_NAME desc
-- selectionner FIRST_NAME et LAST_NAME de tous les employes
-- select first_name, last_name, salary ,job_id, COMMISSION_PCT from employees
-- liste des employes ayant un salaire entre 10000 et 20000$
-- select * from Employees where Salary between 10000 and 20000
-- autre methode  
-- select * from Employees where Salary >= 10000 and salary <=20000
--  select * from Employees where Salary < 10000 OR   salary >20000
-- liste des postes (JOB_ID)
-- select DISTINCT JOB_ID from EMPLOYEES 
-- les fonctions de groupes (agregation) : count(*), max(salary), min(salary), sum(salary), avg(salary)
-- select count(*) , max(salary) , min(salary), sum(salary) , avg(salary) from EMPLOYEES 
-- le nombre d'employe dont le poste est IT_PROG
-- select count(*) from EMPLOYEES where JOB_ID='IT_PROG'
-- le nombre d'employe PAR (POUR CHAQUE) JOB_ID:
-- select JOB_ID, count(*) FROM EMPLOYEES 
-- group by JOB_ID
-- le salaire max et min PAR JOB_ID
-- select JOB_ID, MAX(Salary), MIN(Salary) from Employees 
-- group by JOB_ID;
-- sommes des salaires par JOB_ID
-- select JOB_ID, SUM(Salary) from EMPLOYEES
-- where job_id  like 'A%'
-- group by JOB_ID
-- having sum(SALARY)>20000
-- order by sum(SALARY) ASC
-- select * from EMPLOYEES order by LAST_NAME desc
-- select DEPARTMENT_ID, count(*) from EMPLOYEES group by DEPARTMENT_ID 




