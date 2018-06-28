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
=
Lancer la commande suivante :\n
mysq_secure_installation
mot de passe : vitrygtr
Change the root password : n
Remove anonymous users : Y
Disallow root login remotely : n
Remove test database and access to it : Y
Reload privilege tables now : Y

Créer la base de données et les tables
=
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

<ol>
  <li>Télécharger le dossier "Site Web" et le copier à la racine du système Linux</li>
  <li>Deziper le dossier à la racine /</li>
  <li>Renommer le fichier /var/www/guillaume.fr/htaccess en .htaccess</li>
  <li>Renommer le fichier /etc/home/etudiant/htpasswd$ en .htpasswd$</li>
  <li>Connectez-vous au site web à l'adresse suivante : https://www.guillaume.fr</li>
  <li>Identifiez-vous avec :<br/>login : guillaume<br/>mdp : vitrygtr</li>
</ol>
