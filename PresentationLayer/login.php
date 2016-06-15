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

<div id="loginDiv">
    <form action="#" method="POST" class="forms">
        <section>
            <label for="roleSelect">Rolle:</label>
            <select name="roleSelect">
                <option value="lehrperson">Lehrperson</option>
                <option value="schueler">SchülerIn</option>
            </select>
        </section>
        <section>
            <label for="username">Benutzername:</label>
            <input type="text" name="username"/>    
        </section>
        
        <section>
            <label for="password">Passwort:</label>
            <input type="password" name="password"/>    
        </section>
        
        <section>
            <button type="primary">Log in</button>  
        </section>
    </form>
</div>