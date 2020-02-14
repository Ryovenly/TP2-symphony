# TP2-symphony


    Qu'est-ce qu'un container de services ? Quel est son rôle ?
	C'est une entité Symfony qui contient tous les services de l'application. 

    Quelle est la différence entre les commandes make:entity et make:user lorsqu'on utilise la console Symfony ?
	make:entity créé une entité qui aura un repository
	make:user créé une entité user avec toutes les dépendances nécessaire pour les données de connexions

    Quelle commande utiliser pour charger les fixtures dans la base de données ?
	$php bin/console doctrine:fixtures:load

    Résumez de manière simple le fonctionnement du système de versions "Semver"
	Semver est un système qui nous permet de faire le visionning des packages. Il nous donnes les versions majeurs et mineurs ainsi que les paths

    Qu'est-ce qu'un Repository ? A quoi sert-il ?
	Intéragit avec l'entity et permet de définir des méthodes qui vont nous permettre de communiquer avec la base de données

    Quelle commande utiliser pour voir la liste des routes ?
	$php bin/console debug:router

    Dans un template Twig, quelle variable globale permet d'accéder à la requête courante, l'utilisateur courant, etc...?
	{{ dump(app.user) }}
	
    Pour mettre à jour la structure de la base de données, quelles sont les 2 possibilités que nous avons abordées en cours ?
	php bin/console doctrine:schema:update --dump-sql
	php bin/console doctrine:schema:update --force

    Quelle commande permet de créer une classe de contrôleur ?
	php bin/console make:controller
	
    Décrivez succintement l'outil Flex de Symfony
	Récupère les librarys
