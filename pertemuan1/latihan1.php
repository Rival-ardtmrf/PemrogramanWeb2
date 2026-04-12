<?php
$A = 123; //variable global

function Test(){
    $A = "test"; //variable lokal
    echo "Nilai A dalam fungsi = $A\n";
}

Test();
echo "Nilai A luar fungsi = $A\n";
?>