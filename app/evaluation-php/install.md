
# Procédure de configuration
## Configuration de PHP
Vous devez avoir la version 8.2 ou supérieure
    Pour vérifier: php -v

### mise à jour: 
    sudo add-apt-repository ppa:ondrej/php  
    sudo apt update
    sudo apt install php8.2 php8.2-cli php8.2-{bz2,curl,mbstring,intl}
    sudo apt install php8.2-fpm

### vérifier la mise à jour
    php -v  
*il faut avoir le 8.2 ou supérieure*

## INSTALLATION DE COMPOSER
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'edb40769019ccf227279e3bdd1f5b2e9950eb000c3233ee85148944e555d97be3ea4f40c3c2fe73b22f875385f6a5155') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

### pour faciliter la commande
sudo mv composer.phar /usr/local/bin/composer

*Cela permet de taper la commande dans n'importe quel répertoire et qu'elle fonctionne!*

# INSTALLATION de PHPUNIT
Nous allons utiliser la commande PHPUNIT pour tester nos fichiers
## installation des pré-requis
sudo apt install -y php-cli php-json php-mbstring php-xml php-pcov php-xdebug
sudo apt install -y zip
sudo apt install phpunit

composer require phpunit

# PRINCIPE DU TP
Le but est de compléter le code existant pour le rendre fonctionnel. Attention vous ne devez pas le faire n'importe comment! 
Il est bien précisé par un commentaire les endroits ou insérer votre code. Les fonctions existent, vous ne devez surtout pas modifier le code  en dehors des endroits indiqués.
## Comment procéder?
En ligne de commande: **phpunit tests/fonctionsTest.php**
Cette commande lance les tests unitaires. Ils sont listés dans le fichier **tests/fonctionsTest.php**. Vous pouvez y jetter un coup d'oeil.Cependant il ne faut **SURTOUT PAS MODIFIER LA CLASSE ! ! !**
Au premier lancement, il vous est indiqué :Tests: 13, Assertions: 8, Errors: 5, Failures: 2.
Il y a 13 tests, 8 affirmations, 5 erreurs et 2 échecs! Il faut compléter le fichier fonctions.php afin que vous obteniez 0 erreurs ou échecs!

Il faut faire pareil avec la classe Personne (phpunit tests/personneTest.php) et ListePersonnes(phpunit tests/listePersonnesTest.php)
