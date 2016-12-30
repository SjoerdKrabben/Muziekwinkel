<?php
$page_title = 'GIG-Store.com - For your Rockband needs!';
$categorie = 'Gitaar';
include('includes/header.php');
include('includes/database.php');
include('includes/product.php');
?>
		
		<!--MAIN CONTENT-->
		<div class="content">
			<h1>Gitaren</h1>
			<table class="article-grid">
				<tr>
					<?php
						echo get_products($conn, $categorie);
					?>
				</tr>
			</table>
		</div>
		
		<!--MAIN CONTENT-->
		<div class="advertising-main">
			<div class="advertising-sub">
				<img src="images/advertenties/skyscraper3.gif" alt="advertentie">
			</div>
		</div>
		
		<?php
		include('includes/footer.php');
		?>