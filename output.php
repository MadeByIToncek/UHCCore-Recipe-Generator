<?php
$counter = 0;
$usedEnch = 0;
if (!$_POST["itemName"] == "") {
    $itemName = ($_POST["itemName"]);
} else {
    exit("Item name can't be empty!<br><form action='index.php'><input type='submit' value='Return'></form>");
};
if (!$_POST["R1C1"] == "") {
    $R1C1 = ($_POST["R1C1"]);
} else {
    $R1C1 = "AIR";
};
if (!$_POST["R1C2"] == "") {
    $R1C2 = ($_POST["R1C2"]);
} else {
    $R1C2 = "AIR";
};
if (!$_POST["R1C3"] == "") {
    $R1C3 = ($_POST["R1C3"]);
} else {
    $R1C3 = "AIR";
};
if (!$_POST["R2C1"] == "") {
    $R2C1 = ($_POST["R2C1"]);
} else {
    $R2C1 = "AIR";
};
if (!$_POST["R2C2"] == "") {
    $R2C2 = ($_POST["R2C2"]);
} else {
    $R2C2 = "AIR";
};
if (!$_POST["R2C3"] == "") {
    $R2C3 = ($_POST["R2C3"]);
} else {
    $R2C3 = "AIR";
};
if (!$_POST["R3C1"] == "") {
    $R3C1 = ($_POST["R3C1"]);
} else {
    $R3C1 = "AIR";
};
if (!$_POST["R3C2"] == "") {
    $R3C2 = ($_POST["R3C2"]);
} else {
    $R3C2 = "AIR";
};
if (!$_POST["R3C3"] == "") {
    $R3C3 = ($_POST["R3C3"]);
} else {
    $R3C3 = "AIR";
};
if (!$_POST["output"] == "") {
    $output = ($_POST["output"]);
} else {
    exit("Output can't be empty!<br><form action='index.php'><input type='submit' value='Return'></form>");
};
if (!$_POST["amount"] == "") {
    $amount = ($_POST["amount"]);
} else {
    $amount = 1;
};
if (!$_POST["damage"] == "") {
    $damage = ($_POST["damage"]);
} else {
    $damage = 0;
};
$defaultName = ($_POST["defaultName"]);
if (!$_POST["limit"] >= -1) {
    exit("Limit can't be lower then -1!<br><form action='index.php'><input type='submit' value='Return'></form>");
} else {
    $limit = ($_POST["limit"]);
};
if(!$_POST["E1"] == "") {
    $enchantment[$counter][0] = $_POST["E1"] ;
    if(!$_POST["E1A"] == "") {
        $enchantment[$counter][1] = $_POST["E1A"];
    } else {
        $enchantment[$counter][1] = 1;
    }
    $counter++;
};
if(!$_POST["E2"] == "") {
    $enchantment[$counter][0] = $_POST["E2"] ;
    if(!$_POST["E2A"] == "") {
        $enchantment[$counter][1] = $_POST["E2A"];
    } else {
        $enchantment[$counter][1] = 1;
    }
    $counter++;
};
if(!$_POST["E3"] == "") {
    $enchantment[$counter][0] = $_POST["E3"] ;
    if(!$_POST["E3A"] == "") {
        $enchantment[$counter][1] = $_POST["E3A"];
    } else {
        $enchantment[$counter][1] = 1;
    }
    $counter++;
};
if(!$_POST["E4"] == "") {
    $enchantment[$counter][0] = $_POST["E4"] ;
    if(!$_POST["E4"] == "") {
        $enchantment[$counter][1] = $_POST["E4A"];
    } else {
        $enchantment[$counter][1] = 1;
    }
    $counter++;
};
if(!$_POST["E5"] == "") {
    $enchantment[$counter][0] = $_POST["E5"] ;
    if(!$_POST["E5A"] == "") {
        $enchantment[$counter][1] = $_POST["E5A"];
    } else {
        $enchantment[$counter][1] = 1;
    }
    $counter++;
};
if($_POST["E1"] == "" && $_POST["E2"] == "" && $_POST["E3"] == "" && $_POST["E4"] == "" && $_POST["E5"] == "") {
    $usedEnch = 0;
} else {
    $usedEnch = 1;
}

echo "'$itemName':<br>";
echo "'1': $R1C1/0 $R1C2/0 $R1C3/0<br>";
echo "'2': $R2C1/0 $R2C2/0 $R2C3/0<br>";
echo "'3': $R3C1/0 $R3C2/0 $R3C3/0<br>";
echo "craft: $output/$amount/$damage<br>";
echo "default-name: $defaultName<br>";
echo "enchants: ";
if($usedEnch) {
foreach($enchantment as $enchant) {
        echo "<br> - " . $enchant[0] . " " . $enchant[1];
}
} else {
    echo "[]<br>";
}
echo "<br>limit: $limit<br>";