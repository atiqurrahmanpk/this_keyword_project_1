<?php 
include 'includes/header.php';
include 'includes/Product.php';


$products =[  // Product.php এর class Produc_t টি এখানে ব্যবহার হয়েছে।

	new Produc_t("Laptop", 52000),  
    new Produc_t("Smartphone", 800),
    new Produc_t("Headphones", 150),
    new Produc_t("Keyboard", 200),
    new Produc_t("Mouse", 500),
    new Produc_t("Monitor", 15000),
    new Produc_t("Mousepad", 50)


];


?>

<h1 class="text-center">Welcome to $this keyword</h1>
<h2 class="text-center">Our Products</h2>
<div class="row">
	<?php foreach ($products as $p_roduct): ?>
		<div class="col-md-4">
			<div class="card mb-4">
				<div class="card-body">
				<h5 class="card-title"><?php echo $p_roduct->getName(); ?> </h5>
				<p class="card-text"><?php echo $p_roduct->getPrice(); ?></p>

				</div>
			</div>
		</div>
	<?php endforeach ?>
</div>

<?php include 'includes/footer.php' ?>
