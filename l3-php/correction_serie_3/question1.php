<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form html</title>
</head>
<body>
    <form action="reception1.php" method="post">
        nom : <input type="text" name="nom" id="">
        prenom : <input type="text" name="prenom" id="">
        <button>Envoyer</button>
    </form>
    <hr>
    <form action="reception2.php" method="get">
        Couleur : 

        <select name="couleur" id="">
            <option value="red">Rouge</option>
            <option value="green">Vert</option>
            <option value="blue">Bleu</option>
            <option value="white">Blanc</option>
        </select>
        couleur exacte : 
        <input type="color" name="color" id="">
        <button>Envoyer</button>
    </form>
</body>
</html>