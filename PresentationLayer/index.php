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
<?php
	session_start();
	if (!isset($_SESSION['isLogin'])) {
		$_SESSION['isLogin'] = false;
	}
	require_once("navigation.php"); 
?>

