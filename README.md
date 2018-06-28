# Application-RT

### Prérequis ###
- Disposer d'une VM Linux Debian
- Créer un compte "etudiant" avec le mot de passe "vitrygtr"
- Télécharger les paquets suivants :
  - apache2
  - php5
  - mysql-server
  - sudo
  - tcpdump
  - zip
  
# Sécuriser le serveur mysql # 
Lancer la commande suivante :
mysq_secure_installation
mot de passe : vitrygtr
Change the root password : n
Remove anonymous users : Y
Disallow root login remotely : n
Remove test database and access to it : Y
Reload privilege tables now : Y

# Créer la base de données et les tables #
en recopiant les commandes suivantes :
mysql -u root -p
[mdp] = vitrygtr

CREATE DATABASE administration;
USE administration

CREATE TABLE applications(
id varchar(20),
application varchar(20)
);

INSERT INTO applications VALUES('192.168.1.25', 'apache2');
INSERT INTO applications VALUES('192.168.1.25', 'php5');
INSERT INTO applications VALUES('192.168.1.25', 'mysql');

CREATE TABLE network(
id varchar(20),
carte varchar(20),
ip varchar(20),
netmask varchar(20),
gateway varchar(20)
);

INSERT INTO network(id) VALUES('192.168.1.25');


1/ Télécharger le dossier "Site Web" et le copier à la racine du système Linux
2/ Deziper le dossier à la racine /
3/ Renommer le fichier /var/www/guillaume.fr/htaccess en .htaccess
4/ Renommer le fichier /etc/home/etudiant/htpasswd$ en .htpasswd$
5/ Connectez-vous au site web à l'adresse suivante : https://www.guillaume.fr
6/ Identifiez-vous avec :
login : guillaume
mdp : vitrygtr
