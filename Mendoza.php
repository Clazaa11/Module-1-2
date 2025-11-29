<!-- Clarence V. Mendoza | CYB - 201 | November 29, 2025 -->

<?php
    // Initialize item values

    $items = [
        "Mouse" => 1000,
        "Keyboard" => 1200,
        "Headset" => 600,
        "Monitor" => 7500
    ];

    //Comment out the changes
	// $item1 = "Mouse";
	// $prices1 = 1000;

	// $item2 = "Keyboard";
	// $prices2 = 1200;

	// $item3 = "Headset";
	// $prices3 = 600;

	// $item4 = "Monitor";
	// $prices4 = 7500;

	$bundle = array_sum($items) * 0.80;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="storestyles.css">
</head>
<body>
	<?php include "header.php" ?>

    <section id="items">
        <h1>Available Items</h1>
        
        <div class="pic-grid">
            <img src="https://m.media-amazon.com/images/I/71+p3Hx03dL._AC_SL1500_.jpg" class="item-pic">
            <img src="https://platform.theverge.com/wp-content/uploads/sites/2/chorus/uploads/chorus_asset/file/25522631/G309_4.jpg?quality=90&strip=all&crop=7.8125,0,84.375,100" class="item-pic">
            <img src="https://dlcdnwebimgs.asus.com/gain/4BB18AEF-347E-4DB6-B78C-C0FFE1F20385/w750/h470/fwebp" class="item-pic">
            <img src="https://sm.pcmag.com/pcmag_uk/guide/t/the-best-c/the-best-curved-monitors-for-2025_5dq6.png" class="item-pic">
        </div>
    </section>
    
    <section id="prices">
        <h1>Prices</h1>

        <table>
            <tr>
                <th>Item</th>
                <th>Price (₱)</th>
            </tr>

            <?php foreach ($items as $item => $price): ?>
                <tr>
                    <td><?php echo $item; ?></td>
                    <td>
                        <?php 
                            if ($price > 5000) {
                                echo "<b>$price</b>";
                            } else {
                                echo $price;
                            }
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>

            <tr class="total">
                <td>Bundle Price (All Items)</td>
                <td><?php echo $bundle; ?></td>
            </tr>
        </table>
    </section>

    <?php include "footer.php" ?>
</body>
</html>
