<?php

/*************************************************/
// M151:          Data Abstraction Layer (DAL)
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

	session_start();

	if (!isset($_SESSION['isLogin'])) {
		$_SESSION['isLogin'] = false;
	}
	require_once("navigation.php"); 
?>
		<p style="width:640px;">
			Willkommen!<br /><br />
			Diese Applikation zeigt die Implementierung eines Data Abstraction Layers (DAL).
		</p>
	</body>
</html>
