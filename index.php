<?php
require __DIR__ . '/classes/Product.php';

$products = [
    new Products('Acer', 'Description', 300.99),
    new Products('HP', 'Description', 200.99),
    new Products('Asus', 'Description', 500.99),
    new Products('Mc Book', 'Description', 800.99),
    new Products('Sony', 'Description', 100.99),
    new Products('MSI', 'Description', 700.99),
];

// var_dump($products);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pc Store</title>

    <style>
        #products {
            display: flex;
            flex-wrap: wrap;
        }

        .product {
            width: 300px;
            background-color: white;
            color: black;
            margin: 0.5rem;
            padding: 0.5rem;
        }

        body {
            background-color: black;
            color: white;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <header id="site_header">
        <h1>Pc Store</h1>
    </header>

    <main id="products">
        <?php foreach ($products as $product) : ?>
            <div class="product">
                <img src="<?= $product->img ?>" alt="">
                <h1><?= $product->name; ?></h1>
                <p><?= $product->description; ?></p>
                <div class="price"><?= $product->price; ?></div>
            </div>

        <?php endforeach; ?>
    </main>

    <footer id="site_footer">

    </footer>
</body>

</html>