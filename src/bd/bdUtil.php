<?php

/* R�cup�re les informations de la BD dans le config.ini */
function getConfigBD($argument_config)
{
    $tabConfig = parse_ini_file("config.ini");
    return $tabConfig[$argument_config];
}

/* Connexion à la BD avec PDO */
function openBD()
{
    $cnx = new PDO(getConfigBD("info_bd"), getConfigBD("utilisateur"), getConfigBD("mdp"));
    return $cnx;
}

/* Fermeture de la connexion � la bse de donn�es */
function closeBD($cnx)
{
    $cnx = null;
}

?>