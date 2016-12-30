<?php
$page_title = 'GIG-Store.com - For your Rockband needs!';
include('includes/header.php');
include('includes/database.php');
include('includes/product.php');
$cproduct = getProductInfoById($_GET['id'], $conn);

//Gerelateerde producten
function showRelatedProducts($id, $db) {
    $sql = "SELECT * FROM WEBSHOP.dbo.PRODUCT WHERE PRODUCTNUMMER IN (SELECT PRODUCTNUMMER_GERELATEERD_PRODUCT FROM WEBSHOP.dbo.PRODUCT_GERELATEERD_PRODUCT WHERE PRODUCTNUMMER = ?)";
    $params = array($id);
    $stmt = sqlsrv_query($db, $sql, $params);
    echo '<table class="gerelateerde_producten">
    <tr>
        <th>
            <h2>Gerelateerde producten: </h2>
        </th>
    </tr>
    <tr>';
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        echo '<td>
            <a href="product.php?id=' . $row["PRODUCTNUMMER"] . '">
                <h2>' . $row['PRODUCTNAAM'] . '</h2>
                <img src="' . $row['AFBEELDING_KLEIN'] . '" alt="' .  $row['PRODUCTNAAM'] . '">
            </a>
        </td>
        ';
        }
        echo '
    </tr>
</table>';
    }

?>

    <!--MAIN CONTENT-->

		<div class="content">
			<h1><?php echo $cproduct['PRODUCTNAAM']; ?></h1>
						<div class="product_img">
							<img src="<?php echo $cproduct['AFBEELDING_GROOT']; ?>" alt="<?php echo $cproduct['PRODUCTNAAM']; ?>">
						</div>
						<div class="product_specs">
							<h2>Specificaties:</h2>
							<ul>
								<?php echo $cproduct['OMSCHRIJVING']; ?>
							</ul>
						</div>
						<div class="product_cartadd">
							<a href="winkelwagen.php?add=">Aan winkelwagen toevoegen<br /><img src="images/winkelwagen.gif" alt="winkelwagen"></a>
						</div>
						<div class="product_price">
							Prijs: &euro;<?php echo $cproduct['PRIJS']; ?>
						</div>
            <?php echo showRelatedProducts($_GET['id'], $conn); ?>
        </div>
<?php
include('includes/advertisements.php');
include('includes/footer.php');
?>