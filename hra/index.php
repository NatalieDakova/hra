<?php
include("tridy.php");
?>

<!DOCTYPE html>
<html lang='cs'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Hra</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/css/uikit.min.css" />
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/js/uikit-icons.min.js"></script>
</head>
<body>

    <p>Postava <?php echo $properties->race ?> </br>
    <?php echo "pohlaví - " .  $properties->sex ?> </br>
    <?php echo "jméno - " .  $properties->name ?> </br>
    <?php echo "příjmení - " .  $properties->surname ?> </br>
    <?php echo "věk - " .  $properties->age ?> </br>
    <?php echo "životy - " .  $properties->health ?> </br>
    <?php echo "síla - " .  $properties->strength ?> </br>
    <?php echo "stamina - " .  $properties->stamina ?> </br>
    <?php echo "moudrost - " .  $properties->wisdom ?> </br>
    <?php echo "charimsa - " .  $properties->charisma ?> </br>
    <?php echo "inteligence - " .  $properties->inteligence ?> </br>
    <?php echo "obratnnost - " . $properties->dexerity ?> </br>

    </p>
</body>
</html>