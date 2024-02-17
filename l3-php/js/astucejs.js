let t1=[1,2,4];
//spread : ...
let t2=[...t1,6,9];
let t4=['hp',...t1,'sony'];
let t3=['ali',...t1];
let hp={
id:1,
libelle:'hp dv7',
prix: 8000
}

let dell ={...hp,qte:10,libelle:'dell'};
console.log('dell ',dell);
//destructuration d'objet 
// let id=hp.id;
// let libelle=hp.libelle;

let {id,libelle,prix}=hp;