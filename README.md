# Music Database System
## DBMS PROJECT
### Joe Antony 15CO220
### Prateek Kembhavi 15CO223

To run the project : 
For Windows
1. Install WampServer (https://sourceforge.net/projects/wampserver/files/latest/download)

2. Download the code as zip("Music-Database-System.zip"),extract it and copy it to C:\wamp64\www

3. Go to http://localhost/phpmyadmin/, login with username = "root"(there is no password)

4. Import db_music.sql to phpMyAdmin

5. Go to http://localhost/Music-Database-System/

For Ubuntu
1. Install LAMP and phpMyAdmin in Ubuntu
Do the following (one-time):

2. To put files in /var/www/html you need root permission. For that, set the root password(if already not set):
sudo passwd root
Now login as root:
su root
Give permission to the folder:
sudo chmod 755 -R /var/www/html
or
sudo chmod 755 /var/www/html

3. Run the following commands:
cd /etc/apache2
nano apache2.conf

Change the below code:<br>
<Directory /var/www/><br>
Options Indexes FollowSymLinks<br>
AllowOverride None<br>
Require all granted<br>
</Directory><br>
<br>
as:<br>
<br>
<Directory /var/www/><br>
Options Indexes FollowSymLinks<br>
AllowOverride All<br>
Require all granted<br>
</Directory><br>

4. Enable rewrite mode:
sudo a2enmod rewrite
Restart apache server:
sudo service apache2 restart

5. Download the code as zip("Music-Database-System.zip"),extract it and copy it to /var/www/html/

6. Go to http://localhost/phpmyadmin/, login with username = "root"(there is no password)

7. Import db_music.sql to phpMyAdmin

8. Go to http://localhost/Music-Database-System/



