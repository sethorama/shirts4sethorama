<?php

require_once("inc/config.php");

$pageTitle = "Shirts 4 Mike";
$section = "index";
include(ROOT_PATH . 'inc/header.php'); ?>

		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="<?php echo BASE_URL; ?>img/mike-the-frog.png" alt="Mike the Frog says:">
				<div class="button">
					<a href="<?php echo BASE_URL; ?>shirts/">
						<h2>Hey, I&rsquo;m Mike!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">
			<?php include(ROOT_PATH . "inc/products.php"); ?>
			<div class="wrapper">

				<h2>Mike&rsquo;s Latest Shirts</h2>
				
				<ul class="products">
				<?php
					$total_products = count($products);
					$position = 0;
					$list_view_html = "";
					foreach($products as $product) {
						$position = $position + 1;
						if($total_products - $position < 4) {
							$list_view_html = get_list_view_html($product) . $list_view_html;
						}
					}
					echo $list_view_html; 
				?>											
				</ul>

			</div>

		</div>

<?php include(ROOT_PATH . 'inc/footer.php'); ?>