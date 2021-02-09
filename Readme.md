# Création d'un simple controller
Dans application > controller, ne pas oublier de mettre une maj

# Retirer le index.php de l'url
Ajouter une htacces à la base du projet avec :
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php/$1 [L]

# Ouvrir une vue (view) à partir du controller
A l'aide de : $this->load->view('chemindufichier/nomdufichier') [chemindufichier à partir de view]

# Ajouter Bootstrap
Soit localement :
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
Soit avec un link internet menant a bootstrap

# Charger le helper url
Dans application > config > autoload.php
    $autoload['helper'] = array('url');



- change default url for localhost prject
- create table
- select record from database (create model)
- load session and database library
- create function for getting data from database
- load model in controller
- add form (seprate layout header and footer first)
- update record
- delete record
