<?php 
include 'includes/header.php';
include 'includes/Product.php';
$img =  "<img src='assets/images/AtiqPic.jpg' alt='Chairman' />";


$products =[  // Product.php এর class Produc_t টি এখানে ব্যবহার হয়েছে।

	new Produc_t("Atiqur Rahman", "Chairman of Nujoom Al-Mal", $img),
	new Produc_t("Smartphone", 800, $img),
	new Produc_t("Headphones", 150, $img),
	new Produc_t("Keyboard", 200, $img),
	new Produc_t("Mouse", 500, $img),
	new Produc_t("Monitor", 15000, $img),
	new Produc_t("Mousepad", 50, $img) 
    



	// new Produc_t("Smartphone", 800),
    // new Produc_t("Headphones", 150),
    // new Produc_t("Keyboard", 200),
    // new Produc_t("Mouse", 500),
    // new Produc_t("Monitor", 15000),
    // new Produc_t("Mousepad", 50)

];


?>

<h1 class="text-center">Welcome to Nujoom Al-Mal</h1>
<h2 class="text-center">Our Team</h2>
<!-- Bootstrap card image -->
<div class="row">
	<?php foreach ($products as $p_roduct): ?>
		<div class="col-md-3">
			<div class="grid-card mb-3">
				<div class="grid-card" style="width: 10rem;">
					<img class="card-img-top img-fluid"><?php echo $p_roduct->getImage(); ?></img>
						<div class="grid-card-body">
							<h3 class="grid-card-title text-center text-primary"><?php echo $p_roduct->getName(); ?> </h3>
							<p class="grid-card-text text-center"><?php echo $p_roduct->getPrice(); ?></p>
						</div>
				</div>
			</div>
		</div>
	<?php endforeach ?>
</div>

<?php include 'includes/footer.php' ?>
