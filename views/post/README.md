# Création d'un blog en PHP
    ### Objectif
    Créer un blog avec un systeme de catégories
        [liste]
        -   Page de listing d'article (pagination)
        -   Page de listing d'article pour une catégorie (pagination)
        -   Page présentation d'un article
        -   Administration des catégories
        -   Administration des articles
# Création de la stucture du blog
    ### Charger le router
        {Nous utilisons pour cela un router léger : Altorouter}
        => Site de télechargment : https://pakagelist.org/packages/altorouter/altorouter
        => Prendre connaissance de la documentation 
        => Installer Altorouter via  la ligne de commande dans l'éditeur de texte: 
        => composer require altorouter/altorouter:1.2.0 (prendre en compte la version (v1.2.0))
            => Garder une meme configuration 
    ### Création des dossiers et fichier de départ
        (commit 2 : description : initialisation)
        => Charger dans le fichier L'autoloader dans
            'public/index.php'
            <?php '../vendor/autoload.php' ?>
        => Mise en place du systeme de gestion des URL avec le router
    ### Resoudre la répétition vers les vues  dans le dossier 'views' 
        => require dirname(__DIR__).'/views/..'
    ### Solution : Créatiion d'une constante
        chargement de commit : Description - (Resoudre la répétion dans la 'views')

    ### Fin du chargement  des routes

    ### Controles des URL avec $match
        $match = $router->$match();

        ===== START SERVER =====

        Gerer les erreurs de connexion
        

