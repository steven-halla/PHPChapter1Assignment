<!DOCTYPE html>
<html>
<head>
    <title>Bob's Auto Parts - Freight Costs</title>
</head>
<body>
<table style="border: 0px; margin-left: 13px"; >
    <tr>
        <td style="background: #cccccc; text-align: center; padding-right: 10px;"">Distance</td>
        <td style="background: #cccccc; text-align: center; padding-right: 10px;"">Cost</td>
        <td style="background: #cccccc; text-align: center; padding-right: 22px;">Tax (10%)</td>
        <td style="background: #cccccc; text-align: center; padding-right: 22px;"">Total</td>
    </tr>

    <?php
    $distance = 50;
    while ($distance <= 250) {
        $cost = $distance / 10;
        $tax = $cost * 0.10; // Calculate 10% tax
        $total = $cost + $tax; // Total cost including tax
        echo "<tr>
              <td style=\"text-align: right;\">".$distance."</td>
              <td style=\"text-align: right;\">".$cost."</td>
              <td style=\"text-align: right;\">".number_format($tax, 2)."</td>
              <td style=\"text-align: right;\">".number_format($total, 2)."</td>
              </tr>\n";
        $distance += 50;
    }
    ?>

</table>
<p><strong>Tax is 10%</strong></p>
</body>
</html>
