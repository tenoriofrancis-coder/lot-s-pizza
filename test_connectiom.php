<?php
include 'config.php';
echo "✅ Connected to rrj_inventory successfully!<br><br>";

$result = $conn->query("SELECT * FROM clothing_inventory");

echo "<h3>RRJ Clothing Inventory</h3>";
echo "<table border='1' cellpadding='8'>";
echo "<tr><th>ID</th><th>Item</th><th>Category</th><th>Customer</th><th>Price</th><th>Supplier</th><th>Sales</th><th>Date Added</th></tr>";

while ($row = $result->fetch_assoc()) {
echo "<tr>
<td>{$row['item_id']}</td>
<td>{$row['item_name']}</td>
<td>{$row['category']}</td>
<td>{$row['customer']}</td>
<td>₱{$row['price']}</td>
<td>{$row['supplier']}</td>
<td>{$row['sales']}</td>
<td>{$row['date_added']}</td>
</tr>";
}
echo "</table>";
?>