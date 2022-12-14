<?php
    if ($_POST){
        $nama = $_POST["nama"];
        $umur = $_POST["umur"];

        // echo "Hallo $nama ($umur). Salam wlewlowlewlo";
        echo "Hallo ", $nama, " (", $umur, "). Kamu sehat?";
    }
?>