# Music Database System
## DBMS PROJECT
### Joe Antony 15CO220
### Prateek Kembhavi 15CO223

### To run the project : 


For Windows
1. Install WampServer (https://sourceforge.net/projects/wampserver/files/latest/download)

2. Download the code as zip("Music-Database-System.zip"),extract it and copy it to C:\wamp64\www

3. Go to http://localhost/phpmyadmin/, login with username = "root"(there is no password)

4. Import db_music.sql to phpMyAdmin

5. Go to http://localhost/Music-Database-System/


For Ubuntu
1. Install LAMP and phpMyAdmin in Ubuntu

Do the following (one-time):<br>
2. To put files in /var/www/html you need root permission. For that, set the root password(if already not set):<br>
<code>sudo passwd root</code><br>
Now login as root:<br>
<code>su root</code><br>
Give permission to the folder:<br>
<code>sudo chmod 755 -R /var/www/html</code><br>
or<br>
<code>sudo chmod 755 /var/www/html</code><br>

3. Run the following commands:<br>
<code>cd /etc/apache2</code><br>
<code>nano apache2.conf<br></code>

Change the below code:<br>
<code><Directory /var/www/></code><br>
<code>Options Indexes FollowSymLinks</code><br>
<code>AllowOverride None</code><br>
<code>Require all granted</code><br>
<code></Directory></code><br>
as:<br>
<code><Directory /var/www/></code><br>
<code>Options Indexes FollowSymLinks</code><br>
<code>AllowOverride All</code><br>
<code>Require all granted</code><br>
<code></Directory><br></code>

4. Enable rewrite mode:<br>
<code>sudo a2enmod rewrite</code><br>
Restart apache server:<br>
<code>sudo service apache2 restart</code><br>

5. Download the code as zip("Music-Database-System.zip"),extract it and copy it to /var/www/html/

6. Go to http://localhost/phpmyadmin/, login with username = "root"(there is no password)

7. Import db_music.sql to phpMyAdmin

8. Go to http://localhost/Music-Database-System/



