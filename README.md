# Build wordpress project with composer

### Setup
    composer install

### Setup themes
        wp-content/themes/evolve       # in stalled via composer
        wp-content/themes/evolve-child # stored in git
        
### Referrence
* http://hassis.com/2013/11/16/installing-wordpress-core-via-composer-and-finding-the-proper-rewrites-for-nginx/
* https://api.wordpress.org/secret-key/1.1/salt
* https://codex.wordpress.org/Giving_WordPress_Its_Own_Directory

### Config Apache

```
<VirtualHost *:*>
       ServerName domainname.com
       DocumentRoot "/var/www/html/"
       <Directory "/var/www/html/">
           Options Indexes Includes FollowSymLinks
           AllowOverride All
           Order allow,deny
           Allow from all
       </Directory>
   </VirtualHost>
```
