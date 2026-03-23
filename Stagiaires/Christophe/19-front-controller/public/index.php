<?php
# Formateur/19-front-controller/public/index.php

/*****************************************
**
**          CONTROLLER FRONTAL
**
** Ce fichier va gérer toutes les requêtes 
** Vers les pages du site
**
******************************************/
// require once rend le chargement du fichire obligatoire
require_once "../config.php";

// contantes magiques __DIR__, 
// nous donne le chemin du serveur depuis la racine
echo 'Racine de notre projet :'.PATH_TO_PROJECT_ROOT;