<?php
function get_products($database, $categorie) {
$query = "SELECT * FROM WEBSHOP.dbo.PRODUCT WHERE CATEGORIE = '$categorie'";
$result = sqlsrv_query($database, $query);
$returnHTML = '';
$productsperRow = 3;
$counter = 0;


    while ($cproduct = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
        $returnHTML.= '<td class="product">
        <a href="product.php?id=' . $cproduct['PRODUCTNUMMER'] . '"><img src="' . $cproduct['AFBEELDING_KLEIN'] . '" alt="' . $cproduct['PRODUCTNAAM'] . '"></a>
        <div class="product_name">
            <a href="product.php?id=' . $cproduct['PRODUCTNUMMER'] . '" class="product_name">' . $cproduct['PRODUCTNAAM'] . '</a></td>
        </div>';
        $counter++;
        if($counter % $productsperRow == 0) {
            $returnHTML.= '</tr><tr>';
        }
    }
    return $returnHTML;
}

function getProductInfoById($id, $database) {
    $query = sqlsrv_query($database,"SELECT * FROM WEBSHOP.dbo.PRODUCT WHERE PRODUCTNUMMER = {$_GET['id']}");

    $result = sqlsrv_fetch_array($query);
    return $result;
}

function getRelatedProducts()  {

}