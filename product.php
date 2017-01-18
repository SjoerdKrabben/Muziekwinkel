<?php
$page_title = 'GIG-Store.com - For your Rockband needs!';
include('includes/header.php');
include('includes/database.php');
include('includes/product.php');
$cproduct = getProductInfoById($_GET['id'], $conn);

//Gerelateerde producten
function showRelatedProducts($id, $db) {
    $sql = "SELECT * FROM Product WHERE product_id IN (SELECT product_gerelateerd_id FROM Product_Gerelateerd WHERE product_id = ?)";
    $params = array($id);
    $stmt = mysqli_query($db, $sql, $params);
    echo '<table class="gerelateerde_producten">
    <tr>
        <th>
            <h2>Gerelateerde producten: </h2>
        </th>
    </tr>
    <tr>';
        while( $row = mysqli_fetch_array( $stmt, MYSQLI_ASSOC) ) {
        echo '<td>
            <a href="product.php?id=' . $row["product_id"] . '">
                <h2>' . $row['product_name'] . '</h2>
                <img src="' . $row['product_thumbnail'] . '" alt="' .  $row['product_name'] . '">
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
			<h1><?php echo $cproduct['product_name']; ?></h1>
						<div class="product_img">
							<img src="<?php echo $cproduct['product_img']; ?>" alt="<?php echo $cproduct['product_name']; ?>">
						</div>
						<div class="product_specs">
							<h2>Specificaties:</h2>
							<ul>
								<?php echo $cproduct['product_info']; ?>
							</ul>
						</div>
						<div class="product_cartadd">
							<a href="winkelwagen.php?add=">Aan winkelwagen toevoegen<br /><img src="images/winkelwagen.gif" alt="winkelwagen"></a>
						</div>
						<div class="product_price">
							Prijs: &euro;<?php echo $cproduct['product_price']; ?>
						</div>
            <?php echo showRelatedProducts($_GET['id'], $conn); ?>
        </div>
<?php
include('includes/advertisements.php');
include('includes/footer.php');
?>