# Application-RT

Prérequis
=
- Disposer d'une VM Linux Debian
- Créer un compte "etudiant" avec le mot de passe "vitrygtr"
- Télécharger les paquets suivants :
  - apache2
  - php5
  - mysql-server
  - sudo
  - tcpdump
  - zip
  
Sécuriser le serveur mysql
-
Lancer la commande suivante :<br/>
<code>mysq_secure_installation</code><br/>
mot de passe : vitrygtr<br/>
Change the root password : n<br/>
Remove anonymous users : Y<br/>
Disallow root login remotely : n<br/>
Remove test database and access to it : Y<br/>
Reload privilege tables now : Y<br/>

Créer la base de données et les tables
-
Recopier les commandes suivantes :<br/>
<code>mysql -u root -p</code><br/>
[mdp] = vitrygtr<br/>

CREATE DATABASE administration;<br/>
USE administration<br/>

CREATE TABLE applications(<br/>
id varchar(20),<br/>
application varchar(20)<br/>
);<br/>

INSERT INTO applications VALUES('192.168.1.25', 'apache2');<br/>
INSERT INTO applications VALUES('192.168.1.25', 'php5');<br/>
INSERT INTO applications VALUES('192.168.1.25', 'mysql');<br/>

CREATE TABLE network(<br/>
id varchar(20),<br/>
carte varchar(20),<br/>
ip varchar(20),<br/>
netmask varchar(20),<br/>
gateway varchar(20)<br/>
);<br/>

INSERT INTO network(id) VALUES('192.168.1.25');<br/><br/>

Installation du site web
=
<ol>
  <li>Télécharger le dossier "Site Web" et le copier à la racine du système Linux</li>
  <li>Deziper le dossier à la racine /</li>
  <li>Renommer le fichier /var/www/guillaume.fr/htaccess en .htaccess</li>
  <li>Renommer le fichier /etc/home/etudiant/htpasswd$ en .htpasswd$</li>
  <li>Lancer la commande suivante : <code>chmod 711 /home/etudiant/script.sh</code></li>
  <li>Connectez-vous au site web à l'adresse suivante : https://www.guillaume.fr</li>
  <li>Identifiez-vous avec :<br/>
  login :<br/>
    - guillaume<br/>
    - mdp : vitrygtr</li>
</ol>
