<?php
declare(strict_types=1);

// Mendoza, Clarence V. | CYB - 201 | December 3, 2025

    static $tax = 12 / 100;

    $products = [
        "Mouse" => [1000.00, 12],
        "Keyboard" => [1200.00, 26],
        "Headset" => [600.00, 8],
        "Monitor" => [7500.00, 4],
        "GPU (RTX 4060)" => [21000.00, 3],
        "CPU (Ryzen 7)" => [14500.00, 6],
        "SSD 1TB" => [4200.00, 15],
        "Power Supply" => [3500.00, 9]
    ];
    
    function get_reorder_message(int $stock): string {
        return ($stock < 10) ? "Yes" : "No" ;
    }

    function get_total_value(float $price, int $quan): float {
        return $price * $quan;
    }

    function get_tax_due(float $prices, int $quant, $tax): float {
        return ($prices * $quant) * $tax;
    }
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GAMERS GEAR SHOP</title>
	<link rel="stylesheet" href="storestyles.css">
</head>
<body>
    <?php include "header.php" ?>

    <section id="items">
        <h1>Available Items</h1>
        
        <!-- Pictures of items -->
        <div class="pic-grid">
            <img src="https://m.media-amazon.com/images/I/71+p3Hx03dL._AC_SL1500_.jpg" class="item-pic">
            <img src="https://platform.theverge.com/wp-content/uploads/sites/2/chorus/uploads/chorus_asset/file/25522631/G309_4.jpg?quality=90&strip=all&crop=7.8125,0,84.375,100" class="item-pic">
            <img src="https://dlcdnwebimgs.asus.com/gain/4BB18AEF-347E-4DB6-B78C-C0FFE1F20385/w750/h470/fwebp" class="item-pic">
            <img src="https://sm.pcmag.com/pcmag_uk/guide/t/the-best-c/the-best-curved-monitors-for-2025_5dq6.png" class="item-pic">
            <img src="https://netcodex.ph/wp-content/uploads/2024/08/GIGABYTE-GeForce-RTX-4060-Gaming-OC-8G-Graphics-Card.jpg.webp" class="item-pic">
            <img src="https://www.notebookcheck.net/fileadmin/Notebooks/AMD/ryzen7_badge.jpg" class="item-pic">
            <img src="https://cf.shopee.ph/file/ph-11134207-81zte-mh8yer527imnc1" class="item-pic">
            <img src="https://pcx.com.ph/cdn/shop/files/PS-HUNTKEY-750W-MVP-K750-80_-GOLD-FULL-MOD-1.jpg?v=1699923208" class="item-pic">
        </div>
    </section>

    <h1>Stock Control</h1>

    <table>
        <tr>
            <th>PRODUCT</th>
            <th>STOCKS</th>
            <th>RE-ORDER</th>
            <th>TOTAL VALUE</th>
            <th>TAX DUE</th>
        </tr>

        <?php foreach ($products as $name => $info): ?>
            <?php 
                $p = $info[0];
                $s = $info[1];
            ?>

            <tr>
                <td><?= $name ?></td>
                <td><?= $s ?></td>
                <td><?= get_reorder_message($s) ?></td>
                <td><?= round(get_total_value($p, $s), 2) ?></td>
                <td><?= round(get_tax_due($p, $s, $tax), 2) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?php include "footer.php" ?>
</body>
</html>
