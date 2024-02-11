-- select tous les attributs de la table EMPLOYEES 
select * from EMPLOYEES 
where department_id is null
-- selctionner le nom complet et le salaire des employes 
select FIRST_NAME,LAST_NAME, SALARY from EMPLOYEES

-- ou avec alias
select FIRST_NAME || ' ' || LAST_NAME as nom_complet, SALARY as salaire from EMPLOYEES
--  calcul dans select (NULL) 
select first_name, LAST_NAME, salary, COMMISSION_PCT, SALARY+SALARY*NVL(COMMISSION_PCT,0) as salaire_net from EMPLOYEES 

-- les employees ayant un salaire >=10000
select * from EMPLOYEES where salary>=10000 
-- les employees ayant un salaire >=10000 et ont  de commission
select * from EMPLOYEES 
where salary>=10000  and  COMMISSION_PCT is not null
-- trie par ordre alphabétique
order by FIRST_NAME ASC , salary desc

-- les fonctions de groupes (agreagations) : min(salary) , max(prix), sum(prix), avg(salary) , count(*)
select count(*) as nombre , sum (salary), avg(salary), max(salary), min(salary) from EMPLOYEES
-- le nombre d'employee POUR CHAQUE (PAR) job_id et ayant job_id qui se termine par k , 
-- on ne garde que els job_id ayant plus de 10 employees
select JOB_ID , count(*) as nombre , max(salary) 
from employees
where lower(job_id) not like '%k' 
group by JOB_ID
HAVING count(*)>=20
order by  nombre asc , job_id desc

select * from employees order by last_name desc
select * from regions
select department_id, count(*) from employees 
group by department_id

select department_id, FIRST_name, AVG(salary) from employees 
group by department_id, FIRST_name
having AVG(salary) >4000

select * from employees where lower(last_name) like 'k%g' 
-- jointure interne (EQUI JOINTURE OU JOINTURE NATURELLE)
--  selectionne le first_name, last_name et department_name des tous les employees ayant
-- salaire >=10000
select e.first_name , e.last_name , department_name 
from employees e , departments d
where 
e.department_id=d.department_id -- condition de jointure
-- ou , une autre syntaxe 

select e.first_name,e.last_name , d.department_name from employees e
join departments d on e.department_id=d.department_id
where e.salary >10000

 select e.first_name, e.last_name, e.salary , l.city,r.region_name  from employees e 
 inner join departments d on e.department_id= d.department_id
 join locations l on d.location_id=l.location_id
 join countries c  on c.country_id=l.country_id
 join regions r on r.region_id=c.region_id
 where r.region_name ='Europe'
 order by l.city desc

-- jointure externe 

-- liste des employees avec leurs EVENTUELS DEPARTMENTS 
SELECT e.first_name, e.last_name , d.department_name 
from employees e left OUTER join DEPARTMENTS d on e.department_id=d.department_id


SELECT e.first_name, e.last_name , d.department_name 
from employees e RIGHT  join DEPARTMENTS d on e.department_id=d.department_id

SELECT e.first_name, e.last_name , d.department_name 
from employees e FULL   join DEPARTMENTS d on e.department_id=d.department_id
