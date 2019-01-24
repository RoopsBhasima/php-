#
# XAMPP settings
#

<IfModule env_module>
    SetEnv MIBDIRS "C:/xampp/php/extras/mibs"
    SetEnv MYSQL_HOME "\\xampp\\mysql\\bin"
    SetEnv OPENSSL_CONF "C:/xampp/apache/bin/openssl.cnf"
    SetEnv PHP_PEAR_SYSCONF_DIR "\\xampp\\php"
    SetEnv PHPRC "\\xampp\\php"
    SetEnv TMP "\\xampp\\tmp"
</IfModule>

#
# PHP-Module setup
#
LoadFile "C:/xampp/php/php7ts.dll"
LoadFile "C:/xampp/php/libpq.dll"
LoadModule php7_module "C:/xampp/php/php7apache2_4.dll"

<FilesMatch "\.php$">
    SetHandler application/x-httpd-php
</FilesMatch>
<FilesMatch "\.phps$">
    SetHandler application/x-httpd-php-source
</FilesMatch>

#
# PHP-CGI setup
#
#<FilesMatch "\.php$">
#    SetHandler application/x-httpd-php-cgi
#</FilesMatch>
#<IfModule actions_module>
#    Action application/x-httpd-php-cgi "/php-cgi/php-cgi.exe"
#</IfModule>


<IfModule php7_module>
    PHPINIDir "C:/xampp/php"
</IfModule>

<IfModule mime_module>
    AddType text/html .php .phps
</IfModule>

ScriptAlias /php-cgi/ "C:/xampp/php/"
<Directory "C:/xampp/php">
    AllowOverride None
    Options None
    Require all denied
    <Files "php-cgi.exe">
          Require all granted
    </Files>
</Directory>

<Directory "C:/xampp/cgi-bin">
    <FilesMatch "\.php$">
        SetHandler cgi-script
    </FilesMatch>
    <FilesMatch "\.phps$">
        SetHandler None
    </FilesMatch>
</Directory>

<Directory "C:/xampp/htdocs/xampp">
    <IfModule php7_module>
    	<Files "status.php">
    		php_admin_flag safe_mode off
    	</Files>
    </IfModule>
    AllowOverride AuthConfig
</Directory>

<IfModule alias_module>
    Alias /licenses "C:/xampp/licenses/"
    <Directory "C:/xampp/licenses">
        Options +Indexes
        <IfModule autoindex_color_module>
            DirectoryIndexTextColor  "#000000"
            DirectoryIndexBGColor "#f8e8a0"
            DirectoryIndexLinkColor "#bb3902"
            DirectoryIndexVLinkColor "#bb3902"
            DirectoryIndexALinkColor "#bb3902"
        </IfModule>
        Require local
        ErrorDocument 403 /error/XAMPP_FORBIDDEN.html.var
   </Directory>

    Alias /phpmyadmin "C:/xampp/phpMyAdmin/"
    <Directory "C:/xampp/phpMyAdmin">
        AllowOverride AuthConfig
        Require local
        ErrorDocument 403 /error/XAMPP_FORBIDDEN.html.var
    </Directory>

    Alias /webalizer "C:/xampp/webalizer/"
    <Directory "C:/xampp/webalizer">
        <IfModule php7_module>
    		<Files "webalizer.php">
    			php_admin_flag safe_mode off
    		</Files>
        </IfModule>
        AllowOverride AuthConfig
        Require local
        ErrorDocument 403 /error/XAMPP_FORBIDDEN.html.var
    </Directory>
</IfModule>
ScriptAlias /php731 "C:/xampp/php731"
<Directory "C:/xampp/php731">
AllowOverride None
Options None
Require all denied
<Files "php-cgi.exe">
Require all granted
</Files>
</Directory>

<Directory "C:/xampp/htdocs/laravel">
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