<!DOCTYPE html>
<html>
<head>
    <title>Bob's Auto Parts - Order Results</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Order Results</h2>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tirePrice = 100;
    $oilPrice = 10;
    $sparkPlugPrice = 5;
    $taxRate = 0.10; // 10% tax

    $tireQty = isset($_POST['tireqty']) ? intval($_POST['tireqty']) : 0;
    $oilQty = isset($_POST['oilqty']) ? intval($_POST['oilqty']) : 0;
    $sparkQty = isset($_POST['sparkqty']) ? intval($_POST['sparkqty']) : 0;
    $customerType = $_POST['find'];

    $itemsOrdered = $tireQty + $oilQty + $sparkQty;
    $subtotal = ($tireQty * $tirePrice) + ($oilQty * $oilPrice) + ($sparkQty * $sparkPlugPrice);

    if ($customerType == 'a') {
        $subtotal *= 0.80;
    }

    $totalIncludingTax = $subtotal * (1 + $taxRate);

    echo '<p>Order processed at '.date('H:i, jS F Y').'</p>';
    echo '<p>Your order is as follows: </p>';
    echo '<ul>';
    echo '<li>Tires: ' . $tireQty . '</li>';
    echo '<li>Oil: ' . $oilQty . '</li>';
    echo '<li>Spark Plugs: ' . $sparkQty . '</li>';
    echo '</ul>';
    echo '<p>Items ordered: ' . $itemsOrdered . '</p>';
    echo '<p>Subtotal: $' . number_format($subtotal, 2) . '</p>';
    echo '<p>Total including tax: $' . number_format($totalIncludingTax, 2) . '</p>';
    if ($customerType == 'b') {
        echo '<p>Customer referred to by TV advert</p>';
    }
} else {
    echo '<p>No order details received. Please make sure you submit the order form.</p>';
}
?>
</body>
</html>
