<?php
include 'includes/header.php';
include 'includes/Product.php';

// পণ্যের তালিকা তৈরি
$products = [  // Product.php এর class Produc_t টি এখানে ব্যবহার হয়েছে।
    new Produc_t("Laptop", 52000),  
    new Produc_t("Smartphone", 800),
    new Produc_t("Headphones", 150),
    new Produc_t("Keyboard", 200),
    new Produc_t("Mouse", 500),
    new Produc_t("Monitor", 15000),
    new Produc_t("Mousepad", 50)
    
];

?>

<h1 class="text-center">Our Products</h1>
<div class="row">
    <?php foreach ($products as $pr_oduct): ?>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $pr_oduct->getName(); ?></h5>
                    <p class="card-text">Price: <?php echo $pr_oduct->getPrice(); ?> tk</p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php include 'includes/footer.php'; ?>



