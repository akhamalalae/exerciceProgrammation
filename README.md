# Dashboard

## Environnement technique

  1. Backend
  - PHP 8
  - Symfony 6 et son écosystème

2. Frontend
  - HTML5
  - CSS3
  - Bootstrap
  - Bibliothèque JavaScript jQuery
  - Bibliothèque JavaScript Chart.js 

3. Technologie de conteneurisation
  - Docker

4. Dépôt distant
  - Github

5. Dépôt local
  - Git

## Installation

1 : Clonage du dépôt.
  - https://github.com/akhamalalae/exerciceProgrammation

2 : Lancer la stack docker-compose
  - docker-compose build
  - docker-compose create
  - docker-compose start 

3 : Changer le propriétaire du fichier par l’utilisateur courant pour pouvoir modifier facilement
  - sudo chown -R $USER ./

4 : Entrer dans le shell du conteneur “www”
  - docker exec -it www_docker_symfony bash
  - cd project

5 : Installer les dépendances.
   - composer install

6 : Créer la base de données.
  - php bin/console doctrine:database:create

7 : Lancer les migrations.
  - php bin/console make:migration
  - php bin/console doctrine:migrations:migrate

8 : Lancé les fixtures.
  - php bin/console doctrine:fixtures:load


## URL

1 : Dashboard.
   - http://127.0.0.1:8741/

2 : phpMyAdmin
  - http://127.0.0.1:8080/
