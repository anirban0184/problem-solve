<?php
// 1 no problem solve
echo "<h2>1. Owener wants to visualize the each cake flavor types.</h2>";
$cakeTypes = ["Black Forrest", "Vanilla Cake", "Red Velvet", "Lemon Sponge Cake", "Chocolate Cake"];
$cakeTypeCount = count($cakeTypes);
for($x = 0; $x < $cakeTypeCount; $x++){
    echo "Cake Types = " . $cakeTypes[$x] . "<br>";
}

//2 No Problem Solve
echo "<h2>2. Owner wants to visualize the total inventory cost for each cake per pound.</h2>";
$cakeInventoryCost = [780, 600, 800, 650, 660];
$sum = 0;
for($i=0; $i < count($cakeInventoryCost); $i++){
    $sum += $cakeInventoryCost[$i];
}
$utilityCost = ($sum * 3)/100;

$otherCost = ["transport" => 150, "utility cost" => $utilityCost, "Space Cost" => 50, "Staff Cost" => 60];
$otherCostSum = 0;

$otherCostKey = array_keys($otherCost);
for($i=0; $i < count($otherCost); $i++){
    $otherCostSum += $otherCost[$otherCostKey[$i]];
}
echo "Total Inventory Cost each cake per pound = " . ($sum + $otherCostSum);



// 3 no problem solve with foreeach
echo "<h2>3. Owner wants to visualize the selling price before discount for each cake per pound.</h2>";
echo "<h3>3 No Problem Solve With Foreach </h3>";

$cakeTypes2 = ["Black Forrest" =>780 , "Vanilla Cake" => 600, "Red Velvet" => 800, "Lemon Sponge Cake" => 650, "Chocolate Cake" => 660];

foreach($cakeTypes2 as $key => $value){    
    echo $key . " = " . $value . "<br>";
}

// 3 No Problem Solve with for loop
echo "<h3>3 No Problem Solve With For Loop </h3>";

$cakeArrayKey = array_keys($cakeTypes2);

for($i=0; $i < count($cakeTypes2); $i++) {
    echo $cakeArrayKey[$i] . "=" . $cakeTypes2[$cakeArrayKey[$i]] . "<br>";
}

//4 No Problem Solve
echo "<h2>4. Owner wants to visualize the selling price after discount for each cake per pound.</h2>";
$cakeTypes2 = ["Black Forrest" =>780 , "Vanilla Cake" => 600, "Red Velvet" => 800, "Lemon Sponge Cake" => 650, "Chocolate Cake" => 660];

$discountPrice5 = 0;
$cakeTypesKey = array_keys($cakeTypes2);

for($i=0; $i < 3; $i++) {
    $discountPrice5 = ($cakeTypes2[$cakeTypesKey[$i]] * 5) / 100;
    echo "After 5% discount \" $cakeTypesKey[$i] \" = " . $cakeTypes2[$cakeTypesKey[$i]] - $discountPrice5 . "<br>";
    $discountPrice7 = 0;

    if($i == 2) {
        for($j=3; $j < count($cakeTypes2); $j++){
            $discountPrice7 = ($cakeTypes2[$cakeTypesKey[$j]] * 7) / 100;
            echo "After 7% discount \" $cakeTypesKey[$j] \" = " . $cakeTypes2[$cakeTypesKey[$j]] - $discountPrice7 . "<br>";
        }
    }
    
}

?>