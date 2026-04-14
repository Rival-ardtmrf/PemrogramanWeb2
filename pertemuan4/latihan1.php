<?php
$brush_price = 5; 
$counter = 10;

echo "<table border='1' align='center' style='border-collapse: collapse; width: 200px; text-align: center;'>";
echo "  <thead>
            <tr>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>";

while ($counter <= 100) {
    $total_price = $brush_price * $counter;
    
    echo "<tr>
            <td>{$counter}</td>
            <td>{$total_price}</td>
          </tr>";

    $counter += 10; // Menggunakan shorthand increment
}

echo "  </tbody>
      </table>";
?>