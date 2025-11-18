<?php
echo "<table border='1' cellpadding='5' cellspacing='0'>";

echo "<tr>";
echo "<th>bilangan</th>";
for ($i = 1; $i <= 10; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";

    echo "<td><b>$i</b></td>";

    // Perkalian
    for ($j = 1; $j <= 10; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }

    echo "</tr>";
}

echo "</table>";
?>
