<?php
$page_title = 'GIG-Store.com - For your Rockband needs!';
include('includes/header.php');
include('includes/database.php');

if (isset($_GET['add'])) {
	$quantity = sqlsrv_query('SELECT PRODUCTNUMMER, VOORRAAD FROM WEBSHOP WHERE PRODUCTNUMMER = ' .($_GET['add']));
	$_SESSION['cart_'.$_GET['add']]+='1';
}

function products() {
	$get = sqlsrv_query('SELECT PRODUCTNUMMER, PRODUCTNAAM, CATEGORIE, PRIJS FROM WEBSHOP WHERE VOORRAAD > 0 ORDER BY PRODUCTNUMMER DESC');
	if (sqlsrv_num_rows($get) == 0) {
		echo "Geen producten in de winkelwagen.";
	}
	else {
		while ($get_row = sqlsrv_fetch_assoc($query)) {
			echo '<table class="winkelwagen-totaal">' . '<tr>' . '<td>' .$get_row['name']. '</td>' . '<td>' . $get_row['categorie'] . '</td>' . '<td>' . number_format($get_row['prijs'], 2) . '</td>' . '</tr>';
		}
	}
}

function cart()	{
	foreach($_SESSION as $name => $value) {
		if ($value > 0) {
			if (substr($name, 0, 5) == 'cart_') {
				$id = substr($name, 5, (strlen($name)-5));
				$get = sqlsrv_query('SELECT PRODUCTNUMMER, PRODUCTNAAM, PRIJS FROM WEBSHOP WHERE PRODUCNUMMER=(int)$id');
			}
		}
		else {
			echo "Winkelwagen is leeg!";
		}
	}
}
?>
		
		<!--MAIN CONTENT-->
		<div class="content">
		<h1>Winkelwagen:</h1>
			<table class="winkelwagen-totaal">
				<tr>
					<td>Product</td>
					<td>Naam</td>
					<td>Prijs</td>
					
				</tr>
				<tr>
					<td class="winkelwagen-product"><img src="images/gitaar/esp-gold.jpg" alt="esp-gold"></td>
					<td>Esp-Gold</td>
					<td>&euro;800,-</td>
				</tr>
				<tr>
					<td class="winkelwagen-product"><img src="images/gitaar/washburn-pxm10-blue.jpg" alt="pxm10"></td>
					<td>Pxm10 Blue</td>
					<td>&euro;900,-</td>
				</tr>
				<tr>
					<td class="winkelwagen-product"><img src="images/gitaar/washburn-pxl10wa-walnut.jpg" alt="px110wa"></td>
					<td>Px110wa Walnut</td>
					<td>&euro;900,-</td>
				</tr>
				<tr>
					<td>Totaal</td>
					<td>&euro;2600,-</td>
				</tr>
			</table>
			<input class="placeButtons" type="submit" value="Afrekenen"/>
		</div>

		<!--MAIN CONTENT-->
		
		<?php
		include('includes/footer.php');
		?>