ScriptAlias /php731 "C:/xampp/php731"
<Directory "C:/xampp/php731">
AllowOverride None
Options None
Require all denied
<Files "php-cgi.exe">
Require all granted
</Files>
</Directory>

<Directory "C:/xampp/htdocs/php731">
UnsetEnv PHPRC
<FilesMatch "\.php$">
SetHandler application/x-httpd-php731
Action application/x-httpd-php731 "/php731/php-cgi.exe"
</FilesMatch>
</Directory>

Listen 82
<VirtualHost *:82>
UnsetEnv PHPRC
<FilesMatch "\.php$">
php_flag engine off
SetHandler application/x-httpd-php731
Action application/x-httpd-php731 "/php731/php-cgi.exe"
</FilesMatch>
</VirtualHost>