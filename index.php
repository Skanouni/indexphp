<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/site.css" type="text/css">
    <link rel="icon" href="image/unnamed.png">
    <title>Macromania</title>
    
</head>



<body>
    <p class="entete"><a href="index.php">MACROMANIA</a></p>
    <div class="box">


        <h1>DRAGON BALL FIGHTERZ</h1>

        <figure>
            <img class="dbfz" src= "image/dbfz.jpg" alt="">
        </figure>
        

            <h3>Dragon Ball FighterZ est un jeu vidéo de combat en 2,5D basé sur la franchise Dragon Ball développé par Arc System Works et 
                édité par Bandai Namco Games.</h3>
            <h3>Prix : 59.99€</h3>
            <input class="bg" type="submit" value="Acheter MAINTENANT">
            <?php include('contact.php') ; ?> 
        
            <script type="text/javascript"> //Compteur de visite
                <!--
                function cherche_valeur() { // La fonction cherche_valeur va rechercher un témoin de connexion(= ce qui sert savoir si un pc a déjà visité)
                 var valeur = ""; // Variable valeur commence à partir d'une chaîne de caractère vide
                 if(document.cookie) { //Si il y a un témoin de connexion
                  var valeur_depart = document.cookie.indexOf("=") + 1; //Va chercher l'indice du caractère après "=" dans ce cas c'est le nombre compteur du témoin
                  var valeur_fin = document.cookie.indexOf(";"); // Cherche l'indice de ";" qui n'existe pas et donc est égal à -1
                  if (valeur_fin == -1) // Si valeur_fin est égal à -1
                   valeur_fin = document.cookie.length; // valeur_fin contient un nombre de caractère égal à celui de document.cookie grâce à .length
                  valeur = document.cookie.substring(valeur_depart,valeur_fin); //valeur est égal à la souschaîne de document.cookie qui va de l'indice 2
                 }                                                              //à la longueur de la chaîne de valeur_fin-1 
                 
                 return valeur;
                }
                
                function fixer_valeur(indicateur, valeur, expire) //Témoin de connexion reste sauvegardé au delà de la session navigateur actuelle pour contenir une mention du moment auquel 
                {                                                //le navigateur devra effacer le témoin de connexion, pour éviter de sauvegarder des témoins de connexion éternellement.
                 var maintenant = new Date(); //Enregistre la date maintenant
                 var temps = new Date(maintenant.getTime() + expire); //Enregistre l'heure à laquelle on se connecte pour y ajouter un temps d'expiration
                 document.cookie = indicateur+"="+valeur+"; expires="+temps.toGMTString()+";"; // Ecrit un témoin de connexion
                }
                
                function etat_compteur() { //Recherche l'état actuel du compteur, l'incrémente de 1 ,sauvegarder le nouvel état du compteur.Si l'utilisateur visite la page pour la première fois, le compteur est fixé à 1 et sauvegardé.
                 var peremption = 1000*5*5; //Expiration de l'enregistrement (5minutes 6secondes)
                 var nombre = cherche_valeur(); //Va chercher la valeur de la fonction cherche_valeur
                 var compteur = 0; //Le compteur commence à partir de 0
                 if(nombre != "") compteur = parseInt(nombre); // Si variable nombre est une chaîne de caractères non vide alors variable compteur est égal à la valeur de "nombre" en tant que nombre
                 if(document.cookie) { // Si il y a un témoin de connexion
                   compteur = compteur + 1; // Compteur de visite augmente de 1
                   fixer_valeur("compteur",compteur,peremption);
                 }
                 else { // Si il n'a pas document.cookie ....
                   compteur = 1; // Le compteur garde sa valeur 
                   fixer_valeur("compteur",compteur,peremption);
                 }
                 return(compteur); // Retourne et garde la valeur de la variable compteur
                }
                //-->
                </script>

                
                <script type="text/javascript">
                <!--
                 var x = etat_compteur(); // La variable x = fonction etat_compteur, égal au résultat/valeur retournée de la variable compteur
                 document.write("<p>Vous avez visité cette page " + x + " fois.<\/p>");
                //-->
                </script>
                
                
    </div>
</body>

</html>