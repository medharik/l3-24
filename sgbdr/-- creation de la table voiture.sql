--  creation de la table voiture 
CREATE TABLE voiture(
id INT PRIMARY KEY  AUTO_INCREMENT  ,
matricule VARCHAR(20) UNIQUE NOT NULL ,
modele VARCHAR(20) NOT NULL ,
prix float


)

ajouter 3 voitures 
INSERT INTO voiture(matricule,modele, prix ) 
VALUES('12-B-450','Clio 5',100000)
SELECT * FROM voiture
-- supprimer la voiture ayant id=1
-- supprimer la voiture ayant id=4
DELETE FROM voiture WHERE id=4
UPDATE voiture SET prix=10000 WHERE id=1

