<!DOCTYPE html>
<html>

<body>

    <?php
    $favfood = "";

    switch ($favfood) {
        case "kebab":
            echo "makanan kesukaan kamu adalah kebab!";
            break;
        case "dimsum":
            echo "makanan kesukaan kamu adalah dimsum!";
            break;
        case "nasi goreng":
            echo "makanan kesukaan kamu adalah nasi goreng!";
            break;
        default:
            echo "makanan kesukaan kamu adalah kebab, dimsum dan nasi goreng!";
    }
    ?>

</body>

</html>