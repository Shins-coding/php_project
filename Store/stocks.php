<?php
declare(strict_types=1);                     

$phoneStore = [
    "Samsung Galaxy S25 Ultra"  => [65999.00, 6],
    "Samsung Galaxy S25+"       => [55999.00, 11],
    "Samsung Galaxy S25"        => [45999.00, 4],
    "Samsung Galaxy A55"        => [24999.00, 18],
    "Samsung Galaxy A35"        => [18999.00, 22],
    "Samsung Galaxy A15"        => [9999.00, 35],
    "iPhone 16 Pro Max"         => [78999.00, 3],
    "iPhone 16 Pro"             => [68999.00, 7],
    "iPhone 16"                 => [52999.00, 9],
    "iPhone 16e"                => [32999.00, 14],
    "iPhone SE 2025"            => [25999.00, 21],
    "iPhone 15"                 => [42999.00, 16],
    "Xiaomi 15 Ultra"           => [49999.00, 5],
    "Xiaomi 15 Pro"             => [41999.00, 8],
    "Xiaomi 15"                 => [34999.00, 12],
    "Xiaomi Redmi Note 14 Pro"  => [15999.00, 27],
    "Xiaomi Redmi Note 14"      => [11999.00, 31],
    "Xiaomi Redmi 13C"          => [6999.00, 42],
    "OnePlus 13"                => [45999.00, 10],
    "OnePlus 13R"               => [36999.00, 13],
    "OnePlus 12R"               => [29999.00, 17],
    "OnePlus Nord 4"            => [19999.00, 24],
    "OnePlus Nord CE4"          => [14999.00, 29],
    "OnePlus Nord N30"          => [8999.00, 38],
    "Realme GT7 Pro"            => [42999.00, 7],
    "Realme GT7"                => [35999.00, 15],
    "Realme 14 Pro+"            => [28999.00, 19],
    "Realme 14 Pro"             => [18999.00, 25],
    "Realme C65"                => [10999.00, 33],
    "Realme C55"                => [7999.00, 47]
];

$tax_rate = 12;

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

function get_tax_due(float $price, int $qty, int $tax = 0): float {
    return ($price * $qty) * ($tax / 100);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MenTech Mobile Store</title>
    <link rel="stylesheet" href="Store/stocks.css">
</head>
<body>
    <div class="nav">
        <div class="nav-top">
            <h1>Mentech Phone Store</h1>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="phones.php">Phones</a></li>
                <li><a href="stocks.php">Stocks</a></li>
            </ul>
        </div>
    </div>
<h1>MenTech Mobile Store</h1>
<h2>Stock Control</h2>

<table>
    <thead>
        <tr>
            <th>Product</th>
            <th>Stock</th>
            <th>Re-order</th>
            <th>Total Value</th>
            <th>Tax Due</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach ($phoneStore as $product_name => $data) {
    $price = $data[0];  
    $stock = $data[1];  
    ?>
    <tr>
        <td><?php echo $product_name; ?></td>
        <td><?php echo $stock; ?></td>
        <td><?php echo get_reorder_message($stock); ?></td>
        <td>P<?php echo number_format(get_total_value($price, $stock), 2); ?></td>
        <td>p<?php echo number_format(get_tax_due($price, $stock, $tax_rate), 2); ?></td>
    </tr>
    <?php
}
?>
    </tbody>
</table>

</body>
</html>

