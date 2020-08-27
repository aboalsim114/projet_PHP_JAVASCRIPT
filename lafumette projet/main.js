function load()
{
        const bienvenue = document.getElementById("bienvenue");
        const bienvenue2 = document.getElementById("bienvenue2");

        const username = document.getElementById("username");
        const name = prompt("veuillez entrer votre Nom");


        bienvenue.innerHTML = `Bonjour Monsieur ${name} bienvenue dans notre site`;
        bienvenue2.innerHTML = `Vous Pouvez dés maintenant Publier vos annonces ${name}`;

      

    
}

/* script meteo  */

