<?php
/**
 * Created by PhpStorm.
 * User: Sjoerd
 * Date: 10-12-2015
 * Time: 22:04
 */

function products() {
    $query = sqlsrv_query('SELECT PRODUCTNUMMER, PRODUCTNAAM, CATEGORIE, PRIJS FROM WEBSHOP WHERE VOORRAAD > 0 ORDER BY PRODUCTNUMMER DESC');
    if (sqlsrv_num_rows($query) == 0) {
        echo "Geen producten in de winkelwagen.";
    }
    else {
        while ($get_row = sqlsrv_fetch_assoc($query)) {
            echo '<table class="winkelwagen-totaal">' . '<tr>' . '<td>' .$get_row['name']. '</td>' . '<td>' . $get_row['categorie'] . '</td>' . '<td>' . number_format($get_row['prijs'], 2) . '</td>' . '</tr>';
        }
    }
}
?>