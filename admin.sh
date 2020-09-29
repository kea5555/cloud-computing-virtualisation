apt-get update
apt-get install -y apache2 php libapache2-mod-php php-mysql
    
# Change VM's webserver's configuration to use shared folder.
# (Look inside admin-website.conf for specifics.)
cp /vagrant/admin-website.conf /etc/apache2/sites-available/

chmod 777 /vagrant
chmod 777 /vagrant/www
chmod 777 /vagrant/www/admin
chmod 777 /vagrant/www/admin/style.css
chmod 777 /vagrant/www/admin/index.php

# activate our website configuration ...
a2ensite admin-website
# ... and disable the default website provided with Apache
a2dissite 000-default
# Reload the webserver configuration, to pick up our changes
service apache2 reload