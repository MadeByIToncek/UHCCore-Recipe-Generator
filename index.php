<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Main</title>
</head>
<body>
    <form method="post" action="output.php">
        Item name: <input type="text" name="itemName"/><br>
        First row: <input name="R1C1" type="text"/><input name="R1C2" type="text"/><input name="R1C3" type="text"/><br>
        Second row: <input name="R2C1" type="text"/><input name="R2C2" type="text"/><input name="R2C3" type="text"/><br>
        Third row: <input name="R3C1" type="text"/><input name="R3C2" type="text"/><input name="R3C3" type="text"/><br>
        Default name: <select name="defaultName"><option value="false">False</option><option value="true">True</option></select><br>
        Craft: <input name="output" type="text"/><input class="amount" name="amount" type="number"><input class="amount" name="damage" type="number"><br>
        Enchantments: <input name="E1" type="text"/><input class="amount" name="E1A" type="number"><br><input class="enchant" name="E2" type="text"/><input class="amount" name="E2A" type="number"><br><input class="enchant" name="E3" type="text"/><input class="amount" name="E3A" type="number"><br><input class="enchant" name="E4" type="text"/><input class="amount" name="E4A" type="number"><br><input class="enchant" name="E5" type="text"/><input class="amount" name="E5A" type="number"><br>
        Limit: <input name="limit" class="amount" type="number"/> (-1 for unlimited)<br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>