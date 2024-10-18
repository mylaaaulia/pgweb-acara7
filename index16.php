<!DOCTYPE html>
<html>

<body>

    <?php
    $food = array("kebab", "salad", "candy","burger", "fruits");
    $jenis = array("junk food", "healthy food", "sweet food","junk food", "healthy food");

    echo "<table border='1' cellpadding='10'>";
    for ($i = 0; $i <= 4; $i++) {
        echo "<tr><td> $food[$i] </td><td> $jenis[$i] </td></tr>";
    }
    echo "</table>";
    ?>

</body>

</html>