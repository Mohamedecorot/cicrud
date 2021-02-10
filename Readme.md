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

# Charger le helper url'http://localhost:8000/';

# Creer une base de données et lire (select) les données s'y trouvant
 - Entrer les informations dans application > config > database.php
    $db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => 'root',
	'database' => 'codeigniter'
    ....
 - Charger les librairies database et session dans l'autoload
   Dans application > config > autoload.php
    $autoload['libraries'] = array('database', 'session');

 - Dans application > config > autoload.php
    $autoload['helper'] = array('url');

# Penser à changer l'url par défault (localhost si dev en local)
Dans application > config > config.php
    $config['base_url'] = ction for getting data from database

# Creer un model pour interagir avec la bdd
    Dans application > models
    Creer un fichier (commençant par une maj), avec une class qui extends de CI_Model

# Charger le model dans le controller
    $this->load->model('nomdelatable');

# Envoyer les données à la vue par l'intermédiaire du controller
    $data['datas'] = $this->nomdelatable->getData();
	$this->load->view('vue', $data);

# Dans la vue, afficher les données reçus
    <?php
    if($blogs){
        foreach($datas as $data){
    ?>
    <tr>
        <td><?= $data->id; ?></td>
        <td><?= $data->....; ?></td>
    </tr>



- add form (seprate layout header and footer first)
- update record
- delete record
