#### .htaccess:
- ``inside app folder`` -- to forbid access to this backend folder (app):
  ~~~
  Options - Indexes
  ~~~
- ``inside public folder`` -- to redirect to index.php in case url does not exist:
  ~~~
  RewriteEngine On
  
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteRule ^(.*)$ index.php?url=$1 [L,QSA]
  ~~~
