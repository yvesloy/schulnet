<?php

/*************************************************/
// M151:          Projekt
// Author:        Rajethan Ranjan & Yves Zumbühl
// Datum:         08.06.2016
// Version:       1.0
// Applikation:   Schulnet
//
// Filename:      index.php
// Include Files: navigation.php
/*************************************************/

/*************************************************/
// Datum        - Aenderung
// 08.06.2016   - Neu
/*************************************************/


?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/kube.css" />
        <link rel="stylesheet" href="../css/style.css" />
        <title>Schulnet</title>
    </head>
    <body>  
<?php
	if ($_SESSION['isLogin']==true) {
        //Files laden
    }
	else {
        require_once("login.php"); 
	}
?>

