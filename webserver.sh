apt-get update
apt-get install -y apache2 php libapache2-mod-php php-mysql

chmod 777 /vagrant
chmod 777 /vagrant/www
chmod 777 /vagrant/www/user
chmod 777 /vagrant/www/user/style.css
chmod 777 /vagrant/www/user/index.php

# Change VM's webserver's configuration to use shared folder.
# (Look inside user-website.conf for specifics.)
cp /vagrant/user-website.conf /etc/apache2/sites-available/

# activate our website configuration ...
a2ensite user-website

# ... and disable the default website provided with Apache
a2dissite 000-default

# Reload the webserver configuration, to pick up our changes
service apache2 reload