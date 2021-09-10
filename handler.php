<?php
if (isset($_POST["username"])) {
    echo "Привет,незнакомец!";
} else {
    $stpHeading = "<h1>Привет, " . $_POST["username"] . "</h1>";
    switch ($_POST["favoritecolor"]) {
        case "r":
            $strBackgroundColor = "rgb(255,0,0)";
            break;
        case "g":
            $strBackgroundColor = "rgb(0,255,0)";
            break;
        case "b":
            $strBackgroundColor = "rgb(0,0,255)";
        default:
            $strBackgroundColor = "rgb(255,255,255)";
            break;
    }
}
?>
<html>
<head>
    <title>Форма</title>
</head>
<body style="background: <?php echo $strBackgroundColor; ?>;">
<?php echo $stpHeading ?>
</body>
</html>
