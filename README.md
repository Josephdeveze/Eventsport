# EventSport - Plateforme de Gestion d'Événements Sportifs

## Description
EventSport est une application web permettant de gérer des événements sportifs. Elle offre un système d'authentification complet et une interface utilisateur intuitive construite avec Bootstrap.

## Structure du Projet
```
├── account.php          # Gestion du compte utilisateur
├── bdd.php             # Configuration de la base de données
├── functions.php       # Fonctions utilitaires
├── index.php          # Page d'accueil
├── login.php          # Page de connexion
├── logout.php         # Déconnexion
├── sign_in.php        # Page d'inscription
├── treatment_login.php    # Traitement du formulaire de connexion
├── treatment_sign_in.php  # Traitement du formulaire d'inscription
├── css/               # Fichiers CSS (Bootstrap)
├── images/           # Ressources images
└── js/               # Scripts JavaScript
```

## Prérequis
- PHP 7.4 ou supérieur
- MySQL
- Serveur web (Apache recommandé)
- XAMPP/WAMP/MAMP (pour le développement local)

## Installation
1. Clonez le repository dans votre répertoire web
2. Configurez votre base de données dans bdd.php
3. Importez la structure de la base de données (fichier SQL à créer)
4. Assurez-vous que les permissions des fichiers sont correctement configurées

## Configuration
Modifiez le fichier bdd.php avec vos informations de connexion à la base de données :

````php
<?php
$host = "localhost";
$dbname = "votre_base_de_donnees";
$username = "votre_utilisateur";
$password = "votre_mot_de_passe";
````

## Fonctionnalités
- Système d'authentification (connexion/inscription)
- Gestion de compte utilisateur
- Interface responsive avec Bootstrap
- Gestion des événements sportifs

## Sécurité
- Protection contre les injections SQL
- Hashage des mots de passe
- Validation des formulaires
- Sessions sécurisées

## Technologies Utilisées
- PHP
- MySQL
- Bootstrap
- JavaScript

## Auteurs
[Joseph Deveze]

## Licence
Tous droits réservés
