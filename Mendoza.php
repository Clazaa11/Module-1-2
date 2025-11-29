<?php
	$item1 = "Mouse";
	$prices1 = 1000;

	$item2 = "Keyboard";
	$prices2 = 1200;

	$item3 = "Headset";
	$prices3 = 600;

	$item4 = "Monitor";
	$prices4 = 7500;

	$bundle = ($prices1 + $prices2 + $prices3 + $prices4) * 0.80;
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
	<header id="header">
        <h1>PC PARTS</h1>
        <nav id="nav-bar">
            <a href="#items" class="nav-link">Items</a>
            <a href="#prices" class="nav-link">Pricing</a>
        </nav>
    </header>

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

            <tr>
                <td><?php echo $item1; ?></td>
                <td><?php echo $prices1; ?></td>
            </tr>

            <tr>
                <td><?php echo $item2; ?></td>
                <td><?php echo $prices2; ?></td>
            </tr>

            <tr>
                <td><?php echo $item3; ?></td>
                <td><?php echo $prices3; ?></td>
            </tr>

            <tr>
                <td><?php echo $item4; ?></td>
                <td><?php echo $prices4; ?></td>
            </tr>

            <tr class="total">
                <td>Bundle Price (All Items)</td>
                <td><?php echo $bundle; ?></td>
            </tr>
        </table>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Clarence V. Mendoza | CYB - 201</p>
    </footer>
</body>
</html>