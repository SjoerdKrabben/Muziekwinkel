<?php
function get_products($database, $categorie) {
$query = "SELECT * FROM Product WHERE Category = '$categorie'";
$result = mysqli_query($database, $query);
$returnHTML = '';
$productsperRow = 3;
$counter = 0;


    while ($cproduct = mysqli_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
        $returnHTML.= '<td class="product">
        <a href="product.php?id=' . $cproduct['product_id'] . '"><img src="' . $cproduct['product_thumbnail'] . '" alt="' . $cproduct['product_name'] . '"></a>
        <div class="product_name">
            <a href="product.php?id=' . $cproduct['product_id'] . '" class="product_name">' . $cproduct['product_name'] . '</a></td>
        </div>';
        $counter++;
        if($counter % $productsperRow == 0) {
            $returnHTML.= '</tr><tr>';
        }
    }
    return $returnHTML;
}

function getProductInfoById($id, $database) {
    $query = mysqli_query($database,"SELECT * FROM Product WHERE product_id = {$_GET['id']}");

    $result = mysqli_fetch_array($query);
    return $result;
}

function getRelatedProducts()  {

}