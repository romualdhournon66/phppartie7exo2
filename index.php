<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 7 exercice 2</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <h1 align="center">PHP Partie 7 exercice 2</h1>
                    <h3 align="center">Exercice 2</h3>
                    <p align="center">Créer un formulaire demandant le nom et le prénom. 
                        Ce formulaire doit rediriger vers la page user.php avec la méthode POST.</p>
                </div>
            </div>
            <form method="POST" action="user.php">
                <div align="center"><input type="text" placeholder="Votre nom" name="Nom" value="Votre nom"/></div>
                <div align="center"><input type="text" placeholder="Votre prénom" name="Prenom" value="Votre prénom"/></div>
                <div align="center"><input type="submit" value="Valider" /></div>
            </form>
        </div>
    </body>
</html>
